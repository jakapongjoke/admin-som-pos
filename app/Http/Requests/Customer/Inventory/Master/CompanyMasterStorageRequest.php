<?php

namespace App\Http\Requests\Customer\Inventory\Master;
use Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CompanyMasterStorageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::guard('company_users')->check()){
            return false;


        }else{
            return true;

        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'master_name'=>'required|string|max:255',
            'master_code'=>'required|string|max:255',
            'branch_location'=>'required|numeric',
            'desctiption'=>'string|max:255|nullable'
        ];
    }
}  
