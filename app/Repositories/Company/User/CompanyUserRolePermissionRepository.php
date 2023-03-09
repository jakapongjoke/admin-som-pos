<?php
namespace App\Repositories\Company\User ;

use App\Models\Company\User\CompanyUserRole as CompanyUserRole;
use App\Models\Company\User\CompanyUserRolePermission as CompanyUserRolePermission;


class CompanyUserRolePermissionRepository {

    public static function getRolePermission($role_id){

      return CompanyUserRolePermission::where('role_id','=',(int)$role_id)->get();
    }

}
?>