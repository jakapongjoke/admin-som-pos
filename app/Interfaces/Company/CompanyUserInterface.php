<?php

namespace App\Interfaces\Company;
use Illuminate\Support\Facades\Schema;

interface CompanyUserInterface {

    public function checkUserExpired($user_expire):bool;
    public function checkUserExist(string $username,int $company_id):bool;
    public function login(array $credentials = [], bool $remember = false):bool;
}


?>