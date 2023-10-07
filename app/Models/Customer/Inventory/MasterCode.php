<?php

namespace App\Models\Customer\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCode extends Model
{
    use \App\Traits\Table\BindsTableDynamically;
    use HasFactory;
    protected $fillable = ['master_code','parent_id','master_name','running_number','master_tag','master_type','master_price','master_description','master_status','master_image','addional_infomation'];
    protected $casts = [
        'addional_infomation' => 'array',
    ];
}
