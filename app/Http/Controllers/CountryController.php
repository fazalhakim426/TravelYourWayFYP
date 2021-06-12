<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Visa;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class CountryController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries=Country::get();
        return view('agent.management.settings')->with('countries',$countries);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country=DB::statement('
        CREATE TABLE IF NOT EXISTS `countries` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `phone_code` int(5) NOT NULL,
            `country_code` char(2) NOT NULL,
            `country_name` varchar(80) NOT NULL,
            `continent_code` varchar(2) DEFAULT NULL,
            `continent_name` varchar(30) DEFAULT NULL,
            `alpha_3` char(3) DEFAULT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;
        ');   
        $city=DB::statement('
        CREATE TABLE IF NOT EXISTS `cities` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `country_code` char(2) NOT NULL,
            `city_name` varchar(80) NOT NULL,
            `continent_code` varchar(2) DEFAULT NULL,
            `alpha_3` char(3) DEFAULT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;
        ');

        if($country)
        {
            echo 'country created.<br>';
        }
        if($city)
        {
            echo 'city created.<br>';
        }

        $create=DB::statement("
        INSERT INTO `countries` (`id`, `phone_code`, `country_code`, `country_name`, `continent_code`, `continent_name`, `alpha_3`) VALUES
        (1,93,'AF','Afghanistan','AS','Asia','AFG'),
        (2,358,'AX','Aland Islands','EU','Europe','ALA'),
        (3,355,'AL','Albania','EU','Europe','ALB'),
        (4,213,'DZ','Algeria','AF','Africa','DZA'),
        (5,1684,'AS','American Samoa','OC','Oceania','ASM'),
        (6,376,'AD','Andorra','EU','Europe','AND'),
        (7,244,'AO','Angola','AF','Africa','AGO'),
        (8,1264,'AI','Anguilla','NA','North America','AIA'),
        (9,672,'AQ','Antarctica','AN','Antarctica','ATA'),
        (10,1268,'AG','Antigua and Barbuda','NA','North America','ATG'),
        (11,54,'AR','Argentina','SA','South America','ARG'),
        (12,374,'AM','Armenia','AS','Asia','ARM'),
        (13,297,'AW','Aruba','NA','North America','ABW'),
        (14,61,'AU','Australia','OC','Oceania','AUS'),
        (15,43,'AT','Austria','EU','Europe','AUT'),
        (16,994,'AZ','Azerbaijan','AS','Asia','AZE'),
        (17,1242,'BS','Bahamas','NA','North America','BHS'),
        (18,973,'BH','Bahrain','AS','Asia','BHR'),
        (19,880,'BD','Bangladesh','AS','Asia','BGD'),
        (20,1246,'BB','Barbados','NA','North America','BRB'),
        (21,375,'BY','Belarus','EU','Europe','BLR'),
        (22,32,'BE','Belgium','EU','Europe','BEL'),
        (23,501,'BZ','Belize','NA','North America','BLZ'),
        (24,229,'BJ','Benin','AF','Africa','BEN'),
        (25,1441,'BM','Bermuda','NA','North America','BMU'),
        (26,975,'BT','Bhutan','AS','Asia','BTN'),
        (27,591,'BO','Bolivia','SA','South America','BOL'),
        (28,599,'BQ','Bonaire, Sint Eustatius and Saba','NA','North America','BES'),
        (29,387,'BA','Bosnia and Herzegovina','EU','Europe','BIH'),
        (30,267,'BW','Botswana','AF','Africa','BWA'),
        (31,55,'BV','Bouvet Island','AN','Antarctica','BVT'),
        (32,55,'BR','Brazil','SA','South America','BRA'),
        (33,246,'IO','British Indian Ocean Territory','AS','Asia','IOT'),
        (34,673,'BN','Brunei Darussalam','AS','Asia','BRN'),
        (35,359,'BG','Bulgaria','EU','Europe','BGR'),
        (36,226,'BF','Burkina Faso','AF','Africa','BFA'),
        (37,257,'BI','Burundi','AF','Africa','BDI'),
        (38,855,'KH','Cambodia','AS','Asia','KHM'),
        (39,237,'CM','Cameroon','AF','Africa','CMR'),
        (40,1,'CA','Canada','NA','North America','CAN'),
        (41,238,'CV','Cape Verde','AF','Africa','CPV'),
        (42,1345,'KY','Cayman Islands','NA','North America','CYM'),
        (43,236,'CF','Central African Republic','AF','Africa','CAF'),
        (44,235,'TD','Chad','AF','Africa','TCD'),
        (45,56,'CL','Chile','SA','South America','CHL'),
        (46,86,'CN','China','AS','Asia','CHN'),
        (47,61,'CX','Christmas Island','AS','Asia','CXR'),
        (48,672,'CC','Cocos (Keeling) Islands','AS','Asia','CCK'),
        (49,57,'CO','Colombia','SA','South America','COL'),
        (50,269,'KM','Comoros','AF','Africa','COM'),
        (51,242,'CG','Congo','AF','Africa','COG'),
        (52,242,'CD','Congo, Democratic Republic of the Congo','AF','Africa','COD'),
        (53,682,'CK','Cook Islands','OC','Oceania','COK'),
        (54,506,'CR','Costa Rica','NA','North America','CRI'),
        (55,225,'CI','Cote D\'Ivoire','AF','Africa','CIV'),
        (56,385,'HR','Croatia','EU','Europe','HRV'),
        (57,53,'CU','Cuba','NA','North America','CUB'),
        (58,599,'CW','Curacao','NA','North America','CUW'),
        (59,357,'CY','Cyprus','AS','Asia','CYP'),
        (60,420,'CZ','Czech Republic','EU','Europe','CZE'),
        (61,45,'DK','Denmark','EU','Europe','DNK'),
        (62,253,'DJ','Djibouti','AF','Africa','DJI'),
        (63,1767,'DM','Dominica','NA','North America','DMA'),
        (64,1809,'DO','Dominican Republic','NA','North America','DOM'),
        (65,593,'EC','Ecuador','SA','South America','ECU'),
        (66,20,'EG','Egypt','AF','Africa','EGY'),
        (67,503,'SV','El Salvador','NA','North America','SLV'),
        (68,240,'GQ','Equatorial Guinea','AF','Africa','GNQ'),
        (69,291,'ER','Eritrea','AF','Africa','ERI'),
        (70,372,'EE','Estonia','EU','Europe','EST'),
        (71,251,'ET','Ethiopia','AF','Africa','ETH'),
        (72,500,'FK','Falkland Islands (Malvinas)','SA','South America','FLK'),
        (73,298,'FO','Faroe Islands','EU','Europe','FRO'),
        (74,679,'FJ','Fiji','OC','Oceania','FJI'),
        (75,358,'FI','Finland','EU','Europe','FIN'),
        (76,33,'FR','France','EU','Europe','FRA'),
        (77,594,'GF','French Guiana','SA','South America','GUF'),
        (78,689,'PF','French Polynesia','OC','Oceania','PYF'),
        (79,262,'TF','French Southern Territories','AN','Antarctica','ATF'),
        (80,241,'GA','Gabon','AF','Africa','GAB'),
        (81,220,'GM','Gambia','AF','Africa','GMB'),
        (82,995,'GE','Georgia','AS','Asia','GEO'),
        (83,49,'DE','Germany','EU','Europe','DEU'),
        (84,233,'GH','Ghana','AF','Africa','GHA'),
        (85,350,'GI','Gibraltar','EU','Europe','GIB'),
        (86,30,'GR','Greece','EU','Europe','GRC'),
        (87,299,'GL','Greenland','NA','North America','GRL'),
        (88,1473,'GD','Grenada','NA','North America','GRD'),
        (89,590,'GP','Guadeloupe','NA','North America','GLP'),
        (90,1671,'GU','Guam','OC','Oceania','GUM'),
        (91,502,'GT','Guatemala','NA','North America','GTM'),
        (92,44,'GG','Guernsey','EU','Europe','GGY'),
        (93,224,'GN','Guinea','AF','Africa','GIN'),
        (94,245,'GW','Guinea-Bissau','AF','Africa','GNB'),
        (95,592,'GY','Guyana','SA','South America','GUY'),
        (96,509,'HT','Haiti','NA','North America','HTI'),
        (97,0,'HM','Heard Island and Mcdonald Islands','AN','Antarctica','HMD'),
        (98,39,'VA','Holy See (Vatican City State)','EU','Europe','VAT'),
        (99,504,'HN','Honduras','NA','North America','HND'),
        (100,852,'HK','Hong Kong','AS','Asia','HKG'),
        (101,36,'HU','Hungary','EU','Europe','HUN'),
        (102,354,'IS','Iceland','EU','Europe','ISL'),
        (103,91,'IN','India','AS','Asia','IND'),
        (104,62,'ID','Indonesia','AS','Asia','IDN'),
        (105,98,'IR','Iran, Islamic Republic of','AS','Asia','IRN'),
        (106,964,'IQ','Iraq','AS','Asia','IRQ'),
        (107,353,'IE','Ireland','EU','Europe','IRL'),
        (108,44,'IM','Isle of Man','EU','Europe','IMN'),
        (109,972,'IL','Israel','AS','Asia','ISR'),
        (110,39,'IT','Italy','EU','Europe','ITA'),
        (111,1876,'JM','Jamaica','NA','North America','JAM'),
        (112,81,'JP','Japan','AS','Asia','JPN'),
        (113,44,'JE','Jersey','EU','Europe','JEY'),
        (114,962,'JO','Jordan','AS','Asia','JOR'),
        (115,7,'KZ','Kazakhstan','AS','Asia','KAZ'),
        (116,254,'KE','Kenya','AF','Africa','KEN'),
        (117,686,'KI','Kiribati','OC','Oceania','KIR'),
        (118,850,'KP','Korea, Democratic People\'s Republic of','AS','Asia','PRK'),
        (119,82,'KR','Korea, Republic of','AS','Asia','KOR'),
        (120,381,'XK','Kosovo','EU','Europe','XKX'),
        (121,965,'KW','Kuwait','AS','Asia','KWT'),
        (122,996,'KG','Kyrgyzstan','AS','Asia','KGZ'),
        (123,856,'LA','Lao People\'s Democratic Republic','AS','Asia','LAO'),
        (124,371,'LV','Latvia','EU','Europe','LVA'),
        (125,961,'LB','Lebanon','AS','Asia','LBN'),
        (126,266,'LS','Lesotho','AF','Africa','LSO'),
        (127,231,'LR','Liberia','AF','Africa','LBR'),
        (128,218,'LY','Libyan Arab Jamahiriya','AF','Africa','LBY'),
        (129,423,'LI','Liechtenstein','EU','Europe','LIE'),
        (130,370,'LT','Lithuania','EU','Europe','LTU'),
        (131,352,'LU','Luxembourg','EU','Europe','LUX'),
        (132,853,'MO','Macao','AS','Asia','MAC'),
        (133,389,'MK','Macedonia, the Former Yugoslav Republic of','EU','Europe','MKD'),
        (134,261,'MG','Madagascar','AF','Africa','MDG'),
        (135,265,'MW','Malawi','AF','Africa','MWI'),
        (136,60,'MY','Malaysia','AS','Asia','MYS'),
        (137,960,'MV','Maldives','AS','Asia','MDV'),
        (138,223,'ML','Mali','AF','Africa','MLI'),
        (139,356,'MT','Malta','EU','Europe','MLT'),
        (140,692,'MH','Marshall Islands','OC','Oceania','MHL'),
        (141,596,'MQ','Martinique','NA','North America','MTQ'),
        (142,222,'MR','Mauritania','AF','Africa','MRT'),
        (143,230,'MU','Mauritius','AF','Africa','MUS'),
        (144,269,'YT','Mayotte','AF','Africa','MYT'),
        (145,52,'MX','Mexico','NA','North America','MEX'),
        (146,691,'FM','Micronesia, Federated States of','OC','Oceania','FSM'),
        (147,373,'MD','Moldova, Republic of','EU','Europe','MDA'),
        (148,377,'MC','Monaco','EU','Europe','MCO'),
        (149,976,'MN','Mongolia','AS','Asia','MNG'),
        (150,382,'ME','Montenegro','EU','Europe','MNE'),
        (151,1664,'MS','Montserrat','NA','North America','MSR'),
        (152,212,'MA','Morocco','AF','Africa','MAR'),
        (153,258,'MZ','Mozambique','AF','Africa','MOZ'),
        (154,95,'MM','Myanmar','AS','Asia','MMR'),
        (155,264,'NA','Namibia','AF','Africa','NAM'),
        (156,674,'NR','Nauru','OC','Oceania','NRU'),
        (157,977,'NP','Nepal','AS','Asia','NPL'),
        (158,31,'NL','Netherlands','EU','Europe','NLD'),
        (159,599,'AN','Netherlands Antilles','NA','North America','ANT'),
        (160,687,'NC','New Caledonia','OC','Oceania','NCL'),
        (161,64,'NZ','New Zealand','OC','Oceania','NZL'),
        (162,505,'NI','Nicaragua','NA','North America','NIC'),
        (163,227,'NE','Niger','AF','Africa','NER'),
        (164,234,'NG','Nigeria','AF','Africa','NGA'),
        (165,683,'NU','Niue','OC','Oceania','NIU'),
        (166,672,'NF','Norfolk Island','OC','Oceania','NFK'),
        (167,1670,'MP','Northern Mariana Islands','OC','Oceania','MNP'),
        (168,47,'NO','Norway','EU','Europe','NOR'),
        (169,968,'OM','Oman','AS','Asia','OMN'),
        (170,92,'PK','Pakistan','AS','Asia','PAK'),
        (171,680,'PW','Palau','OC','Oceania','PLW'),
        (172,970,'PS','Palestinian Territory, Occupied','AS','Asia','PSE'),
        (173,507,'PA','Panama','NA','North America','PAN'),
        (174,675,'PG','Papua New Guinea','OC','Oceania','PNG'),
        (175,595,'PY','Paraguay','SA','South America','PRY'),
        (176,51,'PE','Peru','SA','South America','PER'),
        (177,63,'PH','Philippines','AS','Asia','PHL'),
        (178,64,'PN','Pitcairn','OC','Oceania','PCN'),
        (179,48,'PL','Poland','EU','Europe','POL'),
        (180,351,'PT','Portugal','EU','Europe','PRT'),
        (181,1787,'PR','Puerto Rico','NA','North America','PRI'),
        (182,974,'QA','Qatar','AS','Asia','QAT'),
        (183,262,'RE','Reunion','AF','Africa','REU'),
        (184,40,'RO','Romania','EU','Europe','ROM'),
        (185,70,'RU','Russian Federation','AS','Asia','RUS'),
        (186,250,'RW','Rwanda','AF','Africa','RWA'),
        (187,590,'BL','Saint Barthelemy','NA','North America','BLM'),
        (188,290,'SH','Saint Helena','AF','Africa','SHN'),
        (189,1869,'KN','Saint Kitts and Nevis','NA','North America','KNA'),
        (190,1758,'LC','Saint Lucia','NA','North America','LCA'),
        (191,590,'MF','Saint Martin','NA','North America','MAF'),
        (192,508,'PM','Saint Pierre and Miquelon','NA','North America','SPM'),
        (193,1784,'VC','Saint Vincent and the Grenadines','NA','North America','VCT'),
        (194,684,'WS','Samoa','OC','Oceania','WSM'),
        (195,378,'SM','San Marino','EU','Europe','SMR'),
        (196,239,'ST','Sao Tome and Principe','AF','Africa','STP'),
        (197,966,'SA','Saudi Arabia','AS','Asia','SAU'),
        (198,221,'SN','Senegal','AF','Africa','SEN'),
        (199,381,'RS','Serbia','EU','Europe','SRB'),
        (200,381,'CS','Serbia and Montenegro','EU','Europe','SCG'),
        (201,248,'SC','Seychelles','AF','Africa','SYC'),
        (202,232,'SL','Sierra Leone','AF','Africa','SLE'),
        (203,65,'SG','Singapore','AS','Asia','SGP'),
        (204,1,'SX','Sint Maarten','NA','North America','SXM'),
        (205,421,'SK','Slovakia','EU','Europe','SVK'),
        (206,386,'SI','Slovenia','EU','Europe','SVN'),
        (207,677,'SB','Solomon Islands','OC','Oceania','SLB'),
        (208,252,'SO','Somalia','AF','Africa','SOM'),
        (209,27,'ZA','South Africa','AF','Africa','ZAF'),
        (210,500,'GS','South Georgia and the South Sandwich Islands','AN','Antarctica','SGS'),
        (211,211,'SS','South Sudan','AF','Africa','SSD'),
        (212,34,'ES','Spain','EU','Europe','ESP'),
        (213,94,'LK','Sri Lanka','AS','Asia','LKA'),
        (214,249,'SD','Sudan','AF','Africa','SDN'),
        (215,597,'SR','Suriname','SA','South America','SUR'),
        (216,47,'SJ','Svalbard and Jan Mayen','EU','Europe','SJM'),
        (217,268,'SZ','Swaziland','AF','Africa','SWZ'),
        (218,46,'SE','Sweden','EU','Europe','SWE'),
        (219,41,'CH','Switzerland','EU','Europe','CHE'),
        (220,963,'SY','Syrian Arab Republic','AS','Asia','SYR'),
        (221,886,'TW','Taiwan, Province of China','AS','Asia','TWN'),
        (222,992,'TJ','Tajikistan','AS','Asia','TJK'),
        (223,255,'TZ','Tanzania, United Republic of','AF','Africa','TZA'),
        (224,66,'TH','Thailand','AS','Asia','THA'),
        (225,670,'TL','Timor-Leste','AS','Asia','TLS'),
        (226,228,'TG','Togo','AF','Africa','TGO'),
        (227,690,'TK','Tokelau','OC','Oceania','TKL'),
        (228,676,'TO','Tonga','OC','Oceania','TON'),
        (229,1868,'TT','Trinidad and Tobago','NA','North America','TTO'),
        (230,216,'TN','Tunisia','AF','Africa','TUN'),
        (231,90,'TR','Turkey','AS','Asia','TUR'),
        (232,7370,'TM','Turkmenistan','AS','Asia','TKM'),
        (233,1649,'TC','Turks and Caicos Islands','NA','North America','TCA'),
        (234,688,'TV','Tuvalu','OC','Oceania','TUV'),
        (235,256,'UG','Uganda','AF','Africa','UGA'),
        (236,380,'UA','Ukraine','EU','Europe','UKR'),
        (237,971,'AE','United Arab Emirates','AS','Asia','ARE'),
        (238,44,'GB','United Kingdom','EU','Europe','GBR'),
        (239,1,'US','United States','NA','North America','USA'),
        (240,1,'UM','United States Minor Outlying Islands','NA','North America','UMI'),
        (241,598,'UY','Uruguay','SA','South America','URY'),
        (242,998,'UZ','Uzbekistan','AS','Asia','UZB'),
        (243,678,'VU','Vanuatu','OC','Oceania','VUT'),
        (244,58,'VE','Venezuela','SA','South America','VEN'),
        (245,84,'VN','Viet Nam','AS','Asia','VNM'),
        (246,1284,'VG','Virgin Islands, British','NA','North America','VGB'),
        (247,1340,'VI','Virgin Islands, U.s.','NA','North America','VIR'),
        (248,681,'WF','Wallis and Futuna','OC','Oceania','WLF'),
        (249,212,'EH','Western Sahara','AF','Africa','ESH'),
        (250,967,'YE','Yemen','AS','Asia','YEM'),
        (251,260,'ZM','Zambia','AF','Africa','ZMB'),
        (252,263,'ZW','Zimbabwe','AF','Africa','ZWE');
        ");
        if($create)
        {
            echo 'countries inserted';
            
        }
        echo 'done';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $request->validate([
            'country'=>'required|unique:countries',
        ]);

       
        $country=new Country();
        $country->country=$request->country;
        $country->save();
        
        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return back();
        
    }
}
