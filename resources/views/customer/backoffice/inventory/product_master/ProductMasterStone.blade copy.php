@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Item')
@endsection

@section('content')

    @include('components.tables.product_master.ProductMasterStoneTable')
    @include('components.modal.product_master.ProductMasterStoneModal')
    
@endsection
@section('footer_script')

<script src="{{URL::asset('js/helpers/files_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/list_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/api_helper.js')}}"></script>
<script>
    const checkbox = '<input type="checkbox" class="check_all_list"/>';


    const dataField  = {
        heading:[checkbox,'No.', 'Image', 'Stone Code', 'Stone Group', 'Stone', 'Shape', 'Size', 'Price (THB)', 'Description', 'Last Modified Date'],
        colData:["master_image","product_stone_code","stone_group","stone_name","stone_shape","size","sale_price","master_description","updated_at"],
        options:{
            activeStatusButton:true,
            actionButton:true,
            actionListMenu:{
            preview:true,
            edit:true,
            copy:true,
            delete:true,
        }
        },
   
        
    }

    document.addEventListener('DOMContentLoaded', async function() {
   
        document.getElementById("#mastertable");

        const data = await fetchdata('/api/product-master/product-master-stone/10/1');

      
       console.log(data);
        // console.log(JSON.parse(JSON.stringify(product_master_list_resp)))
       let MountedDom = jQuery("#mastertable").html(headerTable(dataField.heading,dataField.options));
       const product_master_list_resp = await data.list_data;
       const listobj = [...product_master_list_resp];
    

       MountedDom.append(listTableData(listobj,dataField.colData,dataField.options))
       MountedDom.on('click','.action_button',function(e){
    
        e.preventDefault();
        e.stopPropagation();
        console.log('b')
        // $(this).parents('.action_wrp').toggle();
        // $(this).parents('.action_wrp').find('.action_list').toggleClass('show');
       
      if($(this).parent('.action_wrp').hasClass('active')){
        $('.action_wrp').removeClass('active')
        console.log('active');
        $(this).parent('.action_wrp').removeClass('active')

      }else{
        $('.action_wrp').removeClass('active')
        $(this).parent('.action_wrp').addClass('active')

      }

        // $(this).parents('.action_wrp').toggleClass('active');


        });


    //    MountedDom.find('tr').click(function(e){
    //     console.log('wowow');
    //    });





       MountedDom.find('input[data-bootstrap-switch]').each(function(){
      $(this).bootstrapSwitch({
state:true,
on:"active",
off:"suspend",
handleWidth:'200',


      });
    })




    })

</script>

<script>

// # Create Button Product Master
jQuery('.create').on('click',async function(e){
e.stopPropagation();
e.preventDefault();

if($('.master_certificate_img_output_block').length>0){
$('.master_certificate_img_output_block').remove();
$('#cert_image_file').val("");

}


// console.log(window.location.host);
// console.log( window.location.origin);
// console.log(window.location.pathname.split( '/' ));
let stone_group = await SendAjaxGet('api/master/master-stone/master-stone-group?page=1&perpage=10');
const resp =  stone_group.data;
// let data = await JSON.parse(resp.data);
let data = [...resp.data];
let productMasterImage = [];
const master_size = await SendAjaxGet('api/master/master-stone/master-stone-size?page=1&perpage=10');
const resp_master_size =  master_size.data;
console.log(master_size)
// let data = await JSON.parse(resp.data);
let master_size_data = [...resp_master_size.data];
 insertOption("stone_group",data);

 // Run Funtion Upload Nultiple image
 multipleImage('img_upload_wrapper','image-upload-preview',productMasterImage,'images/icons/image_upload.png');


function checkRequireDataForGenStoneCode(currentParent){
    const stone_group_val = currentParent.find('select#stone_group').val();
    const stone_name_val = currentParent.find('select#stone_name').val();
    const stone_shape_val = currentParent.find('select#stone_shape').val();
    const stone_cutting_val = currentParent.find('select#stone_cutting').val();
    const data_arr_val = [stone_group_val,stone_name_val,stone_shape_val,stone_cutting_val]
    let checkStatus = true;
    for(let i=0;  i<data_arr_val.length ; i++){
        if(data_arr_val[i]==null||data_arr_val[i]==""){
            checkStatus =  false;
        }else{
            checkStatus =  true;
        }
    }
    return checkStatus;
}



 //modal
 jQuery('#MasterProductModal').modal()
.find('.required_select').each(function(){
    $(this).change(async function(e){
     let parentelm =   $(this).parents('.product_master_general_info');
     let stone_group_val = parentelm.find('select#stone_group').val();
     let stone_name_val = parentelm.find('select#stone_name').val();
     let stone_shape_val = parentelm.find('select#stone_shape').val();
     let stone_cutting_val = parentelm.find('select#stone_cutting').val();
   
    e.stopPropagation();
    e.preventDefault();
    if(checkRequireDataForGenStoneCode($(this).parents('.product_master_general_info'))===true){
        console.log(stone_group_val);
     console.log(stone_name_val);
     console.log(stone_shape_val);
     console.log(stone_cutting_val);
        const genaratedProductCode = await SendAjaxPost('/api/product-master/product-master-stone/genarate-stone-code',{
 stone_group : stone_group_val,
     stone_name : stone_name_val,
     stone_shape : stone_shape_val,
     stone_cutting : stone_cutting_val
        });
        parentelm.find('.stone_code').val(genaratedProductCode.data);
    }
})
})
.parents('#MasterProductModal').find('.product_master_info tr').each(function(k){
    e.preventDefault();
    e.stopPropagation();
    let row = $(this);
    let curentVal;
    row.find('.std_unit_price').on('change',function(e){
        e.stopPropagation();
        e.preventDefault();
        $('.std_weight_label').text($(this).val());
    });
    // For Group Reindex
    row.find('.product_info_group').focusin(function(e){
        e.stopPropagation();
        e.preventDefault();
         curentVal = $(this).val();

    });
    row.find('.product_info_group').focusout(function(e){
        e.stopPropagation();
        e.preventDefault();
        if(curentVal!=$(this).val()){
            let table = $(this).parents('table');
        let currentRow = $(this).parents('tr');

        var trElementsQuery = table.find('tr[' + 'group' + '="' + $(this).val() + '"]');
        currentRow.attr("group",$(this).val());
        if(trElementsQuery.length>0){
            console.log('yy')
        let cloneRow = currentRow.clone(true,true);
        currentRow.remove();

        cloneRow.insertAfter(trElementsQuery.eq(trElementsQuery.length-1));
        }
        }



        // $table.find('tr').each(function(){

        // })
    })
});
 
 insertOption("product_info_size",master_size_data)

 

$('#stone_group').on('change',async function(e){
        e.preventDefault();
        e.stopPropagation();
                const stone_name = await SendAjaxGet('api/master/master-stone/master-stone-name/'+e.target.value);
        const stone_shape = await SendAjaxGet('api/master/master-stone/master-stone-shape?page=1&perpage=100');
        const stone_color = await SendAjaxGet('api/master/master-stone/master-stone-color?page=1&perpage=100');
        const stone_clarity = await SendAjaxGet('api/master/master-stone/master-stone-clarity?page=1&perpage=100');
        const stone_cutting = await SendAjaxGet('api/master/master-stone/master-stone-cutting?page=1&perpage=100');
        const stone_certificate_type = await SendAjaxGet('api/master/master-stone/master-certificate-type?page=1&perpage=100');


        const stone_name_resp =  stone_name.data;
        const stone_shape_resp =  stone_shape.data;
        const stone_color_resp =  stone_color.data;
        const stone_clarity_resp =  stone_clarity.data;
        const stone_cutting_resp =  stone_cutting.data;
        const stone_certificate_type_resp =  stone_certificate_type.data;
    // let data = await JSON.parse(resp.data);
    let stone_name_data = [...stone_name_resp.data];
    let stone_shape_data = [...stone_shape_resp.data];
    let stone_color_data = [...stone_color_resp.data];
    let stone_clarity_data = [...stone_clarity_resp.data];
    let stone_cutting_data = [...stone_cutting_resp.data];
    let stone_certificate_type_data = [...stone_certificate_type_resp.data];




    console.log(stone_name_data);
    clearOption("stone_name",'Stone Name')
    insertOption("stone_name",stone_name_data)
    insertOption("stone_shape",stone_shape_data)
    insertOption("stone_color",stone_color_data)
    insertOption("stone_clarity",stone_clarity_data)
    insertOption("stone_cutting",stone_cutting_data)
    insertOption("master_certificate_type",stone_certificate_type_data)



      });

    
 });
