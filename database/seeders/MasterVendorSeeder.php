<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Country;
use App\Models\City;
use App\Models\State;

class MasterVendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = State::where("country_id","=","217")->get()->toArray();

        $company_name = [  "S.P.N. Gems Co., Ltd.",  "Panachai Gems Co., Ltd.",  "P.K. Jewelry Export Ltd.",  "Pacific Jewelry Co., Ltd.",  "T.T. Gems (Thailand) Co., Ltd.",  "Mada Gem Co., Ltd.",  "Pranda Jewelry Public Company Limited",  "Asian Gem Centre Co., Ltd.",  "Fancy Gems & Lapidary Co., Ltd.",  "Chinastone (Thailand) Co., Ltd.",  "J.P. Gems (Thailand) Co., Ltd.",  "Gems Pavilion Co., Ltd.",  "RMC Gems Thailand Co., Ltd.",  "P.S. Jewelry Factory Co., Ltd.",  "Carat Systems Co., Ltd.",  "Jinny Gem Co., Ltd.",  "M.A.R.T. Gems & Jewelry Co., Ltd.",  "Ploen Pattana Gems Co., Ltd.",  "The Siam Gem Connection Co., Ltd.",  "Swiss Gem Shop Co., Ltd.",  "Bangkok Gems & Jewelry Co., Ltd.",  "Bangkok Silverware Co., Ltd.",  "Koohinoor Thai Gems Co., Ltd.",  "V & V Gems Co., Ltd.",  "Boswin Gems Co., Ltd.",  "Royal Thai Art Gems Co., Ltd.",  "Gem-One Co., Ltd.",  "Topgems Co., Ltd.",  "Nerungrueng Gems Co., Ltd.",  "Gems Asia Co., Ltd.",  "The First Gems Cutting Co., Ltd.",  "Lao Star Jewelry Co., Ltd.",  "N.C. Creation Co., Ltd.",  "Judy's Gems Creations Co., Ltd.",  "Mash Design Co., Ltd.",  "Nopporn Exclusive Jewellery Co., Ltd.",  "Rhodium Master Co., Ltd.",  "Win's Gems Co., Ltd.",  "S.P. Gems Export Co., Ltd.",  "Famond Jewelry Co., Ltd.","Bunlue & Sons Gems Co., Ltd.", "Chanwut Gems Co., Ltd.", "Chung Shi Gems Co., Ltd.", "Diamond Trade Center Co., Ltd.", "Eller Enterprises (Thailand) Co., Ltd.", "Fancy Gems Co., Ltd.", "Gem Impex Co., Ltd.", "Hua Fai Gems Co., Ltd.", "Indochina Gems Co., Ltd.", "Jewelry Lane Co., Ltd.", "Kachapa Gems Co., Ltd.", "Lanell Gems Co., Ltd.", "M S Jewelery Factory Co., Ltd.", "National Gemstones Co., Ltd.", "Orient Gemstone Co., Ltd.", "Phenix Jewelry Co., Ltd.", "Quality Gems Co., Ltd.", "R. E. Gem Testing Laboratory Co., Ltd.", "S. P. I. Gems Co., Ltd.", "Siam Silver Jewelry Co., Ltd.", "Thai Diamond Manufacturers Association", "Thai Design Jewellery Co., Ltd.", "Thai Gem & Jewelry Traders Association", "Thai Heng Lee Gems Factory Co., Ltd.", "Thai Hua Pen Gems Co., Ltd.", "Thai L. Heng Trading Co., Ltd.", "Thai Nongluck Co., Ltd.", "Thai Samut Gems Co., Ltd.", "Thai Star Gems Co., Ltd.", "Thai Young Gems Co., Ltd.", "The Art of Gem Co., Ltd.", "The Gem and Jewelry Institute of Thailand", "Tian Trading Co., Ltd.", "Unique Gems Thailand Co., Ltd.", "Vibul Gems Co., Ltd.", "Wandee Jewelry Co., Ltd.", "World Gems Center Co., Ltd.", "Yusco Gems Co., Ltd.","H.K. Gems", "Siam Export Gem & Jewelry Co., Ltd.", "Lotus Arts de Vivre", "Jewels 4 You", "Siam Gemstones", "Gems Galore", "Taveevong Floriculture Co., Ltd.", "The Museum of Gems and Jewelry (Mogok)", "Jewels by Satu", "P.C. Jewelry Co., Ltd.", "Bangkok Gems Trading Co., Ltd.", "Double AA Trading", "Chiang Mai Jewellery Co., Ltd.", "Export Mall Co., Ltd.", "Gems Square Co., Ltd.", "JC Gems Co., Ltd.", "Silom Art Gallery Co., Ltd.", "Panjshir Gem Co., Ltd.", "Takara Jewelry Co., Ltd.", "Wajar Gems Co., Ltd.", "Siam Colour Gems", "Gems Pavilion (Pratunam)", "Prestige Gems", "Pacific Rim Gems Co., Ltd.", "Little Gemstones", "Oriental Gems Co., Ltd.", "Siam Jewelers Supply Co., Ltd.", "JCK Gemstones & Jewelry", "STC Gems Co., Ltd.", "Asia Gem Co., Ltd."];

        $registation_no = ["0105556008534", "0205557002077", "0305561009355", "0405573003822", "0505586004499", "0605597001899", "0705608000900", "0805621009788", "0905632003994", "1005643005966", "1105654008209", "1205665005563", "1305676004680", "1405687003941", "1505698007197", "1605711005002", "1705722002387", "1805733006416", "1905744004207", "2005755007254", "2105766001313", "2205777002591", "2305788007616", "2405799002495", "2505800006261", "2605811008656", "2705822009134", "2805833003353", "2905844005167", "3005855003475", "3105866006341", "3205877008139", "3305888001555", "3405899006237", "3505900009711", "3605911005394", "3705922007507", "3805933001082", "3905944002837","4005955001191", "4105966004202", "4205977009893", "4305988002203", "4405999004454", "4506000006011", "4606011003157", "4706022007770", "4806033009902", "4906044006778", "5006055002216", "5106066001100", "5206077006233", "5306088001033", "5406099004564", "5506100008569", "5606111001245", "5706122007192", "5806133003229", "5906144007853", "6006155002315", "6106166009490", "6206177002153", "6306188008099", "6406199004091", "6506200005575", "6606211009320", "6706222007999", "6806233001653", "6906244002877", "7006255006784", "7106266005409", "7206277008274", "7306288003021", "7406299009343", "7506300006377", "7606311005863", "7706322005265", "7806333007776", "7906344003957","8806344003957","6896222007999","2911144005167","7006666906784","1116122007192","0123456789012", "0234567890123", "0345678901234", "0456789012345", "0567890123456", "0678901234567", "0789012345678", "0890123456789", "0901234567890", "0987654321098", "0876543210987", "0765432109876", "0654321098765", "0543210987654", "0432109876543", "0321098765432", "0210987654321", "0109876543210", "1234567890123", "2345678901234", "3456789012345", "4567890123456", "5678901234567", "6789012345678"];


        $phone =  [  "+6621414076",  "+6617389909",  "+66895012760",  "+6626366948",  "+6622032447",  "+6626638989",  "+66845448874",  "+6626729722",  "+6626315458",  "+6626578121",  "+66863372066",  "+6627132433",  "+66864391157",  "+6622744901",  "+6626621728",  "+6626714401",  "+6622524166",  "+6626525557",  "+6626426676",  "+66861210027",  "+6623159255",  "+6622502022",  "+6622269306",  "+66816555408",  "+6622832701",  "+6626312051",  "+6622677024",  "+66818180272",  "+6626500488",  "+6622509045",  "+6622765464",  "+6622505344",  "+6626525910",  "+6626728474",  "+6622157588",  "+6626712133",  "+6626731764",  "+66810045131",  "+6622628817",  "+6626796307",  "+6629389230",  "+66818354669","+66882888305", "+6625577463", "+6629143692", "+66999578963", "+6628621048", "+66918586437", "+6629476289", "+6623950665", "+6626208829", "+6623566479", "+66875551502", "+6626895455", "+6627504603", "+6626321223", "+6626216048", "+66998785406", "+6623612805", "+6626212481", "+6623600172", "+6623581459", "+66892045247", "+6623513299", "+6626347817", "+6629388926", "+66944814091", "+6626206868", "+6623584186", "+6623610649", "+66994259950", "+6623557759", "+6626335983", "+6623586265", "+66930169508", "+6623596213", "+6629377191", "+6623550526", "+6629390454", "+66956849818", "+6629310642", "+66816924967", "+6629392225"];
       
       
        $address =  [    "255/14",    "33/12",    "42/6",    "17/3",    "8/20",    "73/1",    "105/7",    "11/2",    "39/5",    "64/9",    "88/4",    "27/18",    "19/7",    "56/3",    "91/6",    "12/8",    "20/2",    "31/4",    "14/1",    "5/12",    "78/9",    "63/16",    "46/11",    "2/5",    "37/1",    "28/14",    "50/8",    "21/3",    "16/6",    "52/7",    "49/2",    "6/19",    "85/4",    "3/10",    "9/15",    "22/13",    "72/7",    "35/4",    "68/1",    "43/8",    "77/5","123/5", "57/9", "84/2", "22/8", "99/4", "66/11", "19/6", "37/10", "71/3", "48/13", "14/7", "63/18", "28/5", "92/12", "55/16", "31/9", "76/4", "42/21", "6/13", "97/8","12/4", "45/7", "67/3", "89/12", "23/8", "11/5", "53/2", "98/6", "32/1", "77/9", "56/4", "21/7", "43/11", "68/5", "95/13", "76/2", "34/9", "22/3", "87/6", "51/8", "19/1", "42/10", "66/12", "91/7", "27/5", "13/2", "69/4", "36/11", "83/9", "47/6", "74/3", "55/8", "31/13", "78/2", "17/1", "49/10", "88/4", "26/7", "61/12", "94/5", "37/9", "72/3", "44/6", "52/11", "86/8", "29/2", "75/1", "41/5", "63/13", "98/9", "14/3", "57/7", "82/12", "31/10", "66/4", "93/8", "39/2", "72/6", "54/1", "21/11", "45/5", "79/9", "36/3", "15/7", "67/13", "88/2", "24/8", "41/12", "73/4", "98/10", "57/1", "34/6", "15/13", "59/3", "82/7", "46/11", "71/5", "23/2", "49/8", "96/6", "68/1", "32/9", "13/4", "54/12", "81/3", "28/7", "62/10", "89/5", "42/13", "74/2", "19/9", "56/6", "33/1", "77/11", "98/4", "65/8", "27/13", "46/5", "91/12", "38/7", "14/2", "73/3", "51/10", "29/4", "86/6", "67/9", "22/1", "45/13", "88/8", "36/5", "59/11", "82/2", "13/7", "41/3", "74/12", "96/9", "21/4", "62/6", "87/13", "35/2", "56/10", "79/5", "44/8", "28/1", "63/9", "97/4", "16/11", "52/2", "76/7", "31/3", "58/12", "83/5", "46/9", "19/13", "94/10", "72/1", "34/4", "21/8", "66/13", "93/2", "57/6", "39/11", "81/9", "48/3", "26/5", "72/10", "43/2", "68/8", "35/1", "89/11"];






        $housing_name = array("บ้านพร้อมสวน", "เดอะฮิลส์ คอนโดมิเนียม", "พฤกษา รีซิเดนซ์", "บ้านเดี่ยวบนเขา", "บ้านแบบฮิต", "ทาวน์โฮม", "ภูษา", "บ้านแฝด", "โครงการศรีทอง", "เดอะริเวอร์ ไฮท์ แอท เอกมัย", "บ้านสวยสไตล์ล้านนา", "บ้านเดี่ยวแม่สอด", "บ้านเดี่ยวสวย", "โครงการทาวน์โฮม", "แควิทเฮ้าส์ บางนา", "โครงการบ้านพักเอกชน", "บ้านเดี่ยวใหม่", "บ้านเดี่ยวอำเภอเมือง", "เดอะซิมโพเซียม บางนา", "บ้านเดี่ยวโมเดิร์น", "บ้านเดี่ยวสไตล์ญี่ปุ่น", "ทาวน์โฮมเอเชีย", "บ้านเดี่ยวติดแม่น้ำ", "คอนโดติดสวน", "บ้านเดี่ยวพร้อมสวน", "บ้านพักอาศัยในเมือง", "บ้านเดี่ยวสวยๆ", "บ้านทาวน์โฮม", "บ้านพักใจกลางเมือง", "คอนโดหรู ใจกลางเมือง", "บ้านเดี่ยวเขาใหญ่", "โครงการบ้านเดี่ยว", "บ้านเดี่ยวสร้างเอง", "ทาวน์โฮมสวย", "บ้านเดี่ยวใกล้ทะเล", "บ้านเดี่ยวอยู่ริมสายน้ำ", "บ้านเดี่ยวล้อมสระว่ายน้ำ", "บ้านเดี่ยวบนทำเลดี", "บ้านเดี่ยวสุดหรู", "บ้านเดี่ยวติดทะเล", "บ้านสวยสไตล์โมเดิร์น","Ideo Mobi Rama 9", "Supalai Premier @ Asoke", "The Address Siam", "Lumpini Place Rama 4 - Kluaynamthai", "The Line Sukhumvit 101", "Ashton Asoke", "Ideo Mobi Bangsue Grand Interchange", "Walden Sukhumvit 39", "The Base Park East", "Rhythm Sukhumvit 36-38", "Life Asoke Rama 9", "The Diplomat 39", "Noble Revo Silom", "The Reserve at Emporio Place", "The Lofts Silom", "Noble Cube Pattanakarn", "The Key Sathorn - Charoenraj", "Supalai Elite Surawong", "The Crest Sukhumvit 34", "Aspire Sukhumvit-Onnut", "IDEO Q Phahol - Saphan Khwai", "Belle Grand  9", "The Lofts Ekkamai", "The Base Saphanmai", "The Nest Ploenchit", "Noble Remix", "The Rich Nana", "Rhythm Rangnam", "The Alcove Thonglor 10", "The Address Chidlom", "Banyan Tree Residences Riverside Bangkok", "The Estelle Phrom Phong", "Wish Signature Midtown Siam", "Ideo Mobi Rangnam", "The Address Sukhumvit 61", "Noble Ploenchit", "Niche Mono Sukhumvit 50", "The Link Phahon-Pradipat", "Le Luk", "The ESSE Asoke", "Rhythm Sathorn - Narathiwas", "Riviera Wongamat Pattaya", "The Diplomat 39 Residences", "The Address Sathorn", "The Address Sukhumvit 28", "Noble Recole Sukhumvit 19", "Supalai River Place Charoenkrung", "The Crest Phahonyothin 11", "The Rich Pratumnak", "The Lofts Yennakart", "Noble Ora", "The Base Sukhumvit 50", "Aspire Rama 4", "The Address Sukhumvit 42", "Noble Around Sukhumvit 33", "The Line Asoke - Ratchada", "Niche Pride Thonglor - Phetchaburi", "Lumpini Place Rama 9 - Ratchada", "The Base Central Pattaya", "The XXXIX by Sansiri", "The Base Garden Rama 9", "The Room Sukhumvit 62", "The Fine Bangkok Thonglor", "The Origin Ratchada - Huaykwang", "The Rich Nana 2", "Rhythm Charoenkrung Pavillion", "Noble Revolve Ratchada 2", "Niche Mono Charoen Nakhon", "Wish Signature II Midtown Siam", "The Alcove Sukhumvit 49", "Noble Ambience Sukhumvit 42", "The Base Phetkasem", "Noble BE19", "The Address Sathorn - Thonglor", "Lumpini Place Srinakarin - Huamark Station", "The Crest Sukhumvit 49", "The Line Phahon - Pradipat", "Aspire Rattanathibet 2", "The Park Chidlom", "The Rich Nakhon Pathom", "Noble");

        $email = ["johndoe@example.com", "janedoe@example.com", "bobsmith@example.com", "lisajones@example.com", "peterpan@example.com", "maryjones@example.com", "mikejohnson@example.com", "chrisbrown@example.com", "sarahlee@example.com", "davidtaylor@example.com", "jennifersmith@example.com", "jakegreen@example.com", "karenwhite@example.com", "andrewdavis@example.com", "stephengray@example.com", "amandabrown@example.com", "catherinesmith@example.com", "gregwilson@example.com", "kellyjones@example.com", "tomsullivan@example.com", "sarahwilliams@example.com", "jimmycarter@example.com", "monicalewis@example.com", "brandonjohnson@example.com", "lindamiller@example.com", "ryanlee@example.com", "jessicamartinez@example.com", "alexandersmith@example.com", "laurenthompson@example.com", "mattjones@example.com", "kristinadavis@example.com", "richardmiller@example.com", "jenniferrodriguez@example.com", "danielleparker@example.com", "thomasbaker@example.com", "jameswilson@example.com", "katiewhite@example.com", "adamgreen@example.com", "julieanderson@example.com", "robertbrown@example.com", "kimberlysmith@example.com"];

        $poscode = array("10100", "10200", "10300", "10400", "10500", "10600", "10700", "10800", "10900", "11000", "11100", "11200", "11300", "11400", "11500", "11600", "11700", "11800", "11900", "12000", "12100", "12200", "12300", "13000", "13100", "13200", "13300", "13400", "13500", "13600", "13700", "14000", "14100", "14200", "14300", "14400", "15000", "15200", "16000", "16100", "17000","18000", "18100", "18200", "18300", "18400", "18500", "18600", "18700", "19000", "19100", "19200", "19300", "19400", "19500", "19600", "19700", "19800", "19900", "20000", "20100", "20200", "20300", "20400", "20500", "20600", "20700", "20800", "20900", "21000", "21100", "21200", "21300", "21400", "21500", "21600", "21700", "21800", "21900", "22000", "22100", "22200", "22300", "22400", "22500", "22600", "22700", "22800", "22900", "23000", "23100", "23200", "23300", "23400", "23500", "23600", "23700", "23800", "23900", "24000", "24100", "24200", "24300", "24400", "24500", "24600", "24700", "24800", "24900", "25000", "25100", "25200", "25300", "25400", "25500", "25600", "25700", "25800", "25900", "26000");

        for($i=0;$i<count($company_name);$i++){
            $cstate = $state[rand(0,77)]['id'];
            $city = City::where("state_id","=",$cstate)->get();
            $k = $i;

            
            if($city->count()>0){
                $citydata = $city->first()->toArray();
                $cfirstname = $company_name[$k];

               

        try{
            DB::beginTransaction();
        
            $id =   DB::table('ananta_master_code')->insertGetId([
                'master_code' => null,
                'running_number' => 0,
                'parent_id' => 0,
                'master_name' =>    $cfirstname,
                'master_type' =>  "master_account_vendor",
                'master_description' =>  "master_account_vendor ".$cfirstname."@ ".$citydata['name']." Detail ",
                'master_price' => 0,
                'master_status' => 'active',
                'master_image' => json_encode(array()),
            ]);
            DB::table('ananta_base_master')->insert([
                'master_id' => $id,
                'running_number' => 0,
                'contact_citizen_id_number' =>null,
                'company_registration_number' =>$registation_no[$k],
                'gender' =>   'no_value',
                'contact_phone' =>   $phone[rand(0,count($phone)-1)],

        
                'ship_address' =>   $address[rand(0,count($address)-1)]." ".$housing_name[rand(0,count($housing_name)-1)],
                'ship_district' =>  $citydata['id'],
                'ship_province' =>  $cstate ,
                'ship_country' =>  217,
                'ship_poscode' =>   $poscode[rand(0,count($poscode)-1)],
        
                'tax_inv_address' =>   $address[rand(0,count($address)-1)]." ".$housing_name[rand(0,count($housing_name)-1)],
                'tax_inv_district' =>  $citydata['id'],
                'tax_inv_province' =>  $cstate ,
                'tax_inv_country' =>  217,
                'tax_inv_poscode' =>    $poscode[rand(0,count($poscode)-1)],
                
            ]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            throw $e;
        }

    }



}

    }
}
