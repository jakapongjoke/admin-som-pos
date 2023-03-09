<?php
namespace App\Interfaces\Company\Inventory\Master;

interface MasterCodeInterface{
    public function all();
    public function find(int $id);
    public function create(array $data = []);
    public function paginate($length);
    public function delete(int $id);
    public function update(int $id);
}
?>