<?php
namespace App\Services;
use Illuminate\Support\Facades\Response as FacadeResponse;


use App\Repositories\Company\CompanyUserRepository;
class CompanyUserService{
    private CompanyUserRepository $CompanyUser;
    public function __construct(CompanyUserRepository $CompanyUser)
    {
        $this->companyUser = $CompanyUser ;
    }
    public function checkUserNotExpired(date $user_expired_date){ 

        if(!$this->companyUser->checkUserExpired($user_expired_date)){
            $content = [
                ' message' => 'Unauthorized Because This User has expired',
                'code' => 401,
            ];
            $response = FacadeResponse::make(json_encode($content), 401 );
            return  $response;
            
        }else{
            return true;
        }
    }

    public function CompanyUserLogin(string $username,string $password,int $company_id){
         if($this->companyUser->checkUserExist($username,$company_id)){
             if( $this->companyUser->login(["username"=>$username,"password"=>$password])){
                return true;
             }else{
                $content = [
                    'message' => 'Unauthorized Because Wrong password',
                    'code' => 401,
                    'err_type'=>'wrong_password'
                ];
                return  $content;
             }
         }else{
               $content = [
                'message' => 'Unauthorized Because This User not match in this company',
                'code' => 401,
                'err_type'=>'username_not_match'
            ];
            return  $content;
         }
    }


}
?>