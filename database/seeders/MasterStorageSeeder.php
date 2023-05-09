<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterStorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $location = array(
            "CEN" => "Cental World",
            "CEP" => "Central Plaza",
            "MAL" => "The Mall",
            "EMP" => "Emporium",
            "SIA" => "Siam Paragon",
            "CEF" => "Central Festival",
            "TER" => "Terminal 21",
            "ROB" => "Robinson",
            "BIC" => "Big C",
            "TES" => "Tesco Lotus",
        );
            foreach($location as $k=>$v){
            DB::table('ananta_master_code')->insert([
                'master_code' => $k,
                'running_number' => 0,
                'parent_id' => 0,
                'master_name' =>   $v,
                'master_type' =>  "master_account_storage",
                'master_description' =>  "master_account_storage ".$v." Detail ",
                'master_price' => 0,
                'master_status' => 'active',
            ]);
        }
    }
}
