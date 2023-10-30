<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banks;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $jayParsedAry = [
            "9 payment service Bank" => "120001",
            "AB MICROFINANCE BANK" => "090270",
            "ABBEY MORTGAGE BANK" => "070010",
            "ABOVE ONLY MICROFINANCE BANK" => "090260",
            "ABU MICROFINANCE BANK" => "090197",
            "ACCESS BANK" => "000014",
            "ACCESSMONEY" => "100013",
            "ACCION MFB" => "090134",
            "ADDOSSER MFBB" => "090160",
            "ADEYEMI COLLEGE STAFF MICROFINANCE BANK" => "090268",
            "ADVANS LA FAYETTE MFB" => "090155",
            "AG MORTGAGE BANK PLC" => "100028",
            "AGOSASA MICROFINANCE BANK" => "090371",
            "AL-BARKAH MFB" => "090133",
            "ALEKUN MICROFINANCE BANK" => "090259",
            "ALERT MFB" => "090297",
            "ALHAYAT MFB" => "090277",
            "ALLWORKERS MFB" => "090131",
            "ALPHAKAPITAL MFB" => "090169",
            "AMJU MFB" => "090180",
            "AMML MFB" => "090116",
            "APEKS MICROFINANCE BANK" => "090143",
            "APPLE  MICROFINANCE BANK" => "090376",
            "ARISE MFB" => "090282",
            "ASOSAVINGS" => "090001",
            "ASSETS Microfinance Bank" => "090473",
            "ASTRAPOLARIS MFB" => "090172",
            "ATBU  Microfinance Bank" => "090451",
            "AUCHI MICROFINANCE BANK" => "090264",
            "Abucoop  Microfinance Bank" => "090424",
            "Ada MFB" => "090483",
            "Afekhafe MFB" => "090292",
            "Afemai Microfinance Bank" => "090518",
            "Alvana Microfinance Bank" => "090489",
            "Amac Microfinance Bank" => "090394",
            "Ampersand Microfinance bank" => "090529",
            "Anchorage MFB" => "090476",
            "Aniocha MFB" => "090469",
            "Arca Payments" => "110011",
            "Assets Matrix MFB" => "090287",
            "Avuenegbe MFB" => "090478",
            "BAINES CREDIT MFB" => "090188",
            "BALOGUN GAMBARI MFB" => "090326",
            "BAYERO MICROFINANCE BANK" => "090316",
            "BC KASH MFB" => "090127",
            "BETA-ACCESS YELLO" => "100052",
            "BIPC MICROFINANCE BANK" => "090336",
            "BOCTRUST MICROFINANCE BANK" => "090117",
            "BOI MF Bank" => "090444",
            "BOSAK MFB" => "090176",
            "BOWEN MFB" => "090148",
            "BRENT MORTGAGE BANK" => "070015",
            "BRETHREN MICROFINANCE BANK" => "090293",
            "BRIGHTWAY MFB" => "090308",
            "BUBAYERO Microfinance Bank" => "090512",
            "Balogun Fulani  Microfinance Bank" => "090181",
            "Banex Microfinance Bank" => "090425",
            "Benysta Microfinance Bank" => "090413",
            "Bluewhales  Microfinance Bank" => "090431",
            "Boji Boji Microfinance Bank" => "090494",
            "Bonghe Microfinance Bank" => "090319",
            "Borgu MFB" => "090395",
            "Borno Renaissance Microfinance bank" => "090508",
            "Boromu Microfinance bank" => "090501",
            "Borstal Microfinance Bank" => "090454",
            "Bridgeway Microfinance Bank" => "090393",
            "Business Support Microfinance Bank" => "090406",
            "CAPITALMETRIQ SWIFT MICROFINANCE BANK" => "090509",
            "CARBON" => "100026",
            "CARETAKER Microfinance Bank" => "090472",
            "CASHCONNECT   MICROFINANCE BANK" => "090360",
            "CELLULANT" => "100005",
            "CEMCS MFB" => "090154",
            "CHIKUM MICROFINANCE BANK" => "090141",
            "CIT MICROFINANCE BANK" => "090144",
            "CITI BANK" => "000009",
            "COASTLINE MICROFINANCE BANK" => "090374",
            "CONSUMER  MFB" => "090130",
            "CONTEC GLOBAL" => "100032",
            "COOP Mortgage Bank" => "070021",
            "CORONATION" => "060001",
            "COVENANT MFB" => "070006",
            "CREDIT AFRIQUE MFB" => "090159",
            "CROWDFORCE" => "110017",
            "Calabar Microfinance Bank" => "090415",
            "Capricorn Digital" => "110023",
            "Capstone MF Bank" => "090445",
            "Catland Microfinance Bank" => "090498",
            "Chanelle Bank" => "090397",
            "Changan RTS Microfinance Bank" => "090470",
            "Chase Microfinance bank" => "090523",
            "Cherish Microfinance Bank" => "090440",
            "Chibueze Microfinance Bank" => "090416",
            "Chukwunenye  Microfinance Bank" => "090490",
            "Cintrust MFB" => "090480",
            "Citizen Trust Microfinance Bank Ltd" => "090343",
            "Cloverleaf  MFB" => "090511",
            "CoalCamp Microfinance Bank" => "090254",
            "Corestep MICROFINANCE BANK" => "090365",
            "Crescent Microfinance bank" => "090526",
            "CrossRiver  Microfinance Bank" => "090429",
            "Crutech  Microfinance Bank" => "090414",
            "DAYLIGHT MICROFINANCE BANK" => "090167",
            "DIAMOND BANK" => "000005",
            "Davodani  Microfinance Bank" => "090391",
            "Delta Trust Mortgage bank" => "070023",
            "E-BARCS MFB" => "090156",
            "EAGLE FLIGHT MFB" => "090294",
            "EBSU MICROFINANCE Bank" => "090427",
            "ECOBANK BANK" => "000010",
            "ECOBANK XPRESS ACCOUNT" => "100008",
            "EDFIN MFB" => "090310",
            "EK-Reliable Microfinance Bank" => "090389",
            "EKONDO MFB" => "090097",
            "EMERALDS MFB" => "090273",
            "EMPIRETRUST MICROFINANCE BANK" => "090114",
            "ESAN MFB" => "090189",
            "ESO-E MICROFINANCE BANK" => "090166",
            "ETRANZACT" => "100006",
            "EVANGEL MFB" => "090304",
            "EVERGREEN MICROFINANCE BANK" => "090332",
            "EYOWO MICROFINANCE BANK" => "090328",
            "FAIRMONEY" => "090551",
            "FAME Microfinance Bank" => "090330",
            "FAST Microfinance Bank" => "090179",
            "FBNQUEST MERCHANT BANK" => "060002",
            "FCMB" => "000003",
            "FCMB EASY ACCOUNT" => "100031",
            "FCMB MFB" => "090409",
            "FCT MFB" => "090290",
            "FEDERAL UNIVERSITY DUTSE  MICROFINANCE BANK" => "090318",
            "FEDERALPOLY NASARAWAMFB" => "090298",
            "FETS" => "100001",
            "FFS MICROFINANCE BANK" => "090153",
            "FIDELITY BANK" => "000007",
            "FIDELITY MOBILE" => "100019",
            "FIDFUND MFB" => "090126",
            "FIMS MFB" => "090507",
            "FINATRUST MICROFINANCE BANK" => "090111",
            "FINEX MFB" => "090281",
            "FIRST BANK OF NIGERIA" => "000016",
            "FIRST GENERATION MORTGAGE BANK" => "070014",
            "FIRST MULTIPLE MFB" => "090163",
            "FIRST OPTION MFB" => "090285",
            "FIRST ROYAL MICROFINANCE BANK" => "090164",
            "FIRSTMONIE WALLET" => "100014",
            "FIRSTTRUST MORGAGES LIMITED" => "090107",
            "FORTISMOBILE" => "100016",
            "FSDH" => "400001",
            "FULL RANGE MFB" => "090145",
            "FUTO MFB" => "090158",
            "Federal Polytechnic Nekede Microfinance Bank" => "090398",
            "Fedeth MFB" => "090482",
            "Finca Microfinance Bank" => "090400",
            "Firmus MICROFINANCE BANK" => "090366",
            "First Heritage MFB" => "090479",
            "Foresight Microfinance bank" => "090521",
            "Fortress Microfinance Bank" => "090486",
            "Futminna Microfinance Bank" => "090438",
            "GASHUA MICROFINANCE BANK" => "090168",
            "GATEWAY MORTGAGE BANK" => "070009",
            "GLOBUS BANK" => "000027",
            "GLORY MFB " => "090278",
            "GMB Microfinance Bank" => "090408",
            "GOMONEY" => "100022",
            "GOWANS MFB" => "090122",
            "GREENBANK MFB" => "090178",
            "GREENVILLE MICROFINANCE BANK" => "090269",
            "GROOMING MICROFINANCE BANK" => "090195",
            "GTBANK PLC" => "000013",
            "GTI  Microfinance Bank" => "090385",
            "Garki MFB" => "090484",
            "GiGinya Microfinance Bank" => "090411",
            "Giant Stride MFB" => "090475",
            "Girei MFB" => "090186",
            "Giwa Microfinance Bank" => "090441",
            "Good Neighbours Microfinance Bank" => "090467",
            "Goodnews Microfinance Bank" => "090495",
            "Grant Microfinance Bank" => "090335",
            "Greenwich Merchant Bank" => "060004",
            "Gwong Microfinance bank" => "090500",
            "HACKMAN MICROFINANCE BANK" => "090147",
            "HAGGAI MORTGAGE BANK" => "070017",
            "HALA MFB" => "090291",
            "HASAL MFB" => "090121",
            "HERITAGE" => "000020",
            "Headway MFB" => "090363",
            "Highland Microfinance Bank" => "090418",
            "HomeBase Mortgage" => "070024",
            "HopePSB" => "120002",
            "IBETO  Microfinance Bank" => "090439",
            "IBILE MICROFINANCE BANK" => "090118",
            "IC GLOBALMicrofinance bank" => "090520",
            "IKENNE MFB" => "090324",
            "IKIRE MFB" => "090279",
            "ILASAN MICROFINANCE BANK" => "090370",
            "IMO MICROFINANCE BANK" => "090258",
            "IMPERIAL HOMES MORTGAGE BANK" => "100024",
            "INFINITY MFB" => "090157",
            "INFINITY TRUST  MORTGAGE BANK" => "070016",
            "INTELLIFIN" => "100027",
            "IRL MICROFINANCE BANK" => "090149",
            "ISALEOYO MICROFINANCE BANK" => "090377",
            "Ibom fadama Microfinance Bank" => "090519",
            "Illorin Microfinance Bank" => "090350",
            "Ilora Microfinance Bank" => "090430",
            "Imowo Microfinance Bank" => "090417",
            "Insight Microfinance Bank" => "090434",
            "Interland MFB" => "090386",
            "Iperu Microfinance Bank" => "090493",
            "Ishie  Microfinance Bank" => "090428",
            "Isuofia MFB" => "090353",
            "Izon Microfinance Bank" => "090421",
            "JAIZ BANK" => "000006",
            "JUBILEELIFE" => "090003",
            "Jessefield Microfinance Bank" => "090352",
            "KADPOLY MICROFINANCE BANK" => "090320",
            "KCMB MFB" => "090191",
            "KEGOW(CHAMSMOBILE)" => "100036",
            "KEYSTONE BANK" => "000002",
            "KONGAPAY" => "100025",
            "KONTAGORA MFB" => "090299",
            "KREDI MONEY MICROFINANCE BANK" => "090380",
            "KUDA MICROFINANCE BANK" => "090267",
            "Kingdom College  Microfinance Bank" => "090487",
            "Koraypay" => "110022",
            "Kwasu MF Bank" => "090450",
            "LAPO MFB" => "090177",
            "LAVENDER MICROFINANCE BANK" => "090271",
            "LBIC MORTGAGE BANK" => "070012",
            "LEGEND MICROFINANCE BANK" => "090372",
            "LETSHEGO MICROFINANCE BANK" => "090420",
            "LIVINGTRUST MORTGAGE BANK PLC" => "070007",
            "LOVONUS MICROFINANCE BANK" => "090265",
            "Landgold  Microfinance Bank" => "090422",
            "Light Microfinance Bank" => "090477",
            "Links  Microfinance Bank" => "090435",
            "Lotus Bank" => "000029",
            "M36" => "100035",
            "MAINLAND MICROFINANCE BANK" => "090323",
            "MAINSTREET MFB" => "090171",
            "MALACHY MFB" => "090174",
            "MANNY MICROFINANCE BANK" => "090383",
            "MAYFAIR  MFB" => "090321",
            "MAYFRESH MORTGAGE BANK" => "070019",
            "MEGAPRAISE MICROFINANCE BANK" => "090280",
            "MERIDIAN MFB" => "090275",
            "MICROCRED MICROFINANCE BANK" => "090136",
            "MICROVIS MICROFINANCE BANK" => "090113",
            "MOLUSI MICROFINANCE BANK" => "090362",
            "MONEYTRUST MFB" => "090129",
            "MONIEPOINT MICROFINANCE BANK" => "090405",
            "MUTUAL BENEFITS MFB" => "090190",
            "MUTUAL TRUST MICROFINANCE BANK" => "090151",
            "Maintrust MFB" => "090465",
            "Maritime Microfinance Bank" => "090410",
            "Mautech  Microfinance Bank" => "090423",
            "Memphis Microfinance Bank" => "090432",
            "Microsystems Investment and Development Limited" => "110018",
            "Midland MFB" => "090192",
            "MoMo PSB" => "120003",
            "Monarch Microfinance Bank" => "090462",
            "Money Master PSB" => "120005",
            "Moyofade MF Bank" => "090448",
            "Mozfin Microfinance Bank" => "090392",
            "NARGATA MFB" => "090152",
            "NAVY MICROFINANCE BANK" => "090263",
            "NDIORAH MFB" => "090128",
            "NEPTUNE MICROFINANCE BANK" => "090329",
            "NEW GOLDEN PASTURES MICROFINANCE BANK" => "090378",
            "NEWDAWN MICROFINANCE BANK" => "090205",
            "NIBSSUSSD PAYMENTS" => "110019",
            "NIRSAL NATIONAL MICROFINANCE BANK" => "090194",
            "NNEW WOMEN MFB" => "090283",
            "NOVA MB" => "060003",
            "NPF MICROFINANCE BANK" => "070001",
            "NUTURE MFB" => "090364",
            "Nasarawa Microfinance bank" => "090349",
            "NetApps Technology Limited" => "110025",
            "Nice Microfinance Bank" => "090459",
            "Nigeria PrisonsMicrofinance bank" => "090505",
            "Nomba financial services Limited" => "110028",
            "Nsuk  Microfinance Bank" => "090491",
            "Numo Microfinance bank" => "090516",
            "Nwannegadi MFB" => "090399",
            "OCHE MFB" => "090333",
            "OHAFIA MFB" => "090119",
            "OKPOGA MFB" => "090161",
            "OLABISI ONABANJO UNIVERSITY MICROFINANCE BANK" => "090272",
            "OLOFIN OWENA Microfinance Bank" => "090468",
            "OLUCHUKWU Microfinance Bank" => "090471",
            "OLUYOLE MICROFINANCE BANK" => "090460",
            "OMIYE MFB" => "090295",
            "OPAY" => "100004",
            "Oakland Microfinance Bank" => "090437",
            "Ojokoro Mfb" => "090527",
            "Olowolagba Microfinance Bank" => "090404",
            "Oraukwu  Microfinance Bank" => "090492",
            "Oscotech MFB" => "090396",
            "Ospoly Microfinance Bank" => "090456",
            "PAGA" => "100002",
            "PAGE FINANCIALS" => "070008",
            "PALMPAY" => "100033",
            "PARKWAY-READYCASH" => "100003",
            "PARRALEX" => "090004",
            "PATRICK GOLD" => "090317",
            "PECAN TRUST MICROFINANCE BANK" => "090137",
            "PENNYWISE MICROFINANCE BANK" => "090196",
            "PERSONAL TRUST MICROFINANCE BANK" => "090135",
            "PETRA MICROFINANCE BANK" => "090165",
            "PILLAR MFB" => "090289",
            "PLATINUM MORTGAGE BANK" => "070013",
            "POLARIS BANK" => "000008",
            "POLYUWANNA MFB" => "090296",
            "PRESTIGE MICROFINANCE BANK" => "090274",
            "PROVIDUS BANK " => "000023",
            "PURPLEMONEY MFB" => "090303",
            "Palmcoast Microfinance bank" => "090497",
            "Parallex Bank" => "000030",
            "Parkway MF Bank" => "090390",
            "Peace Microfinance Bank" => "090402",
            "Preeminent Microfinance Bank" => "090412",
            "Premium Trust bank" => "000031",
            "Prisco  Microfinance Bank" => "090481",
            "Pristine Divitis Microfinance Bank" => "090499",
            "Projects Microfinance bank" => "090503",
            "QUICKFUND MICROFINANCE BANK" => "090261",
            "RAHAMA MFB" => "090170",
            "RAND MERCHANT BANK" => "000024",
            "REFUGE MORTGAGE BANK" => "070011",
            "REGENT MFB" => "090125",
            "RELIANCE MFB" => "090173",
            "RENMONEY MICROFINANCE BANK" => "090198",
            "REPHIDIM MICROFINANCE BANK" => "090322",
            "RICHWAY MFB" => "090132",
            "RIGO Microfinance Bank" => "090433",
            "RIMA Microfinance Bank" => "090443",
            "ROYAL EXCHANGE MICROFINANCE BANK" => "090138",
            "Radalpha Microfinance bank" => "090496",
            "Rehoboth Microfinance Bank" => "090463",
            "Resident Fintech Limited" => "110024",
            "Rima Growth pathway Microfinance Bank " => "090515",
            "SAFETRUST" => "090006",
            "SAGAMU MICROFINANCE BANK" => "090140",
            "SEAP Microfinance Bank" => "090513",
            "SEED CAPITAL MICROFINANCE BANK" => "090112",
            "SEEDVEST MICROFINANCE BANK" => "090369",
            "SLS  MF Bank" => "090449",
            "SPARKLE MICROFINANCE BANK" => "090325",
            "SPAY business" => "110026",
            "STANBIC IBTC @EASE WALLET" => "100007",
            "STANBICIBTC BANK" => "000012",
            "STANDARDCHARTERED" => "000021",
            "STANFORD MFB" => "090162",
            "STB Mortgage Bank" => "070022",
            "STELLAS MICROFINANCE BANK" => "090262",
            "STERLING BANK" => "000001",
            "SULSAP MFB" => "090305",
            "SUNTRUST BANK" => "000022",
            "SafeHaven Microfinance Bank" => "090286",
            "Safegate Microfinance Bank" => "090485",
            "Shalom Microfinance Bank" => "090502",
            "Shepherd Trust Microfinance Bank" => "090401",
            "SmartCash Payment Service bank" => "120004",
            "Solid Allianze MFB" => "090506",
            "Solidrock Microfinance bank" => "090524",
            "Spectrum Microfinance Bank" => "090436",
            "Standard MFB" => "090182",
            "Stockcorp  Microfinance Bank" => "090340",
            "Sunbeam Microfinance Bank" => "090302",
            "Support MF Bank" => "090446",
            "TAGPAY" => "100023",
            "TAJ BANK" => "000026",
            "TCF" => "090115",
            "TEASYMOBILE" => "100010",
            "TF MICROFINANCE BANK" => "090373",
            "TITAN TRUST BANK" => "000025",
            "TITAN-PAYSTACK MICROFINANCE BANK" => "100039",
            "TRIDENT MICROFINANCE BANK" => "090146",
            "TRUST MFB" => "090327",
            "TRUSTBANC J6 MICROFINANCE BANK LIMITED" => "090123",
            "TRUSTBOND" => "090005",
            "TRUSTFUND MICROFINANCE BANK" => "090276",
            "TajWallet" => "080002",
            "Tangerine Money MFB" => "090426",
            "Triple A Microfinance bank" => "090525",
            "U AND C MFB" => "090315",
            "UNAAB MFB" => "090331",
            "UNIBEN MICROFINANCE BANK" => "090266",
            "UNICAL MFB" => "090193",
            "UNIIBADAN Microfinance Bank" => "090461",
            "UNION BANK" => "000018",
            "UNITED BANK FOR AFRICA" => "000004",
            "UNITY BANK" => "000011",
            "UNN MFB" => "090251",
            "Uhuru Microfinance bank" => "090517",
            "Umuchinemere Procredit Microfinance Bank" => "090514",
            "Umunnachi Microfinance Bank" => "090510",
            "UniUyo Microfinance Bank" => "090338",
            "Unilag  Microfinance Bank" => "090452",
            "Unimaid Microfinance Bank" => "090464",
            "Uzondu MF Bank" => "090453",
            "VFD MFB" => "090110",
            "VIRTUE MFB" => "090150",
            "VISA MICROFINANCE BANK" => "090139",
            "VTNetwork" => "100012",
            "Vas2nets Limited" => "110015",
            "Verdant Microfinance Bank" => "090474",
            "WEMA BANK" => "000017",
            "WETLAND MFB" => "090120",
            "WinView Bank" => "090419",
            "XSLNCE MICROFINANCE BANK" => "090124",
            "YCT Microfinance Bank" => "090466",
            "YES MFB" => "090142",
            "Yello Digital financial services" => "110027",
            "Yobe MFB" => "090252",
            "ZENITH BANK PLC" => "000015",
            "ZWallet" => "100034",
            "Zikora Microfinance bank" => "090504",
            "unilorin Microfinance Bank" => "090341"
        ];

        foreach ($jayParsedAry as $key => $value) {
            Banks::create([
                'name' => $key,
                'code' => $value,
            ]);
        }
    }
}
