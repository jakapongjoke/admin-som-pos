<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class MasterStoneGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stoneGroups = array("Sapphire","Diamonds", "Pearl","Precious Gemstones", "Semi-precious Gemstones","Gems Stone", "Organic Gemstones", "Mineraloids", "Rocks", "Other");
        $stoneCode = array("SP","DIA", "PEAR","PGEM", "SGEM","GEM", "OGEM", "MIN", "ROCK", "OTH");

        for($i=0;$i<count($stoneGroups);$i++){
            DB::table('ananta_master_code')->insert([
                'master_code' => $stoneCode[$i],
                'running_number' => $i+1,
                'parent_id' => 0,
                'master_name' =>   $stoneGroups[$i],
                'master_type' =>  "master_stone_group",
                'master_description' =>  "master_stone_group",
                'master_price' => 0,
                'master_status' => 'active',
                'master_image' => json_encode(array()),
            ]);
        }


    }
}
