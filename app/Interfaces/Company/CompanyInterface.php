<?php
namespace App\Interfaces\Company;
use Illuminate\Pagination\LengthAwarePaginator;
interface CompanyInterface{
    public function all();
    public function find(int $id);
    public function create(array $data = []);
    public function paginate($length);
}
?>