<?php
namespace App\Interfaces\Company\Inventory\Master;

interface MasterStoneInterface{
    public function all();
    public function find(int $id);
    public function create(array $data = []);
    public function paginate($length);
    public function delete(int $id);
    public function update(int $id);
    public function findByType();
}
?>