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
<script>


    let masterItem = {
        listData:[],
        set setListData(data){
            for(let i=0 ; i<data.length;i++){
                let arrData = {
                    id:data[i]['id'],
                    master_name:data[i]['master_name'],
                    master_code:data[i]['master_code'],
                    master_description:data[i]['master_description'],
                    master_status:data[i]['master_status'],
                    updated_at:data[i]['updated_at'],

                }
                this.listData.push(arrData);
            }
          
        },
        get getListData(){
            return this.listData;
        },
        clearListData(){
            while (this.listData.length > 0) {
                this.listData.pop()
            }
        }

        
    }

</script>
<script src="{{URL::asset('js/helpers/list_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/element_helper.js')}}"></script>

<script src="{{URL::asset('js/helpers/api_helper.js')}}"></script>
<script src="{{URL::asset('js/master-code-table.js')}}"></script>
<script>
            const checkbox = '<input type="checkbox" class="check_all_list"/>';
    let tableOptions = {
            masterType:"master_stone_group",
            masterTypeRouteName:"master-stone-group",
            modalId:"#MasterStoneGroupModal",
            listDataRoute:"/api/master/master-stone/master-stone-group",
            viewRoute:"/api/master/master-stone/view/",
            getRoute:"api/master/master-stone",
            postRoute:"api/master/master-basic-info",
            updateRoute:"api/master/master-basic-info",
            deleteRoute:"api/master/master-basic-info",
            validateRoute:"api/master/master-stone-validate",
            changeStatusUrl:"/api/master/master-stone/changestatus",
            checkExistUrl:"/api/product-master/get-count-from-stone-name-id?field_name=stone_group",
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
                    doneText : "Save  Master Successful",
                },
                edit:{
                     confirmHeading:"Edit",
                    confirmText : "Do you want to change master stone?",
                    doneHeading : "Successful",
                    doneText : "Edit Master Successful",

                },
                delete:{
                     confirmHeading:"Delete",
                    confirmText : "Do you want to delete this master  ?",
                    doneHeading : "Successful",
                    doneText : "Delete  Master Successful",
                },
                imageIcon:{
                    confirmIcon:"/images/icons/question.png",
                    doneIcon:"/images/icons/checked.png",
                    confirmDelete:"/images/icons/question.png",
                    doneDelete:"/images/icons/cancel1.png"
                }
               
            }
    }
    jQuery('#mastertable').masterTable(tableOptions);

  

</script>
@endsection

