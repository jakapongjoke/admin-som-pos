<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterBaseMetalSeeder extends Seeder
{
    use \App\Traits\Company\StoreCreator\Inventory\MasterCodeTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $base_metal = ["BR"=>"Brass", "CU"=>"Copper", "NI"=>"Nickel", "SN"=>"Tin", "ZN"=>"Zinc", "AL"=>"Aluminum", "FE"=>"Iron", "ST"=>"Steel", "PB"=>"Lead", "PE"=>"Pewter", "BZ"=>"Bronze", "SS"=>"Stainless steel", "WM"=>"White metal", "GS"=>"German silver", "ZA"=>"Zamak", "TI"=>"Titanium", "PT"=>"Platinum", "RH"=>"Rhodium", "PD"=>"Palladium", "TU"=>"Tungsten", "CO"=>"Cobalt", "MG"=>"Magnesium", "BI"=>"Bismuth", "CR"=>"Chromium", "CD"=>"Cadmium", "VA"=>"Vanadium", "MN"=>"Manganese", "SI"=>"Silicon", "CS"=>"Carbon steel", "GM"=>"Gunmetal", "AB"=>"Antique brass", "AC"=>"Antique copper", "AS"=>"Antique silver", "BN"=>"Black nickel", "BO"=>"Black oxide", "CA"=>"Copper alloy", "SA"=>"Silver alloy", "TA"=>"Steel alloy", "ZA"=>"Zinc alloy", "BA"=>"Bronze alloy", "CN"=>"Copper-nickel alloy", "NS"=>"Nickel silver", "NA"=>"Nickel alloy", "LF"=>"Lead-free pewter", "ZS"=>"Zinc-plated steel", "CS"=>"Copper-plated steel", "SC"=>"Silver-plated copper", "GB"=>"Gold-plated brass", "PB"=>"Platinum-plated brass", "BS"=>"Brass-plated steel", "SA"=>"Stainless steel alloy", "IA"=>"Iron alloy", "CC"=>"Cobalt chrome", "AA"=>"Aluminum alloy", "FB"=>"Lead-free brass", "SB"=>"Sterling silver plated brass", "RG"=>"Rose gold-plated brass", "GB"=>"Gunmetal-plated brass", "AG"=>"Antique gold", "AS"=>"Antique silver", "NB"=>"Nickel-free brass", "BC"=>"Bronze plated copper", "AB"=>"Antique bronze", "RG"=>"Real GOLD 99.99%" ,"GP"=>"Gold-filled brass", "SP"=>"Silver-filled brass", "RP"=>"Rhodium-plated brass", "PP"=>"Palladium-plated brass", "BR"=>"Black rhodium", "YB"=>"Yellow brass", "RB"=>"Red brass", "JB"=>"Jewelers brass", "EM"=>"Enamel-coated metal", "AA"=>"Anodized aluminum", "GS"=>"Galvanized steel", "NS"=>"Nickel-free stainless steel", "SS"=>"Surgical stainless steel", "NT"=>"Nitinol", "CC"=>"Cobalt chrome molybdenum", "BT"=>"Black titanium", "PC"=>"Platinum-cobalt alloy", "MA"=>"Magnesium alloy", "TA"=>"Titanium alloy", "CS"=>"Chrome-plated steel", "ZC"=>"Zinc-coated steel", "CT"=>"Copper-nickel-tin alloy", "MG"=>"Mokume-gane", "DS"=>"Damascus steel", "CF"=>"Carbon fiber", "WM"=>"Wood-plated metal", "BM"=>"Bamboo-plated metal", "TN"=>"Titanium nitride", "ZT"=>"Zinc-tin alloy", "BC"=>"Beryllium copper", "CC"=>"Cobalt-chromium-molybdenum alloy", "IN"=>"Iron-nickel alloy", "PI"=>"Platinum-iridium alloy"];
        $price = [2966.75, 2888.57, 1549.01, 2391.43, 2184.54, 1411.72, 1354.34, 1353.15, 1807.63, 1971.69, 2146.33, 2718.88, 2122.89, 2223.37, 2165.38, 2675.11, 1595.5, 1275.11, 1379.62, 1501.53, 2234.4, 2664.06, 2384.91, 2079.08, 1842.31, 1312.15, 2236.21, 2381.97, 1491.33, 2149.52, 1609.47, 2672.19, 1883.11, 2571.63, 2456.52, 1309.11, 1567.8, 2593.95, 2172.79, 2838.43, 1447.08, 1279.6, 1986.06, 1377.23, 2697.26, 1351.57, 1629.05, 1258.14, 1844.08, 2824.12, 1663.45, 1993.9, 2387.43, 2703.38, 1511.29, 1318.77, 2583.07, 2042.31, 2845.38, 2225.52, 1667.98, 1391.86, 1434.43, 1373.48, 2113.07, 2951.64, 1936.04, 1424.23, 1916.08, 2677.17, 2421.25, 2781.71, 2431.47, 2487.13, 1565.07, 1779.47, 2918.08, 1427.53, 1271.14, 2435.5, 2035.52, 2115.79, 2705.09, 1935.26, 1901.88, 2847.07, 2289.75, 2103.27, 1623.71, 2077.8, 2379.7, 2859.36, 1708.08, 1227.91, 1611.57, 2712.92, 2362.44, 1607.58];
        $l = 0;

        $base_metal_id = [];
        
        
        foreach($base_metal as $k=>$v){
            $code = $k;
            if( $this->findMasterBeforeSeed('ananta',$k)>0) { 
                $code = "MBM".$k;
            }
            $id = DB::table('ananta_master_code')->insertGetId([
                'master_code' =>  $code,
                'running_number' => $l+1,
                'parent_id' => 0,
                'master_name' =>   $v,
                'master_type' =>  "master_base_metal",
                'master_description' =>  "master_base_metal ".$v." Detail",
                'master_price' => $price[rand(0,rand(0,count($price)))],
                'master_status' => 'active',
                'master_image' => json_encode(array()),
            ]);
            $l+1;
        
            array_push($base_metal_id,$id);



            
        }
        // $metal =["925"=>"Silver","22k"=>"Rose Gold","18k"=>"Green Gold","10k"=>"Rose Gold","14k"=>"Black Gold","14k"=>"Pink Gold","14k"=>"Red Gold","14k"=>"Green Gold-filled","10k"=>"Green Gold","14k"=>"Yellow Gold","18k"=>"Rose Gold","950"=>"Platinum","950"=>"Palladium","10k"=>"White Gold","14k"=>"Rose Gold","10k"=>"Pink Gold","10k"=>"Red Gold","10k"=>"Black Gold","10k"=>"Green Gold-filled"];
        // $fomula_scale = [
        //     [20,20,20,20,10,10],
        //     [20,20,20,20,20],
        //     [25,25,25,25],
        //     [35,35,15,15],
        //     [30,30,40],
        //     [50,50],
        //     [100],
        // ];
        // $fomula = [];
        // $pricemetal = [];
        //     // [
        //     //     "base_metal_id"=>1,
        //     //     "price"=>1635,
        //     //     "percent"=>25
        //     // ]
         



        //     foreach($metal as $km=>$vm){
        //         $code = $km;
        //         $fomula_scale = $fomula_scale[rand(0,count($fomula_scale)-1)];
        //         if( $this->findMasterBeforeSeed('ananta',$km)>0) { 
        //             $code = "MM".$km;
        //         }
        //         foreach($fomula_scale as $v){
        //         $bmid = $base_metal_id[rand(0,count($base_metal_id)-1)];
        //         array($pricemetal ,DB::table('ananta_master_code')->select('price')->where('id','=',$bmid));
        //          array_push($fomula,[
        //             "base_metal_id"=> $bmid,
        //             "price"=> count($fomula_scale),
        //             "percent"=>$v
        //          ]);
        //         }
        //         DB::table('ananta_master_code')->insert([
        //             'master_code' =>  $code,
        //             'running_number' => 0,
        //             'parent_id' => 0,
        //             'master_name' =>   $vm,
        //             'master_type' =>  "master_metal",
        //             'master_description' =>  "master_metal ".$vm." Detail",
        //             'master_price' => $price[$l],
        //             'master_status' => 'active',
        //             'master_image' => json_encode(array()),
        //         ]);
        //         $l+1;
        //     }   


    }
}
