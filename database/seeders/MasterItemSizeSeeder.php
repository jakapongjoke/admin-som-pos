<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterItemSizeSeeder extends Seeder
{
    use \App\Traits\Customer\Inventory\Master\MasterCodeTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $lid = array();
        $size = ["1.0","1.5","2.0","2.5","3.0","3.5","4.0","4.5","5.0","5.5"];

       
        $master_items  = $this->GetMasterCodeByType("ananta","master_item")->toArray();
       for($m=0 ; $m<count($master_items);$m++){
        array_push($lid,$master_items[$m]['id']);   
       }
      
   function randavailable (){
    $rangeset = rand(1,4);
    $availiable = array();

    switch( $rangeset ){
        case 1:
            array_push($availiable,$lid[0]);   
        break;
        case 2:
            array_push($availiable,[$lid[rand(0,5)],$lid[rand(6,8)]]);   
        break;
        case 3:
            array_push($availiable,[ $lid[rand(0,2)],$lid[rand(3,5)],$lid[rand(6,8)] ]);   
        break;
        case 4:
            array_push($availiable,[ $lid[rand(0,2)],$lid[rand(3,4)],$lid[rand(5,6)],$lid[rand(7,8)] ]);   
        break;
    
    }
return  $availiable ;
   }

        for($i=0;$i<=100;$i++){
            DB::table('ananta_master_code')->insert([
                'master_code' => null,
                'running_number' => $i+1,
                'parent_id' => 0,
                'master_name' =>   $size[$i],
                'master_type' =>  "master_item_size",
                'master_price' => 0,
                'master_status' => 'active',
                'master_image' => json_encode(array()),
                'master_available_for' => randavailable(),
            ]);
        }
     
    }
}
