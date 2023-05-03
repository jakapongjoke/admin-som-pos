<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterStoneClaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clarity = array (
            'FL' => 'Flawless',
            'IF' => 'Internally Flawless',
            'VVS1' => 'Very, Very Slightly Included 1',
            'VVS2' => 'Very, Very Slightly Included 2',
            'VS1' => 'Very Slightly Included 1',
            'VS2' => 'Very Slightly Included 2',
            'SI1' => 'Slightly Included 1',
            'SI2' => 'Slightly Included 2',
            'I1' => 'Included 1',
            'I2' => 'Included 2',
            'I3' => 'Included 3',
            'EC' => 'Eye Clean',
            'SI' => 'Slightly Included',
            'MI' => 'Moderately Included',
            'HI' => 'Heavily Included',
            'LC' => 'Loupe Clean',
            'VHC' => 'Very High Clarity',
            'HC' => 'High Clarity',
            'GC' => 'Good Clarity',
        );
        foreach($clarity as $k=>$v){
            DB::table('ananta_master_code')->insert([
                'master_code' => $k,
                'running_number' => 0,
                'parent_id' => 0,
                'master_name' =>   $v,
                'master_type' =>  "master_stone_clarity",
                'master_description' =>  "master_stone_clarity ".$v." Detail ",
                'master_price' => 0,
                'master_status' => 'active',
            ]);
        }
    }
}
