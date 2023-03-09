<?php
namespace App\Services\Company\User;
use App\Repositories\Company\User\CompanyUserRolePermissionRepository;

class CompanyRolePermissionService{

    public static function getRolePermission($role_id){
        return CompanyUserRolePermissionRepository::getRolePermission($role_id);
    }

    
}

?>