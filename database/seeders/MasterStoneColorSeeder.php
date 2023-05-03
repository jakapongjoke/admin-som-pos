<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterStoneColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = array(
            "R" => "Red",
            "O" => "Orange",
            "Y" => "Yellow",
            "G" => "Green",
            "B" => "Blue",
            "P" => "Purple",
            "PK" => "Pink",
            "BR" => "Brown",
            "BK" => "Black",
            "WH" => "White",
            "GY" => "Gray",
            "M" => "Multicolor"
        );

        foreach($colors as $k=>$v){
            DB::table('ananta_master_code')->insert([
                'master_code' => $k,
                'running_number' => 0,
                'parent_id' => 0,
                'master_name' =>   $v,
                'master_type' =>  "master_stone_color",
                'master_description' =>  "master_stone_color ".$v." Detail ",
                'master_price' => 0,
                'master_status' => 'active',
            ]);
        }
        //
    }
}
