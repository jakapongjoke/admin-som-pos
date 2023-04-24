@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Product Master Jewelry')
@endsection

@section('content')

    @include('components.tables.ProductMaster.ProductMasterJewelryTable')
    @include('components.modal.ProductMaster.ProductMasterJewelryModal')
    
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
