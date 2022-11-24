<?php
namespace App\Repositories;
use App\Models\Company as company;
use App\Interfaces\CompanyInterface;
class CompanyRepository implements CompanyInterface{
    private Company $company;
    public function __construct(Company $company)
    {
        $this->company = $company;
    }
    public function all(){
        return $this->company::paginate(1);
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

}


?>