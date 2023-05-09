<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterStoneCuttingSeeder extends Seeder
{
    use \App\Traits\Company\StoreCreator\Inventory\MasterCodeTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $cuts = array("RB"=>"Round Brilliant Cut","PC"=>"Princess Cut","EC"=>"Emerald Cut","CC"=>"Cushion Cut","OC"=>"Oval Cut","PC"=>"Pear Cut","MC"=>"Marquise Cut","HC"=>"Heart Cut","AC"=>"Asscher Cut","RC"=>"Radiant Cut","BC"=>"Baguette Cut","TC"=>"Trillion Cut","AC"=>"Antique Cut","RC"=>"Rose Cut","CC"=>"Cabochon Cut","BC"=>"Bezel Cut","TBC"=>"Tapered Baguette Cut","KC"=>"Kite Cut","HMC"=>"Half-Moon Cut","SC"=>"Shield Cut","BC"=>"Briolette Cut","CC"=>"Carre Cut","HC"=>"Hexagon Cut","OC"=>"Octagon Cut","PRO"=>"Pear-shaped Rose Cut","PBC"=>"Pear-shaped Brilliant Cut","RFYD"=>"Radiant-cut Fancy Yellow Diamond","RCD"=>"Round Cut Diamond","SC"=>"Star Cut","TC"=>"Triangle Cut","FC"=>"Fan Cut","FFC"=>"Freeform Cut","FRC"=>"French Cut","ADC"=>"Asscher-cut Diamond","PCD"=>"Princess-cut Diamond","BCD"=>"Baguette-cut Diamond","TC"=>"Trilliant Cut","ECD"=>"Emerald-cut Diamond","HSD"=>"Heart-shaped Diamond","CCD"=>"Cushion-cut Diamond");




        foreach($cuts  as $k=>$v){
            $code = $k;
      
            if( $this->findMasterBeforeSeed('ananta',$k)>0) { 
                $code = "C".$k;
            }

            DB::table('ananta_master_code')->insert([
                'master_code' => $code,
                'running_number' => 0,
                'parent_id' => $this->getRunningNumber('ananta'),
                'master_name' =>   $v,
                'master_type' =>  "master_stone_cutting",
                'master_description' =>  "master_stone_cutting ".$v." Detail ",
                'master_price' => 0,
                'master_status' => 'active',
            ]);
        }
    }
}
