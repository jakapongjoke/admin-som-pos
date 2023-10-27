<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Country;
use App\Models\City;
use App\Models\State;
use Carbon\Carbon;

class MasterCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   

    public function run()
    {
        $state = State::where("country_id","=","217")->get()->toArray();
        $company_name = "ananta";
        $date_of_birth = [    "1987-12-28",    "1984-05-13",    "1992-09-04",    "1979-02-22",    "1995-11-08",    "1977-07-16",    "1990-01-23",    "1983-10-11",    "1975-12-07",    "1993-06-30",    "1986-03-18",    "1989-08-02",    "1978-04-15",    "1991-11-20",    "1976-09-27",    "1982-01-09",    "1994-07-23",    "1974-12-01",    "1988-05-24",    "1985-10-07",    "1979-06-17",    "1992-02-01",    "1977-08-08",    "1990-03-25",    "1983-11-12",    "1975-07-29",    "1993-01-14",    "1986-06-06",    "1989-09-20",    "1978-03-03",    "1991-10-18",    "1976-04-30",    "1982-11-14",    "1994-08-28",    "1974-09-10",    "1988-01-26",    "1985-06-11",    "1979-12-19",    "1992-07-03",    "1977-01-22",    "1990-08-05",    "1983-05-02"];
        $address =  [    "255/14",    "33/12",    "42/6",    "17/3",    "8/20",    "73/1",    "105/7",    "11/2",    "39/5",    "64/9",    "88/4",    "27/18",    "19/7",    "56/3",    "91/6",    "12/8",    "20/2",    "31/4",    "14/1",    "5/12",    "78/9",    "63/16",    "46/11",    "2/5",    "37/1",    "28/14",    "50/8",    "21/3",    "16/6",    "52/7",    "49/2",    "6/19",    "85/4",    "3/10",    "9/15",    "22/13",    "72/7",    "35/4",    "68/1",    "43/8",    "77/5"];
        
        $housing_name = array("บ้านพร้อมสวน", "เดอะฮิลส์ คอนโดมิเนียม", "พฤกษา รีซิเดนซ์", "บ้านเดี่ยวบนเขา", "บ้านแบบฮิต", "ทาวน์โฮม", "ภูษา", "บ้านแฝด", "โครงการศรีทอง", "เดอะริเวอร์ ไฮท์ แอท เอกมัย", "บ้านสวยสไตล์ล้านนา", "บ้านเดี่ยวแม่สอด", "บ้านเดี่ยวสวย", "โครงการทาวน์โฮม", "แควิทเฮ้าส์ บางนา", "โครงการบ้านพักเอกชน", "บ้านเดี่ยวใหม่", "บ้านเดี่ยวอำเภอเมือง", "เดอะซิมโพเซียม บางนา", "บ้านเดี่ยวโมเดิร์น", "บ้านเดี่ยวสไตล์ญี่ปุ่น", "ทาวน์โฮมเอเชีย", "บ้านเดี่ยวติดแม่น้ำ", "คอนโดติดสวน", "บ้านเดี่ยวพร้อมสวน", "บ้านพักอาศัยในเมือง", "บ้านเดี่ยวสวยๆ", "บ้านทาวน์โฮม", "บ้านพักใจกลางเมือง", "คอนโดหรู ใจกลางเมือง", "บ้านเดี่ยวเขาใหญ่", "โครงการบ้านเดี่ยว", "บ้านเดี่ยวสร้างเอง", "ทาวน์โฮมสวย", "บ้านเดี่ยวใกล้ทะเล", "บ้านเดี่ยวอยู่ริมสายน้ำ", "บ้านเดี่ยวล้อมสระว่ายน้ำ", "บ้านเดี่ยวบนทำเลดี", "บ้านเดี่ยวสุดหรู", "บ้านเดี่ยวติดทะเล", "บ้านสวยสไตล์โมเดิร์น");

        $email = ["johndoe@example.com", "janedoe@example.com", "bobsmith@example.com", "lisajones@example.com", "peterpan@example.com", "maryjones@example.com", "mikejohnson@example.com", "chrisbrown@example.com", "sarahlee@example.com", "davidtaylor@example.com", "jennifersmith@example.com", "jakegreen@example.com", "karenwhite@example.com", "andrewdavis@example.com", "stephengray@example.com", "amandabrown@example.com", "catherinesmith@example.com", "gregwilson@example.com", "kellyjones@example.com", "tomsullivan@example.com", "sarahwilliams@example.com", "jimmycarter@example.com", "monicalewis@example.com", "brandonjohnson@example.com", "lindamiller@example.com", "ryanlee@example.com", "jessicamartinez@example.com", "alexandersmith@example.com", "laurenthompson@example.com", "mattjones@example.com", "kristinadavis@example.com", "richardmiller@example.com", "jenniferrodriguez@example.com", "danielleparker@example.com", "thomasbaker@example.com", "jameswilson@example.com", "katiewhite@example.com", "adamgreen@example.com", "julieanderson@example.com", "robertbrown@example.com", "kimberlysmith@example.com"];

        $poscode = array("10100", "10200", "10300", "10400", "10500", "10600", "10700", "10800", "10900", "11000", "11100", "11200", "11300", "11400", "11500", "11600", "11700", "11800", "11900", "12000", "12100", "12200", "12300", "13000", "13100", "13200", "13300", "13400", "13500", "13600", "13700", "14000", "14100", "14200", "14300", "14400", "15000", "15200", "16000", "16100", "17000");
       $phone = [  "+66818912177",  "+66875451289",  "+66967194538",  "+66807431761",  "+66903184067",  "+66983572899",  "+66885814034",  "+66827503589",  "+66960738927",  "+66833587412",  "+66847894126",  "+66801591847",  "+66824840603",  "+66904356891",  "+66961273981",  "+66972148016",  "+66869071420",  "+66858203904",  "+66937461998",  "+66832341146",  "+66858517967",  "+66901950320",  "+66822758250",  "+66942579007",  "+66805927192",  "+66931804819",  "+66858503968",  "+66862582110",  "+66952301972",  "+66942241081",  "+66893620871",  "+66950783145",  "+66818745938",  "+66978296419",  "+66804298172",  "+66802694081",  "+66853472890",  "+66910281703",  "+66868903162",  "+66857038947",  "+66878892790"];

$id_card =["1783029402932", "1864085804957", "1546863756386", "1972754782032", "1968889472890", "1815129833202", "1293175971502", "1486925475208", "1684239073075", "1226141357787", "1082927398035", "1668074683769", "1369913577113", "1173094075585", "1573571569024", "1878046079528", "1917399294138", "1962731349993", "1941157685395", "1597038271226", "1099249685694", "1716934205949", "1574083562044", "1189491182529", "1460721427517", "1183945272054", "1327506732269", "1797326633849", "1793457075067", "1109058919405", "1869904322043", "1931139687825", "1862653725597", "1640267891891", "1786405581192", "1142128623576", "1869237527652", "1624472833815", "1348186947258", "1496460769844", "1651260558249","1126953271043",  "1253546097077",  "1188508210599",  "1300117859398",  "1737104161611",  "1067564948311",  "1782092846608",  "1759981082467",  "1849037482984",  "1883029194065",  "1325287974966",  "1778328138776",  "1510508134013",  "1334569449845",  "1755639274267",  "1612256896483",  "1547802281903",  "1054508606341",  "1611877607538",  "1973004001606",  "1070451172119",  "1526569400209",  "1840236792644",  "1307530662566",  "1808679340774",  "1054763721909",  "1633729205358",  "1928317914305",  "1934860050889",  "1129650992708",  "1188474079184",  "1431337870916",  "1290213116169",  "1079880581813",  "1573762673328",  "1755363563222",  "1399834021832",  "1367787207066",  "1571194756282",  "1271028751977",  "1217176511581",  "1205507292886"];
$branchCodes = [
    "DTC1234",
    "UMB5678",
    "MNC9012",
    "XYZ7890",
    "ABC4567",
    "EFG2345",
    "LMN6789",
    "PQR3456",
    "JKL1234",
    "RST9012",
];
// print_r( $state);





        for($i=0;$i<count($state);$i++){
            $cstate = $state[$i]['id'];
            $city = City::where("state_id","=",$cstate)->get();
            $k = $i;
            if($city->count()>0){
                $citydata = $city->first()->toArray();
                $cfirstname = $name[rand(0,39)];
                $clastname = $lastname[rand(0,39)];
                $newDate = Carbon::createFromFormat('Y-m-d', $date_of_birth[rand(0,38)])->format('Y-m-d');
              
               
try{
    DB::beginTransaction();

    $id =   DB::table('ananta_master_code')->insertGetId([
        'master_code' => null,
        'running_number' => 0,
        'parent_id' => 0,
        'master_name' =>    $cfirstname." ". $clastname,
        'master_type' =>  "master_branch",
        'master_description' =>  "master_branch ".$company_name."@ Code ".$branchCodes." Detail ",
        'master_price' => 0,
        'master_status' => 'active',
        'master_image' => json_encode(array()),
    ]);
    DB::table('ananta_base_master')->insert([
        'master_id' => $id,
        'running_number' => 0,
        "company_name"=>$company_name,
        "branch_location"=>"",
        'contact_email' =>   $email[rand(0,38)],
        'contact_phone' =>   $phone[rand(0,38)],
        'branch_code' =>   $branchCodes,

        'ship_address' =>   $address[rand(0,38)]." ".$housing_name[rand(0,38)],
        'ship_district' =>  $citydata['id'],
        'ship_province' =>  $cstate ,
        'ship_country' =>  217,
        'ship_poscode' =>   $poscode[rand(0,38)],

        'tax_inv_address' =>   $address[rand(0,38)]." ".$housing_name[rand(0,38)],
        'tax_inv_district' =>  $citydata['id'],
        'tax_inv_province' =>  $cstate ,
        'tax_inv_country' =>  217,
        'tax_inv_poscode' =>   $poscode[rand(0,38)],

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
