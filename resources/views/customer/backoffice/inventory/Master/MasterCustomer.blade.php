@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Storage')
@endsection

@section('content')

    @include('components.tables.master.MasterCustomerTable')
    @include('components.modal.master.MasterCustomerModal')
    
@endsection
@section('footer_script')

@component('components.modal.ConfirmModal',[
        "data"=> [

            "messageConfirm"=>[
        "heading"=>"Create",
        "message"=>"Do you want to Create Storage Master ?",
        "image"=> URL::asset('/images/icons/question.png')
        ],
            "messageDone"=>[
                "heading"=>"Successful",
                "message"=>"Save Storage Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>"api/master-stroage-validate",
            "requestUrl"=>"api/master-stroage"
        
            ]



    ]
    

        )

 
@endcomponent
<!-- <script>
    window.onload =  ()=>{
        console.log('aa');
        let countries =  axios.get('/api/countries');
        console.log(countries);
    }
</script> -->
@endsection

