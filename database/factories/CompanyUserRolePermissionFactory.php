<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyUserRolePermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $permission[0] = [
            "create"=>true,
            "edit"=>true,
            "delete"=>true,
            "view"=>true,
            "price"=>true,
        ];
        $permission[1] = [
            "create"=>false,
            "edit"=>true,
            "delete"=>false,
            "view"=>false,
            "price"=>false,
        ];
        $permission[2] = [
            "create"=>false,
            "edit"=>false,
            "delete"=>false,
            "view"=>false,
            "price"=>false,
        ];
        $permission[3] = [
            "create"=>true,
            "edit"=>false,
            "delete"=>false,
            "view"=>true,
            "price"=>false,
        ];
        
        $permission[4] = [
            "create"=>true,
            "edit"=>false,
            "true"=>false,
            "view"=>true,
            "price"=>false,
        ];
        return [
            'role_id' => rand(1,100),
            'sell' => json_encode( $permission[rand(0,4)]),
            'repair' => json_encode( $permission[rand(0,4)]),
            'custom' => json_encode( $permission[rand(0,4)]),
            'pnd' => json_encode( $permission[rand(0,4)]),
            'company' => json_encode( $permission[rand(0,4)]),
            'master' => json_encode( $permission[rand(0,4)]),
            'stock' => json_encode( $permission[rand(0,4)]),
            'product_master' => json_encode( $permission[rand(0,4)]),
        ];
    }
}
