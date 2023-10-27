@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Company Profile')
<link rel="stylesheet" href="{{URL::asset('css/inventory/stock.css')}}">
@endsection

@section('content')

    @include('components.inventory.StockAnalysisTable')

@endsection
@section('footer_script')
<script src="{{URL::asset('js/helpers/inventory/stock_analysis.js')}}"></script>

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


