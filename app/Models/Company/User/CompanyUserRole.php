<?php

namespace App\Models\Company\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyUserRole extends Model
{
    use HasFactory;
    protected $table = "company_user_roles";

    public function permission()
    {
        return $this->hasOne(CompanyUserPermission::class,'role_id');
    }





}
