<?php
namespace App\Interfaces\Inventory\Master;

interface ProductGroupInfoInterface {
    public function all();
    public function find(int $master_id);
    public function create(array $data = []);
    public function paginate($length);
    public function delete(int $master_id);
    public function update(int $master_id);
    public function count(int $master_id);

    public function GetProductGroupInfoTypeFromProductMasterID(int $product_master_id);
    public function GetProcessLabourFromProductMasterID(int $master_id);



   
}



?>