<?php
namespace App\Services;
use Illuminate\Support\Facades\Response as FacadeResponse;

use App\Repositories\CompanyRepository;
class CompanyService{
    private CompanyRepository $company;
    public function __construct(CompanyRepository $company)
    {
        $this->company = $company ;
    }
    public function all(){
        $company = $this->company;
        return $company->all();
    }
    public function create(array $data = []){
        if($this->company->create($data)){
            $content = [
                'message' => 'complete',
            ];
            $response = FacadeResponse::make(json_encode($content), 200);
            return  $response;
        }
      
    }   
}
?>