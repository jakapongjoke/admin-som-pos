<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_data = [
            [
                'role_name' => 'super admin ananta',
                'company_id' => 1,
            ],
            [
                'role_name' => 'admin ananta',
                'company_id' => 1,
            ],
            [
                'role_name' => 'user ananta',
                'company_id' => 1,
            ],

        ];
         \App\Models\Company\User\CompanyUserRole::create($role_data[0]);
         \App\Models\Company\User\CompanyUserRole::create($role_data[1]);
         \App\Models\Company\User\CompanyUserRole::create($role_data[2]);


    }
}
