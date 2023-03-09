<?php

namespace App\Policies;

use App\Models\Inventory\CompanyMasterInventory;
use App\Models\CompanyUsers as CompanyUsers;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Services\Company\User\CompanyRolePermissionService as CompanyRolePermissionService;
class CompanyMasterPolicy
{
    
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(CompanyUsers $user)
    {
       $user_role_permission = CompanyRolePermissionService::getRolePermission($user->role_id)->first()->toArray();
       if($user_role_permission['sell']['view']){
        return true;

       }else{
        return false;

       }

        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\CompanyUsers  $user
     * @param  \App\Models\CompanyMasterInventory  $companyMasterInventory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(CompanyUsers $CompanyUsers, CompanyMasterInventory $CompanyMasterInventory)
    {
        //
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\CompanyUsers  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(CompanyUsers $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompanyMasterInventory  $companyMasterInventory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(CompanyUsers $user, CompanyMasterInventory $CompanyMasterInventory)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompanyMasterInventory  $companyMasterInventory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(CompanyUsers $user, CompanyMasterInventory $companyMasterInventory)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompanyMasterInventory  $companyMasterInventory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(CompanyUsers $user, CompanyMasterInventory $companyMasterInventory)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompanyMasterInventory  $companyMasterInventory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(CompanyUsers $user, CompanyMasterInventory $companyMasterInventory)
    {
        //
    }
}
