<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterMetalSeeder extends Seeder
{
    use \App\Traits\Company\StoreCreator\Inventory\MasterCodeTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     
        $metal =["925"=>"Silver","22KRG"=>"22k Rose Gold","18KGG"=>"18K Green Gold","10KRG"=>"10K Rose Gold","14KBG"=>"14K Black Gold","14KPG"=>"14k Pink Gold","14KRG"=>"14k Red Gold","14KGGF"=>"14k Green Gold-filled","10KGG"=>"10KGreen Gold","14kYG"=>"14K Yellow Gold","18KRG"=>"Rose Gold","950PL"=>"Platinum","950PA"=>"Palladium","10KWG"=>"White Gold","14K"=>"Rose Gold","10KPG"=>"Pink Gold","10KBG"=>"Black Gold","10KGGF"=>"Green Gold-filled"];
      $base_metal = $this->getMasterCodeByTypeArray('ananta','master_base_metal');
      
        $base_metal_value = [];
        $master_price = 0;
        
        $fomula_scale = [
            [20,20,20,20,10,10],
            [20,20,20,20,20],
            [25,25,25,25],
            [35,35,15,15],
            [30,30,40],
            [50,50],
            [100],
        ];
        foreach($metal as $k=>$v){
            $fomula_select = $fomula_scale[rand(0,count($fomula_scale)-1)];
            $master_price = 0;
            $base_metal_value = [];
            foreach($fomula_select as $vf){ //20
                $base_metal_info = $base_metal[rand(0,count($base_metal)-1)];
                
                    array_push($base_metal_value,[
                        "id"=>$base_metal_info['id'],
                        'price'=>($vf / 100)*$base_metal_info['master_price'],
                        'percent'=>$vf
                    
                    ]);
                    $master_price+=($vf / 100)*$base_metal_info['master_price'];
              }
            $code = $k;
            if( $this->findMasterBeforeSeed('ananta',$k)>0) { 
                $code = "MM".$k;
            }
            DB::table('ananta_master_code')->insert([
                'master_code' =>  $code,
                'running_number' =>0,
                'parent_id' => 0,
                'master_name' =>   $v,
                'master_type' =>  "master_metal",
                'master_description' =>  "master_metal ".$v." Detail",
                'master_price' =>  $master_price,
                'master_status' => 'active',
                'master_formula'=> json_encode($base_metal_value),
                'master_image' => json_encode(array()),
            ]);
          
        }

        
    }
}

