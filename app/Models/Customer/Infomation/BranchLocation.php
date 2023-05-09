<?php

namespace App\Models\Customer\Infomation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchLocation extends Model
{
    use \App\Traits\Table\BindsTableDynamically;
    protected $fillable = ['branch_name','branch_type','branch_information','contact_infomation'];

    use HasFactory;
}
