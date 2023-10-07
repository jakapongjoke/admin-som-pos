@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Stone')
@endsection

@section('content')

    @include('components.tables.master.MasterStoneShapeTable')
    @include('components.modal.master.MasterStoneShapeModal')
    
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
                "message"=>"Save Stone Shape Master Successful",
                "image"=>URL::asset('/images/icons/checked.png') 
                ],
            "validateUrl"=>URL::to('api/master/master-stroage-validate'),
            "requestUrl"=>URL::to('api/master/master-stone-shape')
        
            ]



    ]
    

        )

 
@endcomponent
<script src="{{URL::asset('js/helpers/list_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/api_helper.js')}}"></script>
<script src="{{URL::asset('js/master-code-table.js')}}"></script>
<script>
            const checkbox = '<input type="checkbox" class="check_all_list"/>';
    let tableOptions = {
            masterType:"master_stone_group",
            modalId:"#MasterStoneShapeModal",
            listDataRoute:"/api/master/master-stone/master-stone-shape",
            viewRoute:"/api/master/master-stone/view/",
            getRoute:"api/master/master-stone",
            postRoute:"api/master/master-stone",
            updateRoute:"api/master/master-stone",
            deleteRoute:"api/master/master-stone",
            validateRoute:"api/master/master-stone-validate",
            deleteRoute:"/api/master/master-stone",
            changeStatusUrl:"/api/master/master-stone/changestatus",
            checkExistUrl:"/api/product-master/get-count-from-stone-name-id?master_type=master_stone_shape",
            dataField : {
                heading:[checkbox,'No.', 'Name', 'Code', 'Description', 'Last Modified Date'],
                colData:["master_name","master_code","master_description","updated_at"],
                numberVailidateField:[],
                textVailidateField:[],
                floatVailidateField:[],
                options:{
                    activeStatusButton:true,
                    actionButton:true,
                    actionListMenu:{
                    preview:true,
                    edit:true,
                    copy:true,
                    delete:true,
            
                    },
                    idField:"id",
            
                },
            
              
            
            
            },
            paginate : {
                perPage:10,
            },

            message:{
           
                create:{
                     confirmHeading:"Create",
                    confirmText : "Do you want to create this master stone name ?",
                    doneHeading : "Successful",
                    doneText : "Save Stone Master Successful",
                },
                edit:{
                     confirmHeading:"Edit",
                    confirmText : "Do you want to change master stone?",
                    doneHeading : "Successful",
                },
                delete:{
                     confirmHeading:"Delete",
                    confirmText : "Do you want to delete this master group ?",
                    doneHeading : "Successful",
                },
                imageIcon:{
                    confirmIcon:"/images/icons/question.png",
                    doneIcon:"/images/icons/checked.png",
                }
               
            }
    }

        jQuery('#mastertable').masterTable(tableOptions);

</script>
@endsection

