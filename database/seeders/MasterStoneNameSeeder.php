<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer\Inventory\MasterCode;
class MasterStoneNameSeeder extends Seeder
{
    use \App\Traits\Company\Inventory\Master\MasterCodeTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */

 
    public function insertData($data,$stoneGroupCode){
        
        foreach($data as $k=>$v){
            DB::table('ananta_master_code')->insert([
                'master_code' => $k."-".$stoneGroupCode,
                'running_number' => 0,
                'parent_id' => $this->getStoneGroupID($stoneGroupCode),
                'master_name' =>   $v,
                'master_type' =>  "master_stone_name",
                'master_description' => $v." Detail ",
                'master_price' => 0,
                'master_status' => 'active',
                'master_image' => json_encode(array()),
            ]);
            }

    }
    public function getStoneGroupID($stoneGroupCode){
        $table = "ananta_master_code";
        $MasterCode = new MasterCode();
   
        $model = $MasterCode->setTable( $table);
        $model = $MasterCode->fillable(['master_code','master_name','running_number','master_tag','master_type','master_price','master_description','master_status','master_image','addional_infomation','master_addional_infomation','master_available_for']);


        return  $model->where("master_type","=","master_stone_group")->where("master_code","=",$stoneGroupCode)->get()->first()->id;
    } 
    public function run()
    {
        $stoneGroupCode = array("SP","DIA", "PEAR","PGEM", "SGEM","GEM", "OGEM", "MIN", "ROCK", "OTH");
        
        $sapphireGemstones = array("Blue Sapphire", "Pink Sapphire", "Yellow Sapphire", "Padparadscha Sapphire", "Green Sapphire", "White Sapphire", "Purple Sapphire", "Black Sapphire", "Gray Sapphire", "Fancy Sapphire", "Bi-color Sapphire", "Star Sapphire", "Color Change Sapphire", "Australian Sapphire", "Montana Sapphire", "Thai Sapphire", "Kashmir Sapphire", "Burma Sapphire", "Ceylon Sapphire", "Madagascar Sapphire", "Tanzania Sapphire", "Nigeria Sapphire", "Kenya Sapphire", "Mozambique Sapphire", "Cambodian Sapphire", "Vietnam Sapphire", "Indian Sapphire", "China Sapphire", "Brazilian Sapphire", "Sri Lanka Sapphire", "Peach Sapphire", "Orange Sapphire", "Golden Sapphire", "Teal Sapphire", "Champagne Sapphire", "Mauve Sapphire", "Olive Sapphire", "Cognac Sapphire", "Lavender Sapphire", "Mint Sapphire", "Pinkish Purple Sapphire", "Blueish Purple Sapphire", "Dark Blue Sapphire", "Light Blue Sapphire", "Deep Blue Sapphire", "Royal Blue Sapphire", "Cornflower Blue Sapphire", "Pastel Blue Sapphire", "Intense Blue Sapphire");
        $_sapphire_codes = array("BS", "PS", "YS", "PDS", "GS", "WS", "PuS", "BKS", "GYS", "FAS", "BIS", "SS", "CCS", "AS", "MTS", "TS", "KSS", "BUS", "CSS", "MDS", "TZS", "NIS", "KES", "MZS", "CBS", "VS", "IS", "CS", "BRS", "SLS", "PAS", "OS", "GOS", "TS", "CPS", "MS", "OLS", "COS", "LVS", "MIS", "PPS", "BIPS", "DBS", "LBS", "DBS", "RBS", "CBS", "PBS", "IBS");
   
        $sapphire_Gemstones_array = array();

        foreach ($_sapphire_codes  as $key => $code) {
        $sapphire_Gemstones_array[$code] = $sapphireGemstones[$key];
        }
        $this->insertData($sapphire_Gemstones_array,$stoneGroupCode[0]);


        $diamondGemstones = array("White Diamond", "Blue Diamond", "Pink Diamond", "Yellow Diamond", "Green Diamond", "Black Diamond", "Brown Diamond", "Red Diamond", "Gray Diamond", "Champagne Diamond", "Cognac Diamond", "Orange Diamond", "Purple Diamond", "Mauve Diamond", "Olive Diamond", "Teal Diamond", "Fancy Diamond", "Canary Diamond", "Chameleon Diamond", "Grey Diamond", "Salt and Pepper Diamond", "Rose Cut Diamond", "Emerald Cut Diamond", "Cushion Cut Diamond", "Radiant Cut Diamond", "Princess Cut Diamond", "Asscher Cut Diamond", "Oval Cut Diamond", "Marquise Cut Diamond", "Heart Shaped Diamond", "Pear Shaped Diamond", "Round Brilliant Cut Diamond", "Baguette Cut Diamond", "Trillion Cut Diamond", "Bullet Cut Diamond", "Shield Cut Diamond", "Kite Cut Diamond", "Half Moon Cut Diamond", "Trapeze Cut Diamond", "Pentagon Cut Diamond", "Hexagon Cut Diamond", "Octagon Cut Diamond", "Star Cut Diamond", "Briolette Cut Diamond", "Table Cut Diamond", "Old Mine Cut Diamond", "Old European Cut Diamond", "Single Cut Diamond", "Full Cut Diamond");
        $diamondGemstones_code = array("WD", "BD", "PD", "YD", "GD", "BKD", "BRD", "RD", "GRD", "CD", "COD", "OD", "PLD", "MAD", "OLD", "TD", "FD", "CDY", "CHD", "GRYD", "SAPD", "ROCD", "EMCD", "CUCD", "RACD", "PCCD", "ASCD", "OCCD", "MACD", "HSD", "PSD", "RBDC", "BGCD", "TDCD", "BUD", "SCD", "KCD", "HMD", "TPZD", "PGD", "HGD", "OGD", "STCD", "BRCD", "TBCD", "OMCD", "OEC", "SLCD", "FCD");
            $diamond_Gemstones_array = array();

            foreach ($diamondGemstones_code  as $key => $code) {
            $diamond_Gemstones_array[$code] = $diamondGemstones[$key];
            }
            $this->insertData($diamond_Gemstones_array,$stoneGroupCode[1]);



      


  $pearlGemstones = array("Akoya Pearl", "South Sea Pearl", "Tahitian Pearl", "Freshwater Pearl", "Mabe Pearl", "Baroque Pearl", "Round Pearl", "Oval Pearl", "Button Pearl", "Drop Pearl", "Semi-baroque Pearl", "Circle Pearl", "Cultured Pearl", "Keshi Pearl", "Biwa Pearl", "Blister Pearl", "Black Pearl", "White Pearl", "Golden Pearl", "Pink Pearl", "Peach Pearl", "Lavender Pearl", "Blue Pearl", "Grey Pearl", "Green Pearl", "Cream Pearl", "Champagne Pearl", "Multi-colored Pearl", "Natural Pearl", "Bead-nucleated Pearl", "Non-nucleated Pearl", "Pearl on the half-shell", "Mother-of-pearl", "Abalone Pearl", "Conch Pearl", "Melon Pearl", "Wish Pearl", "Edison Pearl", "Flower Pearl", "Crown Pearl", "Twin Pearl", "Fossilized Pearl", "Keishi Pearl", "Ripple Pearl", "Soul Pearl", "Star Pearl", "Suzhou Pearl", "Bi-color Pearl", "Tricolor Pearl");
  $pearlGemstones_codes = array("AP", "SSP", "TP", "FWP", "MBP", "BP", "RP", "OP", "BUP", "DP", "SBP", "CP", "CUP", "KP", "BWP", "BLP", "BLKP", "WHP", "GDP", "PKP", "PEP", "LVP", "BUP", "GP", "CRP", "CHP", "MCP", "MUP", "NAP", "BNP", "NNP", "PHS", "MOP", "ABP", "CCP", "MNP", "WIP", "EP", "FOP", "CNP", "TWP", "FSP", "KIP", "RIP", "SOP", "STP", "SZP", "BCP", "TCP");
  $pearl_Gemstones_array = array();

  foreach ($pearlGemstones_codes  as $key => $code) {
  $pearl_Gemstones_array[$code] = $pearlGemstones[$key];
  }
  $this->insertData($pearl_Gemstones_array,$stoneGroupCode[2]);

    }
}
