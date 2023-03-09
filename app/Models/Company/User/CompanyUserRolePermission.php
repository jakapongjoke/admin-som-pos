<?php

namespace App\Models\Company\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyUserRolePermission extends Model
{
    use HasFactory;
    protected $table = "company_user_role_permissions";


    protected $casts = [
        'sell' => 'array',
        'repair' => 'array',
        'custom' => 'array',
        'pnd' => 'array',
        'company' => 'array',
        'master' => 'array',
        'product_master' => 'array',
        'stock' => 'array',
        'addional_master_pemissions' => 'array',
        'addional_stock_pemissions' => 'array',
        'addional_product_pemissions' => 'array',
        'addional_user_permissions' => 'array',
    ];
    public function role()
    {
        return $this->belongsTo(CompanyUserRole::class);
    }


}
