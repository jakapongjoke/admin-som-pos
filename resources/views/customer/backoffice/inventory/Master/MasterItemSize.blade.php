@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Item Size')
@endsection

@section('content')

    @include('components.tables.master.MasterItemSizeTable')
    @include('components.modal.master.MasterItemSizeModal')
    
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
            masterType:"master_item_size",
            masterTypeRouteName:"master-item",
            modalId:"#MasterItemSizeModal",
            listDataRoute:"/api/master/master-item",
            viewRoute:"/api/master/master-item/view/item",
            getRoute:"api/master/master-item/list",
            postRoute:"api/master/master-item",
            updateRoute:"api/master/master-item",
            deleteRoute:"api/master/master-item",
            validateRoute:"api/master/master-item-validate",
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
                    confirmText : "Do you want to create this master item ?",
                    doneHeading : "Successful",
                    doneText : "Save  Master Successful",
                },
                edit:{
                     confirmHeading:"Edit",
                    confirmText : "Do you want to change master item ?",
                    doneHeading : "Successful",
                    doneText : "Edit Master Successful",

                },
                delete:{
                     confirmHeading:"Delete",
                    confirmText : "Do you want to delete this master item  ?",
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
     window.addEventListener('DOMContentLoaded', async () => {


            // Hide delete button if there is only one row
            if ($('.select_avaliable_list').length === 1) {
                $('.delete-row').hide();
            }

            // Add click event for add button
            $('.add-row').click(function () {
                // Remove event listeners from cloned add buttons
                $('.add-row').off('click');

                // Clone the last row
                var newRow = $('.select_avaliable_list').last().clone();
                // Clear the selected value in the new row
                newRow.find('select').val('');
                newRow.find('.form-check').hide();
                newRow.find('label[for="available-radio"]').hide();
                // Show the add button on the new last row
                newRow.insertAfter('.select_avaliable_list:last-child');
                $('.add-row').before().hide();
                $('.add-row').last().show();
                // Reattach click event listener to add button
                $('.add-row').click(arguments.callee);
                // Show delete button if there is more than one row
                $('.delete-row').show();
            });

            // Define the deleteRow function
       
            // Add click event for delete button to use the deleteRow function
            $(document).on('click', '.delete-row' ,function(){
                console.log('delete')
                var $row = $(this).parents('.select_avaliable_list');
                // Show form-check on next row if it's the first row that was deleted
                if ($row.index() === 0) {
                    $row.next('.select_avaliable_list').find('.form-check, .form-check-label').show();
                }
               
                // Remove the row
                $row.remove();
                $('.select_avaliable_list').last().find('.add-row').show();
                // Hide delete button if there is only one row
                if ($('.select_avaliable_list').length === 1) {
                    $('.delete-row').hide();
                }
            });

            const master_item_list = await SendAjaxGet('/api/master/master-item');
            const master_item =  await master_item_list.data.data;
            for(let m = 0 ; m<master_item.length;m++){

                $('.master_available_for').append(jQuery('<option>', { 
            value: master_item[m].id,
            text :master_item[m].master_name
        }));
                
            } 
    });
</script>
@endsection

