@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Stone Size')
@endsection

@section('content')
    @include('components.tables.master.MasterStoneSizeTable')
    @include('components.modal.master.MasterStoneSizeModal')
    
@endsection
@section('footer_script')

@component('components.modal.ConfirmModal',[
        "data"=> [

            "messageConfirm"=>[
        "heading"=>"Create",
        "message"=>"Do you want to Create Stone Cutting Master ?",
        "image"=> URL::asset('/images/icons/question.png')
        ],
            "messageDone"=>[
                "heading"=>"Successful",
                "message"=>"Save Stone Cutting Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>URL::to('api/master/master-stroage-validate'),
            "requestUrl"=>URL::to('api/master/master-stone-cutting')
        
            ]



    ]
    

        )

 
@endcomponent

@endsection

