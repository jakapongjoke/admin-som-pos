@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Base Metal Master')
@endsection

@section('content')

    @include('components.tables.master.MasterBaseMetalTable')
    @include('components.modal.master.MasterBaseMetalModal')
    
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
            masterType:"master_base_metal",
            masterTypeRouteName:"master-base-metal",
            modalId:"#MasterBaseMetalModal",
            listDataRoute:"/api/master/master-base-metal",
            viewRoute:"/api/master/master-base-metal/view",
            getRoute:"api/master/master-base-metal/list",
            postRoute:"api/master/master-base-metal",
            updateRoute:"api/master/master-base-metal",
            deleteRoute:"api/master/master-base-metal",
            validateRoute:"api/master/master-base-metal-validate",
            changeStatusUrl:"",
            checkExistUrl:"",
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
                    confirmText : "Do you want to create this master base metal ?",
                    doneHeading : "Successful",
                    doneText : "Save  Master Successful",
                },
                edit:{
                     confirmHeading:"Edit",
                    confirmText : "Do you want to change master base metal?",
                    doneHeading : "Successful",
                    doneText : "Edit Master Successful",

                },
                delete:{
                     confirmHeading:"Delete",
                    confirmText : "Do you want to delete this master base metal  ?",
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


<script>


</script>
@endsection

