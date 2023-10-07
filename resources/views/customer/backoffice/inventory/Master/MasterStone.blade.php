@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Stone')
@endsection

@section('content')

    @include('components.tables.master.MasterStoneTable')
    @include('components.modal.master.MasterStoneModal')
    
@endsection
@section('footer_script')

<!-- @component('components.modal.ConfirmModal',[
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
            "validateUrl"=>URL::to('api/master/master-stone-validate'),
            "requestUrl"=>URL::to('api/master/master-stone')
        
            ]



    ]
    

        )

 
@endcomponent -->
<script>
// {
//     "id": 365,
//     "running_number": 0,
//     "parent_id": null,
//     "master_code": "BS-SP",
//     "master_name": "Blue Sapphire",
//     "master_tag": null,
//     "master_type": "master_stone_name",
//     "master_price": 0,
//     "master_description": "Blue Sapphire Detail",
//     "master_status": "active",
//     "master_image": "[]",
//     "master_infomation": null,
//     "master_formula": null,
//     "master_addional_infomation": null,
//     "master_available_for": null,
//     "created_at": "2023-06-01T16:24:10.000000Z",
//     "updated_at": "2023-06-25T15:14:15.000000Z"
// }


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
<script src="{{URL::asset('js/helpers/api_helper.js')}}"></script>
<script src="{{URL::asset('js/master-code-table.js')}}"></script>
<script>
            const checkbox = '<input type="checkbox" class="check_all_list"/>';
    let tableOptions = {
            masterType:"master_stone_group",
            modalId:"#MasterStoneModal",
            listDataRoute:"/api/master/master-stone/master-stone-name",
            viewRoute:"/api/master/master-stone/view/",
            getRoute:"api/master/master-stone",
            postRoute:"api/master/master-stone",
            updateRoute:"api/master/master-stone",
            deleteRoute:"api/master/master-stone",
            validateRoute:"api/master/master-stone-validate",
            deleteRoute:"/api/master/master-stone",
            changeStatusUrl:"/api/master/master-stone/changestatus",
            checkExistUrl:"/api/product-master/get-count-from-stone-name-id?master_type=master_stone_name",
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

