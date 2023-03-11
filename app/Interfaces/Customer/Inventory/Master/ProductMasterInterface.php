<?php
namespace App\Interfaces\Inventory\Master;

interface ProductMasterInterface {
    public function all();
    public function find(int $master_id);
    public function create(array $data = []);
    public function paginate($length);
    public function delete(int $master_id);
    public function update(int $master_id);
    public function count(int $master_id);

    public function GetProductMasterFromStoneID(int $master_code);
    public function GetProductGroupInfoFromMasterID(int $master_id);



   
}



?>