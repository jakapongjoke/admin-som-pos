<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['company_name','company_store_name','company_business_type','company_tax_id','company_address','company_phone','company_logo','company_fax','company_email','company_country','company_province','company_city','company_zipcode','general_footer','certificate_footer'];

    use HasFactory;
}
