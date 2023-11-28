<?php

namespace App\Models\Customer\GeneralInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use \App\Traits\Table\BindsTableDynamically;

    use HasFactory;

    protected $fillable = ['branch_name','company_name','branch_code','phone_number','branch_location','fax_number','email','master_description','phone_code','business_type','province','city','zipcode','branch_info','branch_image','branch_type','certificate_footer','general_footer','tax_id','form_id','country','brand_logo'];
    protected $casts = [
        'branch_info' => 'array',
        'branch_image' => 'array',
        
    ];

}
