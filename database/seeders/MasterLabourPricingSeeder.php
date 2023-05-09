<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterLabourPricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        $labour = ["CFP","POLISH","Setting","Cleaning","Add size","Reduce Size","Engraving","Take out Stone","Platting","Other"];
        $price = [100,200,300,400,500];
        foreach($labour as $k=>$v){
            DB::table('ananta_master_code')->insert([
                'master_code' => null,
                'running_number' => 0,
                'parent_id' => 0,
                'master_name' =>   $v,
                'master_type' =>  "master_labour_pricing",
                'master_description' =>  "master_labour_pricing ".$v." Detail ",
                'master_price' => $price[rand(0,4)],
                'master_status' => 'active',
            ]);
        }
    }
}
