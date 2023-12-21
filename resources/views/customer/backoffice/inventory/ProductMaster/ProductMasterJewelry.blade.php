@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Product Master Jewelry')
<style>
div#MasterProductModal .modal-content {
    width: 1333px;
    height: 1081px;
}
</style>
@endsection

@section('content')

    @include('components.tables.product_master.ProductMasterJewelryTable')
    @include('components.modal.product_master.ProductMasterJewelryModal')
    
@endsection
@section('footer_script')

@component('components.modal.ConfirmModal',[
        "data"=> [

            "messageConfirm"=>[
        "heading"=>"Create",
        "message"=>"Do you want to Create Stone Product Master ?",
        "image"=> URL::asset('/images/icons/question.png')
        ],
            "messageDone"=>[
                "heading"=>"Successful",
                "message"=>"Save  Stone Product Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>URL::to('api/master/master-stroage-validate'),
            "requestUrl"=>URL::to('api/master/master-stroage')
        
            ]



    ]
    

        )

 
@endcomponent

@endsection

