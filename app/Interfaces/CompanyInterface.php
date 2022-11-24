<?php
namespace App\Interfaces;

interface CompanyInterface{
    public function all();
    public function find(int $id);
    public function create(array $data = []);
}
?>