@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Stone')
@endsection

@section('content')

    @include('components.tables.master.MasterStoneTable')
    @include('components.modal.master.MasterStoneModal')
    
@endsection
@section('footer_script')

@component('components.modal.ConfirmModal',[
        "data"=> [

            "messageConfirm"=>[
        "heading"=>"Create",
        "message"=>"Do you want to Create Stone Master ?",
        "image"=> URL::asset('/images/icons/question.png')
        ],
            "messageDone"=>[
                "heading"=>"Successful",
                "message"=>"Save Stone Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>URL::to('api/master/master-stroage-validate'),
            "requestUrl"=>URL::to('api/master/master-stone')
        
            ]



    ]
    

        )

 
@endcomponent

@endsection

