<?php

namespace App\Models\Customer\GeneralInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use \App\Traits\Table\BindsTableDynamically;

    use HasFactory;

    protected $fillable = ['branch_name','company_name','branch_code','phone_number','fax_number','email','master_description','business_type','branch_info','branch_image','branch_type','certificate_footer','general_footer','tax_id'];
    protected $casts = [
        'branch_info' => 'array',
        'branch_image' => 'array',
    ];

}
