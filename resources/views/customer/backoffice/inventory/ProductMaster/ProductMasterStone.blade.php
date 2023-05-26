@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Item')
@endsection

@section('content')

    @include('components.tables.ProductMaster.ProductMasterStoneTable')
    @include('components.modal.ProductMaster.ProductMasterStoneModal')
    
@endsection
@section('footer_script')

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
<script src="{{URL::asset('js/helpers/files_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/product_master/product_group_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/list_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/api_helper.js')}}"></script>
<script>
    const dataField  = {
        heading:['No.', 'Image', 'Stone Code', 'Stone Group', 'Stone', 'Shape', 'Size', 'Price (THB)', 'Description', 'Last Modified Date', 'Active', 'Action'],
        colData:["master_image","product_stone_code","stone_group","stone_name","stone_shape","size","price","master_description","updated_at"],
        activeStatusButton:true,
        action:{
            preview:true,
            edit:true,
            copy:true,
            delete:true
        }
        
    }
    document.addEventListener('DOMContentLoaded', async function() {
        document.getElementById("#mastertable");

        const data = await fetchdata('/api/product-master/product-master-stone/10/1');

      
       console.log(stone_group);
        // console.log(JSON.parse(JSON.stringify(product_master_list_resp)))
       let MountedDom = jQuery("#mastertable").html(headerTable(["No.","Image","Stone Code","Stone Group","Stone","Shape","Size","Price (THB)","Description",'Last Modified Date',"Active","Action"]));
       const product_master_list_resp = await data.list_data;
   
       for (const { id,stone_group, product_stone_code,stone_name,stone_shape,master_description,updated_date } of product_master_list_resp) {
            const product_stone_group_name = await fetchdata('/api/master/master-name-by-id/'+stone_group);
            const product_stone_name = await fetchdata('/api/master/master-name-by-id/'+stone_name);
            const product_stone_shape= await fetchdata('/api/master/master-name-by-id/'+stone_shape);
            const product_stone_description = master_description;
            const product_stone_updated_date = updated_date;
            const product_size_price = await fetchdata('/api/product-master-group-info/get-size-sale-price/'+id);
            const listobj = [{
                product_stone_group_name:product_stone_group_name.data,
                product_stone_name:product_stone_name.data,
                product_stone_shape:product_stone_shape.data,
                product_stone_size:product_size_price.size_name,
                product_stone_price:product_size_price.sale_price,
                product_stone_description:product_stone_description,
                product_stone_updated_date:product_stone_updated_date

            }];
            let product_master_list =[];
            product_master_list.push(listobj) ;
            console.log(product_master_list);
        }
      
       MountedDom.find('tr').click(function(e){
        console.log('wowow');
       });
    })
 
</script>

<script>
jQuery('.create').on('click',async function(e){
e.stopPropagation();
e.preventDefault();
// console.log(window.location.host);
// console.log( window.location.origin);
// console.log(window.location.pathname.split( '/' ));
let stone_group = await SendAjaxGet('api/master/master-stone/master-stone-group');
const resp =  stone_group.data;
// let data = await JSON.parse(resp.data);
let data = [...resp.data];
let productMasterImage = [];
const master_size = await SendAjaxGet('api/master/master-stone/master-stone-size/');
const resp_master_size =  stone_group.data;
// let data = await JSON.parse(resp.data);
let master_size_data = [...resp_master_size.data];
 insertOption("stone_group",data);
 multipleImage('img_upload_wrapper','image-upload-preview',productMasterImage,'images/icons/image_upload.png');

 jQuery('#MasterProductModal').modal()
 insertOption("product_info_size",master_size_data)



$('#cert_image_file').on('change',function(e){
    e.stopPropagation();
e.preventDefault();
 $(this).parent('.col-6').find('.col-form-label').after(Image(getImageUploadUrl(e) ,'master_certificate_img_output','master_certificate_img_output_block'));
 jQuery('.master_certificate_img_output_block').append("<div class=\"delete_cert_image\">X</div>");
 $('.cert_image_button').hide();
 $('.delete_cert_image').on('click',function(e){
        e.stopPropagation();
e.preventDefault();
        $(this).parent('.master_certificate_img_output_block').remove();
        $(this).remove();
        $('.cert_image_button').show();
    });
    });

$('#stone_group').on('change',async function(e){
        e.preventDefault();
        e.stopPropagation();
                const stone_name = await SendAjaxGet('api/master/master-stone/master-stone-name/'+e.target.value);
        const stone_shape = await SendAjaxGet('api/master/master-stone/master-stone-shape/');
        const stone_color = await SendAjaxGet('api/master/master-stone/master-stone-color/');
        const stone_clarity = await SendAjaxGet('api/master/master-stone/master-stone-clarity/');
        const stone_cutting = await SendAjaxGet('api/master/master-stone/master-stone-cutting/');
        const stone_certificate_type = await SendAjaxGet('api/master/master-stone/master-certificate-type/');


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
    let stone_cutting_data = [...stone_shape_resp.data];
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


 </script>
@endsection

