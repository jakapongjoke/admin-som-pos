@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Collection')
@endsection

@section('content')

    @include('components.tables.master.MasterCollectionTable')
    @include('components.modal.master.MasterCollectionModal')
    
@endsection
@section('footer_script')

<script src="{{URL::asset('js/helpers/list_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/element_helper.js')}}"></script>

<script src="{{URL::asset('js/helpers/api_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/input_validate.js')}}"></script>
<script src="{{URL::asset('js/master-code-table.js')}}"></script>
<script>
            const checkbox = '<input type="checkbox" class="check_all_list"/>';
    let tableOptions = {
            masterType:"master_item_collection",
            masterTypeRouteName:"master-item-collection",
            modalId:"#MasterCollectionModal",
            listDataRoute:"/api/master/master-item",
            viewRoute:"/api/master/master-item/view/item",
            getRoute:"api/master/master-item/list",
            postRoute:"api/master/master-item",
            updateRoute:"api/master/master-item",
            deleteRoute:"api/master/master-item",
            validateRoute:"api/master/master-item-validate",
            changeStatusUrl:"",
            checkExistUrl:"",
            singleImage:true,
            singleImageElement:"#image-input",
            singleImageParent:".img_upload_wrapper",
            dataField : {
                heading:[checkbox,'No.', 'Name', 'Code', 'Description', 'Last Modified Date'],
                colData:["master_name","master_code","master_description","updated_at"],
                numberVailidateField:[],
                numberCountValidate:[],
                emailValidateField:[],
                specialCharFilterField:[],
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
                    confirmText : "Do you want to create this master collection ?",
                    doneHeading : "Successful",
                    doneText : "Save  Master Successful",
                },
                edit:{
                     confirmHeading:"Edit",
                    confirmText : "Do you want to change master collection ?",
                    doneHeading : "Successful",
                    doneText : "Edit Master Successful",

                },
                delete:{
                     confirmHeading:"Delete",
                    confirmText : "Do you want to delete this master collection  ?",
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

