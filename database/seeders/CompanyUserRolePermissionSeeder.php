<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyUserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission[0] = [
            "create"=>true,
            "edit"=>true,
            "delete"=>true,
            "view"=>true,
            "price"=>true,
        ];
        $permission[1] = [
            "create"=>true,
            "edit"=>true,
            "delete"=>false,
            "view"=>true,
            "price"=>true,
        ];
        $permission[2] = [
            "create"=>false,
            "edit"=>false,
            "delete"=>false,
            "view"=>false,
            "price"=>true,
        ];


        $perm_data[0] = [
            'role_id'=>1,
            'sell' => json_encode($permission[0]),
            'repair' => json_encode($permission[0]),
            'custom' => json_encode($permission[0]),
            'pnd' => json_encode($permission[0]),
            'company' => json_encode($permission[0]),
            'master' => json_encode($permission[0]),
            'stock' => json_encode($permission[0]),
            'product_master' => json_encode($permission[0])
        ];
        
        $perm_data[1] = [
            'role_id'=>1,
            'sell' => json_encode($permission[1]),
            'repair' => json_encode($permission[1]),
            'custom' => json_encode($permission[1]),
            'pnd' => json_encode($permission[1]),
            'company' => json_encode($permission[1]),
            'master' => json_encode($permission[1]),
            'stock' => json_encode($permission[1]),
            'product_master' => json_encode($permission[1])
        ];
        $perm_data[2] = [
            'role_id'=>1,
            'sell' => json_encode($permission[2]),
            'repair' => json_encode($permission[2]),
            'custom' => json_encode($permission[2]),
            'pnd' => json_encode($permission[2]),
            'company' => json_encode($permission[2]),
            'master' => json_encode($permission[2]),
            'stock' => json_encode($permission[2]),
            'product_master' => json_encode($permission[2])
        ];
        \App\Models\Company\User\CompanyUserPermission::create($perm_data[0]);
        \App\Models\Company\User\CompanyUserPermission::create($perm_data[1]);
        \App\Models\Company\User\CompanyUserPermission::create($perm_data[2]);

    }
}
