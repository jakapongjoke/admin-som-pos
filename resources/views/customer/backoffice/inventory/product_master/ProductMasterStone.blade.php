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
<script src="{{URL::asset('js/helpers/util.js')}}"></script>
<script>
/* setting */



/* */
    //* List product master
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
            delete:true
        
        },
        idField:"id"
        },
   
        
    }

    jQuery('#MasterProductModal').on('hide.bs.modal', function () {
 window.location.reload(true);
})

    document.addEventListener('DOMContentLoaded', async function() {
        // get product stone master list
        const data = await fetchdata('/api/product-master/product-master-stone/list/10/1');

      
        // console.log(JSON.parse(JSON.stringify(product_master_list_resp)))
       let MountedDom = jQuery("#mastertable").html(headerTable(dataField.heading,dataField.options));
       console.log(data);

       const product_master_list_resp = await data.list_data;
       const listobj = [...product_master_list_resp];
    
       MountedDom.append(listTableData(listobj,dataField.colData,dataField.options))
       MountedDom.on('click','.action_button',function(e){
    
        e.preventDefault();
        e.stopPropagation();
      
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


// #Create Product Master
jQuery('.create').on('click',async function(e){
e.stopPropagation();
e.preventDefault();

jQuery('#MasterProductModal').attr('modalType','post')



if($('.master_certificate_img_output_block').length>0){
$('.master_certificate_img_output_block').remove();
$('#cert_image_file').val("");

}


// console.log(window.location.host);
// console.log( window.location.origin);
// console.log(window.location.pathname.split( '/' ));



// Get stone group
let stone_group = await SendAjaxGet('api/master/master-stone/master-stone-group?page=1&perpage=10');
const resp =  stone_group.data;
let data = [...resp.data];
let productMasterImage = [];

// Get master size สำหรับเตรียมไว้ใช้ที่ product group
const master_size = await SendAjaxGet('api/master/master-stone/master-stone-size?page=1&perpage=500');
const resp_master_size =  master_size.data;
let master_size_data = [...resp_master_size.data];

 insertOption("stone_group",data,"Stone Group");

 // Run Funtion Upload Multiple image
 multipleImage('img_upload_wrapper','image-upload-preview',productMasterImage,'images/icons/image_upload.png');




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
 
 insertOption("product_info_size",master_size_data,"Size")

 

$('#stone_group').on('change',async function(e){
        e.preventDefault();
        e.stopPropagation();

        // ดึงข้อมูล 8 master type โดยใช้ stone group id มาทำ select box
        const master_data = await SendAjaxGet('api/master/get-master-info-product-stone/'+e.target.value+'?page=1&perpage=100');

                const stone_name = await SendAjaxGet('api/master/master-stone/master-stone-name/'+e.target.value+'?page=1&perpage=100');
        const stone_shape = await SendAjaxGet('api/master/master-stone/master-stone-shape?page=1&perpage=100');
        const stone_color = await SendAjaxGet('api/master/master-stone/master-stone-color?page=1&perpage=100');
        const stone_clarity = await SendAjaxGet('api/master/master-stone/master-stone-clarity?page=1&perpage=100');
        const stone_cutting = await SendAjaxGet('api/master/master-stone/master-stone-cutting?page=1&perpage=100');
        const stone_certificate_type = await SendAjaxGet('api/master/master-stone/master-certificate-type?page=1&perpage=1');


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


    insertOption("stone_name",stone_name_data,"Stone Name")
    insertOption("stone_shape",stone_shape_data,"Stone Shape")
    insertOption("stone_color",stone_color_data,"Stone Color")
    insertOption("stone_clarity",stone_clarity_data,"Stone Clarity")
    insertOption("stone_cutting",stone_cutting_data,"Stone Cutting")
    insertOption("master_certificate_type",stone_certificate_type_data,"Certificate Type")



      });

       
 });
// End of Create Product Master

//Edit Product Master list | edit list item
jQuery("#mastertable").on('click','.edit_list_item', async function(e){
    e.stopPropagation();
                e.preventDefault();
                modalConfig.setFormMethod = 'put';

jQuery('.modal').attr('modaltype','put');

   const id = jQuery(this).parents('tr').find('.master_id').attr('value').toString();             
        
    const product_master_stone =  await SendAjaxGet('api/product-master/product-master-stone/get-by-id/'+id);


    const resp =  await product_master_stone.data;
let {productMasterData} = await resp.master_data;

console.log(resp);
let {location} = productMasterData;
let {productMasterInfo} = await resp.master_data;





let productMasterImage = [];
productMasterData.master_image.map(function(v){
    productMasterImage.push(v.location)
});
// productMasterInfo.map(function(v){
//     console.log(v)
// })


    let master_info = await SendAjaxGet('api/master/get-master-info-by-stone-group/'+productMasterData.stone_group+'?page=1&perpage=500');


    const resp_master_info =  await master_info.data.master_info;


    ProductGroupList(jQuery('#stoneTable'),productMasterInfo)


   
    await insertOption("stone_group",resp_master_info.master_stone_group,"Stone Group");
    await insertOption("stone_name",resp_master_info.master_stone_name,"Stone Name")
    await insertOption("stone_shape",resp_master_info.master_stone_shape,"Stone Shape")
    await insertOption("stone_color",resp_master_info.master_stone_color,"Stone Color")
   
    await insertOption("stone_clarity",resp_master_info.master_stone_clarity,"Stone Clarity")
    await insertOption("stone_cutting",resp_master_info.master_stone_cutting,"Stone Cutting")
    await insertOption("master_certificate_type",resp_master_info.master_certificate_type,"Certificate Type")

// // Get master size สำหรับเตรียมไว้ใช้ที่ product group
// const master_size = await SendAjaxGet('api/master/master-stone/master-stone-size?page=1&perpage=100');



// const resp_master_size =  master_size.data;
// let master_size_data = [...resp_master_size.data];

jQuery('.product_info_size').each(function(){
 let elem = $(this);
 let currsize = elem.parent('.p_info_size').children('.info_size_val').val();
 insertOption(elem,resp_master_info.master_size,"Size",currsize,"currentdom")
});

jQuery('.std_unit_price').each(function(){
 let elem = $(this);
 let currunit = elem.parent('.p_standard_weight_wrp').children('.std_unit_price_val').val();
 elem.val(currunit);
});


jQuery('#MasterProductModal').modal()


// console.log('productMasterData');
 // Run Funtion Upload Multiple image
 multipleImage('img_upload_wrapper','image-upload-preview',productMasterImage,'images/icons/image_upload.png','edit');

if(productMasterData.master_certificate_image[0]!=""){
    console.log(productMasterData.master_certificate_image[0].location);
    jQuery('.cert_image_button').before('<img src="" class="current_cert_img">').parent('div').find('.current_cert_img').attr('src',window.location.protocol+"//"+window.location.host+getPathFromUrl(productMasterData.master_certificate_image[0].location));
   jQuery('.cert_image_button h4').text('change');
}




 mapFillInput(jQuery("#MasterProductModal"),{
                "stone_code":productMasterData.product_stone_code,
                "master_id":productMasterData.id,
                "stone_group":productMasterData.stone_group,
                "stone_name":productMasterData.stone_name,
                "stone_shape":productMasterData.stone_shape,
                "stone_color":productMasterData.stone_color,
                "stone_clarity":productMasterData.stone_clarity,
                "stone_cutting":productMasterData.stone_cutting,
                "master_certificate_type":productMasterData.master_certificate,
                "master_detail":productMasterData.master_description,
             
            })



});

//End of Edit Product Master



function checkModalFormRequired(){
    jQuery("#MasterProductModal").find('.required').each(function(){
    $(this).change(async function(e){
     let parentelm =   $(this).parents('.product_master_general_info');
     let stone_group_val = parentelm.find('select#stone_group').val();
     let stone_name_val = parentelm.find('select#stone_name').val();
     let stone_shape_val = parentelm.find('select#stone_shape').val();
     let stone_cutting_val = parentelm.find('select#stone_cutting').val();
   
    if(checkRequireDataForGenStoneCode($(this).parents('.product_master_general_info'))===true){
      
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

}

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
    


  $('.add_group').on('click',function (e) {
 
    e.preventDefault();
    e.stopPropagation();
   let  rowParent = $(this).parents('tr');
    console.log('addgroup')
    let current_key = $(this).parents('.tr').attr('key');
 
    if($(this).parents('.action_wrp').hasClass('active')){
    console.log('active add_group');
    $(this).parents('.action_wrp').removeClass('active')

  }else{
    $(this).parents('.action_wrp').addClass('active')


  }

  if(rowParent.find('.p_info_group input').css('display')=='none'){
     let list = rowParent.clone(true,true);
     list.insertAfter(rowParent).find('.p_info_group input').css('display',"block");

    }else{
      let  list = rowParent.clone(true,true)
       list.insertAfter(rowParent);

    }
    
   
   
    })




  $('.add_size').on('click',function (e) {
    e.preventDefault();
    e.stopPropagation();
    
    $(this).parents('.action_wrp').removeClass('active');
    
    let CurrentRow = $(this).parents('tr');
    let CurrentTBody =  $(this).parents('tbody');
    let group = CurrentRow.attr('group')
  //  let a =  $(this).parents('tr').clone(true,true)
  //  $(this).parents('tbody').append($(this).parents('tr').clone(true,true));

    // a.insertAfter(CurrentRow);
    // $(this).parents('.action_wrp').find('.action_list').toggleClass('show');
    // $(this).parents('.action_wrp').find('.action_list').toggle();
if(group!==""){
$(this).parents('tr').clone(true,true).insertAfter(CurrentRow).find(".product_info_group").hide().parents('tr').find(".product_info_price").hide();

 
actionListInit(CurrentTBody);
}else{
alert('typing group befor add size')
}

    
//  CurrentTBody.children('tr')
//  CurrentRow.find('.product_info_price').hide();
//  CurrentRow.find('.add_group').hide();
  });



  $('.edit_group_info').on('click',function (e) {
    

      e.stopPropagation();
      $('.action_wrp').removeClass('active');


      let elem = $(this).parents('tr');
    
    
      elem.find(".product_info_group").show();
    
   
      
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

