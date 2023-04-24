<?php
namespace App\Interfaces\Customer\Inventory\Master;

interface MasterCodeInterface{
    public function all($company_name);
    // public function find(int $master_id);
    public  function FindByMasterType(string $company_name,string $master_type,int $limit=100);
    
    // public function create(array $data = []);
    // public function paginate($length);
    // public function delete(int $master_id);
    // public function update(int $master_id);
    // public function count(int $master_id);

   
    public function GetMasterCodeFromMasterID(string $company_name,int $master_id);
    // public function GetBaseMasterByMasterID(string $company_name , int $master_id);
    // public function GetMasterCodeFromID(int $id);
    // public function GetMasterCodeFromCompanyID(int $company_id);
    // public function GetMasterCodeByMasterType();
    // public function GetMasterCodeStatus();
}
?>