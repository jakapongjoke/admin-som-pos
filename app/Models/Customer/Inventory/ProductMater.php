<?php

namespace App\Models\Customer\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMater extends Model
{
    use \App\Traits\Table\BindsTableDynamically;

    use HasFactory;
    
    protected $fillable = ['product_stone_code','running_number','product_master_caption','collection','metal','size','stone_color','stone_name','stone_clarity','stone_cutting','master_description','master_certificate','stone','net_weight','gross_weight','sale_price','master_price','item','master_image','master_tag','master_type','master_status','updated_at'];

    protected $casts = [
        'addional_infomation' => 'array',
        'master_image' => 'array',
        'master_certificate_image' => 'array',
    ];

}
