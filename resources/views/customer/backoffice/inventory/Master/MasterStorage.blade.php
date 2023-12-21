@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Storage')
@endsection

@section('content')

    @include('components.tables.master.MasterStorageTable')
    @include('components.modal.master.MasterStorageModal')
    
@endsection
@section('footer_script')

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
            masterType:"master_account_storage",
            masterTypeRouteName:"master-storage",
            modalId:"#MasterStorageModal",
            listDataRoute:"/api/master/master-storage",
            viewRoute:"/api/master/master-storage/view/",
            getRoute:"api/master/master-storage/list",
            postRoute:"api/master/master-storage",
            updateRoute:"api/master/master-storage",
            deleteRoute:"api/master/master-storage",
            validateRoute:"api/master/master-stroage-validate",
            changeStatusUrl:"",
            checkExistUrl:"",
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
                    confirmText : "Do you want to create this Master Storage ?",
                    doneHeading : "Successful",
                    doneText : "Save  Master Successful",
                },
                edit:{
                     confirmHeading:"Edit",
                    confirmText : "Do you want to change  Master Storage ?",
                    doneHeading : "Successful",
                    doneText : "Edit Master Successful",

                },
                delete:{
                     confirmHeading:"Delete",
                    confirmText : "Do you want to delete this  Master Storage  ?",
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

