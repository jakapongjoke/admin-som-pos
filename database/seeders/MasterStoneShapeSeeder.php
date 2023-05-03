<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MasterStoneShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  

    public function run()
    {
        $shape = ["Square","Brilliant Round","Oval","Heart","Asscher","Radiant","Pear","Princess","Baguette","Emerald","Marquise","Cushion"];
        $shape_code = ["SQ","BR","OVL","HT","AS","RA","PE","PR","BG","EM","MQ","CU"];
        for($i=0;$i<count($shape);$i++){
            DB::table('ananta_master_code')->insert([
                'master_code' => $shape_code[$i],
                'running_number' => $i+1,
                'parent_id' => 0,
                'master_name' =>   $shape[$i],
                'master_type' =>  "master_stone_shape",
                'master_description' =>  "master_stone_shape ".$shape_code[$i]." Detail ",
                'master_price' => 0,
                'master_status' => 'active',
                'master_image' => json_encode(array()),
            ]);
        }
    }
}