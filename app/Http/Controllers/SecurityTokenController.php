<?php

namespace App\Http\Controllers;

use App\Models\SecurityToken;
use App\Http\Requests\StoreSecurityTokenRequest;
use App\Http\Requests\UpdateSecurityTokenRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SecurityTokenController extends Controller
{
    /**
     * Generate a security token of 7 digits and two letters.
     *
     * @return string
     */
    private function generateToken()
    {
        return rand(1000000, 9999999)
            . Str::random(1)
            . Str::random(1);
    }

    /**
     * Store a newly created token in storage.
     *
     * @param int $user
     * @return void
     */
    public function store($id, $two_factor = false)
    {

        // Generate a new token
        $tokenValue = $this->generateToken();

        //finds all tokens for the user and deletes them
        if ($two_factor === true) {

            //gets the user's token record
            $token = SecurityToken::where('user_id', $id)->where('token_type', 'two-factor')->first();

            //checks if the token has expired
            if ($token->expiration_time < Carbon::now()) {
                //deletes the token
                $token->delete();

                //regenerate a new token
                $tokenValue = $this->generateToken();

                // Set the expiration time (e.g. 1 month from now)
                $expirationTime = Carbon::now()->addMonths(1);

                $record = [
                    'user_id' => $id,
                    'token_value' => $tokenValue,
                    'expiration_time' => $expirationTime,
                    'token_type' => 'two-factor'
                ];

                // Create a new SecurityToken record in the database
                SecurityToken::create($record);
            }
        } else {
            $this->destroy($id, 'email_token');

            // Set the expiration time (e.g., 10 minutes from now)
            $expirationTime = Carbon::now()->addMinutes(10);

            $record = [
                'user_id' => $id,
                'token_value' => $tokenValue,
                'expiration_time' => $expirationTime,
            ];

            // Create a new SecurityToken record in the database
            SecurityToken::create($record);
        }

        return $tokenValue;
    }


    /**
     * Remove the specified token from storage.
     *
     * @param SecurityToken $securityToken
     * @return void
     */
    public function destroy($user, $type = 'email_token')
    {
        // Find the token in the database
        $token = SecurityToken::where('user_id', $user)->where('token_type', $type)->first();

        // Delete the token from the database
        $token->delete();
    }


    /**
     * The function finds the latest security token for a given user ID and deletes all other tokens.
     *
     * @param userId The `userId` parameter is the ID of the user for whom we want to find the latest
     * security token.
     *
     * @return the latest (or only) security token for the given user ID.
     */
    public function find($userId, $type = 'email_token')
    {
        $tokens = SecurityToken::where('user_id', $userId)->where('token_type', $type)->orderBy('created_at', 'desc')->get();

        if ($tokens->count() > 1) {
            // Delete all tokens except the latest one
            $tokensToDelete = $tokens->slice(1);
            foreach ($tokensToDelete as $token) {
                $token->delete();
            }
        }

        // Get the latest (or only) token
        $latestToken = $tokens->first();

        return $latestToken;
    }
}
