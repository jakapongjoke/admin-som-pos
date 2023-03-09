<?php
namespace App\Repositories\Company;
use App\Models\Company as Company;
use App\Interfaces\Company\CompanyInterface;

class CompanyRepository implements CompanyInterface{
    private Company $company;
    public function __construct(Company $company)
    {
        $this->company = $company;
    }
    public function all(){
        return $this->company::all();
    }
    
    public function paginate($length){
        return $this->company::paginate($length);
    }
    
    public function find(int $id){
        $this->company = $this->customer::findorFail($id);
    }   
    public function create(array $data = []){
       if($this->company->create($data)){
       
        return true;
       }else{
       
        return false;
       }
   
    }   
    public function getCompanyID($company_name){
     
        $company =  $this->company->where('company_name',$company_name)->first();
        return $company->fresh()->id;
      
    
    }
    

}


?>