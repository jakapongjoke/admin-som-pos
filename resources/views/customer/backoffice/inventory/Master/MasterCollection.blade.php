@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Collection')
@endsection

@section('content')

    @include('components.tables.master.MasterCollectionTable')
    @include('components.modal.master.MasterCollectionModal')
    
@endsection
@section('footer_script')

@component('components.modal.ConfirmModal',[
        "data"=> [

            "messageConfirm"=>[
        "heading"=>"Create",
        "message"=>"Do you want to Create Collection Master ?",
        "image"=> URL::asset('/images/icons/question.png')
        ],
            "messageDone"=>[
                "heading"=>"Successful",
                "message"=>"Save Collection Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>URL::to('api/master/master-stroage-validate'),
            "requestUrl"=>URL::to('api/master/master-item-collection')
        
            ]



    ]
    

        )

 
@endcomponent

@endsection

