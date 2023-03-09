<?php
namespace App\Repositories\Company;
use App\Models\CompanyUsers as CompanyUser;
use App\Interfaces\Company\CompanyUserInterface;
use Illuminate\Support\Facades\Auth;
use Carbon;
class CompanyUserRepository implements CompanyUserInterface{
    private CompanyUser $companyUser;
    public function __construct(CompanyUser $companyUser)
    {
        $this->companyUser = $companyUser;
    }

    public function checkUserExpired($user_expire):bool{
        $now = Carbon::now();
        $startDate = Carbon::parse($yourModelObject['created_at'])->format('d.m.Y h:m:sa');
        $endDate = Carbon::parse($yourModelObject['created_at'])->addMinutes(720)->format('d.m.Y h:m:sa');
        if ($user_expire>=$now) {
            return true;
        } else {
            return false;
        }
  
    }
    public function checkUserExist(string $username,int $company_id):bool{
        $count_users = $this->companyUser->where('username','=',$username)->where('company_id','=',$company_id)->count();
        if($count_users>0){
            return true;
        }else{
            return false;
        }
         
    }
    public function login(array $credentials = [], bool $remember = false):bool{
        return Auth::guard('company_users')->attempt(
            ['username' => $credentials['username'], 'password' => $credentials['password']]
        );
    }

}


?>