// End of Create Product Master

//Edit Product Master


jQuery("#mastertable").on('click','.edit_list_item', async function(e){
    e.stopPropagation();
                e.preventDefault();

    jQuery('#MasterProductModal').modal()
.find('.required_select').each(function(){
    $(this).change(async function(e){
     let parentelm =   $(this).parents('.product_master_general_info');
     let stone_group_val = parentelm.find('select#stone_group').val();
     let stone_name_val = parentelm.find('select#stone_name').val();
     let stone_shape_val = parentelm.find('select#stone_shape').val();
     let stone_cutting_val = parentelm.find('select#stone_cutting').val();
   
    e.stopPropagation();
    e.preventDefault();
    if(checkRequireDataForGenStoneCode($(this).parents('.product_master_general_info'))===true){
        console.log(stone_group_val);
     console.log(stone_name_val);
     console.log(stone_shape_val);
     console.log(stone_cutting_val);
        const genaratedProductCode = await SendAjaxPost('/api/product-master/product-master-stone/genarate-stone-code',{
 stone_group : stone_group_val,
     stone_name : stone_name_val,
     stone_shape : stone_shape_val,
     stone_cutting : stone_cutting_val
        });
        parentelm.find('.stone_code').val(genaratedProductCode.data);
    }
})
})

});


//End of Edit Product Master


 $('.radio_check').on('click',function(e){
    
        e.stopPropagation();
        let parent = $(this).parents('.radio_div_wrp');

        if(parent.hasClass('toggle_self')==true){
            parent.find('.radio_check').toggleClass('checked');
            parent.find('.radio_checkbox').attr( 'checked', !parent.find('.radio_checkbox').prop("checked"));
            
        }else{
            parent.find('.radio_div_group').each(function(){
                $(this).find('.radio_check').removeClass('checked');         

            });
            $(this).toggleClass('checked');

           const statuscheck = $(this).parent('.radio_div_group').find('.radio_checkbox').attr( 'checked', 'checked' );
            productStoneData.setStatus = statuscheck.val();
           
        }
    });
    $('.suggest_id_check').on('click',async function(e){
        e.stopPropagation();
        let stone_group = "";
        let stone_name = "";
        let stone_shape = "";



        let parent = $(this).parents('.suggest_id_block');
        $(this).parent('.suggest_id_wrp').find('.suggest_id_block').each(function(){
            $(this).find('.suggest_id_check').removeClass('checked');
        });
        
       
        $(this).toggleClass('checked');
        $('.stone_code').attr("readonly",!$('.stone_code').prop("readonly"))

        const stoneCode = await SendAjaxGet('/api/product-master/genarate-stone-code/');



    });
    

 </script>
 <script src="{{URL::asset('js/helpers/product_master/product_group_helper.js')}}"></script>

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

