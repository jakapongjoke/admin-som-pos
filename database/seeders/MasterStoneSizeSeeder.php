<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterStoneSizeSeeder extends Seeder
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
        $master_name = [];

        $arr = array();
        for ($i = 0; $i <= 180; $i++) {
            $master_name[] = 1.00 + $i * 0.05;
        }
      
  

        for($i=0;$i<count($master_name);$i++){
            DB::table('ananta_master_code')->insert([
                'master_code' => null,
                'running_number' => $i+1,
                'parent_id' => 0,
                'master_name' =>   $master_name[$i],
                'master_type' =>  "master_stone_size",
                'master_price' => 0,
                'master_status' => 'active',
                'master_image' => json_encode(array()),
            ]);
        }
     
    }
}
