@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Base Metal Master')
@endsection

@section('content')

    @include('components.tables.master.MasterStorageTable')
    @include('components.modal.master.MasterStorageModal')
    
@endsection
@section('footer_script')

@component('components.modal.ConfirmModal',[
        "data"=> [

            "messageConfirm"=>[
        "heading"=>"Create",
        "message"=>"Do you want to Create Base Metal Master ?",
        "image"=> URL::asset('/images/icons/question.png')
        ],
            "messageDone"=>[
                "heading"=>"Successful",
                "message"=>"Save Base Metal Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>"api/master-stroage-validate",
            "requestUrl"=>"api/master-stroage"
        
            ]



    ]
    

        )

 
@endcomponent

@endsection

