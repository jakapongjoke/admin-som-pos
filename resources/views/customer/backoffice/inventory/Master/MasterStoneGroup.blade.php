@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Stone Group')
@endsection

@section('content')

    @include('components.tables.master.MasterStoneGroupTable')
    @include('components.modal.master.MasterStoneGroupModal')
    
@endsection
@section('footer_script')

@component('components.modal.ConfirmModal',[
        "data"=> [

            "messageConfirm"=>[
        "heading"=>"Create",
        "message"=>"Do you want to Create Stone Group Master ?",
        "image"=> URL::asset('/images/icons/question.png')
        ],
            "messageDone"=>[
                "heading"=>"Successful",
                "message"=>"Save Stone Group Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>URL::to('api/master/master-stroage-validate'),
            "requestUrl"=>URL::to('api/master/master-stone-group')
        
            ]



    ]
    

        )

 
@endcomponent

@endsection

