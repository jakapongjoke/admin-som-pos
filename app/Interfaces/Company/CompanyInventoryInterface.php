<?php
namespace App\Repositories\Company;
use Illuminate\Support\Facades\Schema;

interface CompanyInventoryInterface {
    public function create(string $name,array $fielddata);
}


?>