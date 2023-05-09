<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterCertificateTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cers = [    "GIA" => "GIA",    "AGS" => "AGS",    "EGL" => "EGL",    "IGI" => "IGI",    "HRD" => "HRD",    "PGS" => "PGS",    "SGL" => "SGL",    "IIDGR" => "IIDGR",    "GSI" => "GSI",    "GCAL" => "GCAL",    "NGTC" => "NGTC",    "CGL" => "CGL",    "FGA" => "FGA",    "AIGS" => "AIGS",    "GUBLIN" => "GUBLIN",    "LOTUS" => "LOTUS",    "GIR" => "GIR",    "ACD" => "ACD",    "GIC" => "GIC"]
;
        foreach($cers as $k=>$v){
            DB::table('ananta_master_code')->insert([
                'master_code' => $k,
                'running_number' => 0,
                'parent_id' => 0,
                'master_name' =>   $v,
                'master_type' =>  "master_certificate_type",
                'master_description' =>  "master_certificate_type ".$v." Detail ",
                'master_price' => 0,
                'master_status' => 'active',
            ]);
        }
    }
}
