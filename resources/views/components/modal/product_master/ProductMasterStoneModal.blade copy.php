
<!-- Modal -->
<div class="modal fade product_master_modal_style" id="MasterProductModal" tabindex="-1" role="dialog" aria-labelledby="MasterItemModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Stone Product Master</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form product_master_form" enctype="multipart/form-data">

<div class="row product_genaral_info">
<div class="col-4 image_upload_column">
        <div class="form-group row label-top">


        <div class="status-block">
        <label for="description" class="col-sm-12 col-form-label">Status</label>
          @component('components.modal.form.RadioStatus',['custom_class'=>'status'])

          @endcomponent
        </div>  
        <div class="img_upload_wrapper">
          <ul class="multiple_images_addional_list">

          </ul>
                        <div class="image-upload-preview">
                            <!-- <img src="{{URL::asset('images/icons/image_upload.png')}}"
                                class="w-100 h-100" alt=""> -->
                        </div>
                        <input type="file" id="product-master-image" class="d-none product-master-image" multiple>
                        <label for="product-master-image" class="add-image-btn">Add Image</label>
                    </div>
        </div>
</div>
<div class="col-8 product_master_general_info" id="formImage">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group row mb-4">
                            @component('components.util.Code')
                            @endcomponent
                            </div>
                            
                            <div class="form-group row">


                                <div class="col-6">
                                  <label class="col-form-label">Stone Group <span style="color:red">*<span></label>
                                  <select class="form-control stone_group required_select" name="stone_group" id="stone_group" >
                                          <option value="">Stone Group </option>
                                      </select>     
                                 </div>
                                <div class="col-6">
                                <label class="col-form-label">Stone Name <span style="color:red">*<span></label>
                                    <select class="form-control stone_name required_select" name="stone_name" id="stone_name">
                                    <option value="">Stone Name</option>

                                    </select>
                                </div>
                            </div>

                            

                            

                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Stone Shape  <span style="color:red">*<span></label>
                                <select class="form-control stone_shape required_select" name="stone_shape"  id="stone_shape">
                                        <option value="">Stone Shape</option>
                                    </select>                                </div>
                                <div class="col-6">
                                <label class="col-form-label">Stone Color </label>
                                    <select class="form-control stone_color" name="stone_color" id="stone_color">
                                        <option value="">Stone Color</option>
  
                                    </select>
                                </div>
                            </div>

                            


                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Clarity</label>
                                <select class="form-control" name="stone_clarity" class="stone_clarity" id="stone_clarity">
                                        <option value="">Clarity</option>
                                    </select>                                
                                  </div>
                                <div class="col-6">
                                <label class="col-form-label">Cutting<span style="color:red">*<span></label>
                                    <select class="form-control stone_cutting required_select" name="stone_cutting" id="stone_cutting">
                                        <option value="">Cutting</option>
                                    </select>
                                </div>
                            </div>

                            


                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Certificate Type </label>
                                <select class="form-control master_certificate_type" id="master_certificate_type">
                                        <option value="">Certificate Type</option>
                                    </select>                               
                                   </div>
                                <div class="col-6">
                                <label class="col-form-label">Certificate Image</label>
                                    <input type="file" name="cert_image_file" class="cert_image_file" id="cert_image_file"/>

                                    <label for="cert_image_file" class="cert_image_button"><span class="icon_add_image_plus"><img src="{{URL::asset('images/icons/add.png')}}"></span>
                                    <h4>Add Image</h4>
                                  </label>
                                </div>
                            </div>

                            

                            

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control master_detail" name="textarea1"
                                        placeholder="There are many variations of passages"></textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
      </div> 

      <!-- start tab product master info -->  
      <div class="row product_master_info">
      <div class="container mt-5 p-0">

            <div class="tab-pane fade show active" id="pills-stones" role="tabpanel" aria-labelledby="pills-stones-tab">
                <table class="table" id="stoneTable">
                    <thead>
                        <tr>
                            <th>Group</th>
                            <th>Sale Price</th>
                            <th>Size</th>
                            <th>Standard Weight</th>
                            <th>Action</th>
         
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>
                            <input type="text" class="form-control product_info_group" name="product_info[][group]"></div>

                            </td>
                            <td>
                                <div class="product_info_price">
                                    <div class="form-control" contenteditable="true" ></div>
                                    <input type="hidden" class="form-control" name="product_info[][price]">
                                    <select class="form-control currency mb-1 unit_price" name="product_info[][unit_price]">
                                        <option value="cts">cts</option>
                                        <option value="pcs">pcs</option>
                                        <option value="g">g</option>
          
                                    </select>
                                </div>
                            </td>
                            <td>
                            <select class="mb-1 product_info_size" name="product_info[][size]">
                                        <option value="1">s</option>
                                        <option value="2">m</option>
                                        <option value="3">l</option>
          
                                    </select>                            </td>
                          
                            <td>
                                <div class="product_info_weight">
                                    <div class="form-control std_weight_val" name="price" contenteditable="true"></div>
                                    <select class="form-control currency mb-1 weight_unit" name="product_info[]weight_unit">
                                        <option value="cts">cts</option>
                                        <option value="pcs">pcs</option>
          
                                    </select>
                                </div>
                            </td>
                            <td class="action_col">
                              <div class="product_group_action">
                              @component('components.util.ActionButton')
                              <li class="add_group">
                                <span class="icon"><img src="/images/icons/ic_control_point_24px.png"></span>
                                <span class="text-link">New Group</span>
                            </li>
                              <li class="add_size">
                                <span class="icon"><img src="/images/icons/rows-2.png"></span>
                                <span class="text-link">Add Size</span>
                            </li>
                              <li class="edit_group_info">
                                <span class="icon"><img src="/images/icons/editing-2.png"></span>
                                <span class="text-link">Edit</span>
                            </li>
                              <li class="delete_group_info">
                                <span class="icon"><img src="/images/icons/delete.png"></span>
                                <span class="text-link">Delete</span>
                            </li>
                              @endcomponent
                              </div>
                             
                            </td>
                       
                        </tr> -->

                    </tbody>

                </table>
            </div>

        

    </div>
    <div class="save_area">
          <button type="submit" class="btn btn-primary save">Save</button>


            </div>
      </div>
   

      </form>
    </div>
  </div>
</div>
</div>
<script>

    
const productStoneData = { 
  productStoneCode:"",
  productStoneGroup:"",
  productStoneName:"",
  productStoneShape:"",
  productStoneColor:"",
  productStoneClarity:"",
  productStoneCutting:"",
  productStoneCertificate_type:"",
  productStoneImages:[],
  productStoneCertificateImage:[],
  productStoneDescription:"",
  status:"active",
  productGroupInfo : {
  list:[],
}, 
  get getList()  {
    return this.productGroupInfo.list;
  },
  set setList(data)  {
    this.productGroupInfo.list.splice(0,this.productGroupInfo.list.length);

      this.productGroupInfo.list.push(data)
      return this.productGroupInfo.list;
  },
  get productStoneData() {
    return this.ProductStoneData;
  },
  set productStoneId(stoneID){
    console.log('setter run')
    
    return stoneID;

  } ,
  get getStatus() {
    return this.status;
  },
  set setStatus(val){
    return this.status = val;

  } ,


  get productCertImageList() {
    return this.productStoneCertificateImage;
  },
  get productStoneImageList() {
    return this.productStoneImages;
  },

  getProductStoneImage(key) {
    return this.data.find((item) => item.id === id);

    return this.productStoneImages[k];
  },

  set setProductStoneImage(imageFile){
     this.productStoneImages.push({
        key:0,
        imageFile:imageFile
    })


  },

  set setCertImage(imageFile){
     this.productStoneCertificateImage.push({
        key:0,
        imageFile:imageFile
    })


  },
  removeImage(idx){
    this.productStoneImages = this.productStoneImages.filter((item) => item.key !== idx);

  },
  removeCertImage(idx){
    this.productStoneCertificateImage = this.productStoneCertificateImage.filter((item) => item.key !== idx);

  }
}
function updateList(CurrentRow,data){

  CurrentRow.insertAfter()
}


  window.addEventListener('DOMContentLoaded',  () => {
      let $ = jQuery;

      ProductGroupList(jQuery('#stoneTable'),[])




// $('.product-master-image').on('change',function(e){
//   e.stopPropagation();
//   e.preventDefault();
 
// });


  jQuery('.action_button').on('click',function(e){
    
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

    

 

$('#cert_image_file').on('change',function(e){
    e.stopPropagation();
e.preventDefault();

// แสดงผลรูปภาพที่อัพโหลด                listimg += "<input type='file' style='display:none' class='list_uploaded_image' name='list_uploaded_image[]' value=\""+imgListData[i]+"\"/>"

if(e.target.files[0]){
  let certFile = e.target.files[0];
let imgfilecert = Image(getImageUploadUrl(certFile) ,'master_certificate_img_output','master_certificate_img_output_block');


// console.log(e.target.files[0]);
$(this).parent('.col-6').find('.col-form-label').after(imgfilecert);
//  $(this).parent('.col-6').find('.col-form-label').after(imgfilecert).parent('.col-6').find('.master_certificate_img_output_block').append(v);

 jQuery('.master_certificate_img_output_block').append("<div class=\"delete_cert_image\">X</div>");




 


  
  const newCertFile = new File([certFile], certFile.name, {
  type: certFile.type,
  lastModified: certFile.lastModified,
});


productStoneData.setCertImage = newCertFile
  if(productStoneData.productCertImageList.length>=1){
    $('.cert_image_button').hide();
  }
  
//  $('.cert_image_button').hide();
 $('.delete_cert_image').on('click',function(e){
        e.stopPropagation();
e.preventDefault();
        $(this).parent('.master_certificate_img_output_block').remove();
        $(this).remove();
        productStoneData.removeCertImage(0);

        if(productStoneData.productCertImageList.length>=1){
    $('.cert_image_button').hide();

  }else{
    $('.cert_image_button').show();
  }
    });
   
}
});
         
 $('#product-master-image').on('change',function(e){

  e.preventDefault();
        e.stopPropagation();
  const imageUpload = multipleImageUploader(e)

 const file = e.target.files[0];
  
  const newFile = new File([file], file.name, {
  type: file.type,
  lastModified: file.lastModified,
});



  if(imageUpload.length>=3){
    $(this).prop("disabled", true);
  }else{
    productStoneData.setProductStoneImage = newFile;
  }

 });

// submit data



      $('.save').on('click',async function (e) {
        e.preventDefault();
        e.stopPropagation();
        //


        var formData = new FormData();
        let buttonElm  =  $(this);
        var productMasterForm =  $(this).parents('.product_master_form');

      // formData.append('stone_code',$('.stone_code').val());
      // formData.append('stone_group',$('.stone_group').val());
      // formData.append('stone_name',$('.stone_name').val());
      // formData.append('stone_shape',$('.stone_shape').val());
      // formData.append('stone_color',$('.stone_color').val());
      // formData.append('stone_clarity',$('.stone_clarity').val());
      // formData.append('stone_cutting',$('.stone_cutting').val());
      // formData.append('master_certificate_type',$('.master_certificate_type').val());
      // formData.append('master_detail',$('.master_detail').val());

      // for(let i =0 ; i<productStoneData.productStoneImages.length ; i++){
      //   console.log(productStoneData.productStoneImages[i]);
      //   formData.append('list_uploaded_image_data[]',productStoneData.productStoneImages[i].imageFile);

      // }
      // $('.list_uploaded_image').each(function(k){
      //   console.log($(this))

      //   formData.append('list_uploaded_image_data',$(this).val());

      // })
      let listData = [];
      const l = $(this).parents('.product_master_info').find('tr[group]').length-1;


      // ลูป product group ด้านล่าง และเก็บเข้าตัวแปล
      $(this).parents('.product_master_info').find('tr[group]').each(function(key){
    
        let currentInfoList = $(this);

        let std_weight_number = parseFloat(currentInfoList.find('.standard_weight').eq(0).text());
        let sale_price_number = parseFloat(currentInfoList.find('.sale_price').eq(0).text());
        let std_weight_number_fix =  std_weight_number.toFixed(2);
        let sale_price_number_fix =  sale_price_number.toFixed(2);
          if(key==l){
            listData.push( {
                    group:currentInfoList.find('.product_info_group').val(),
                    sale_price:sale_price_number_fix,
                    unit_sale:currentInfoList.find('.unit_price').val(),
                    size:currentInfoList.find('.product_info_size').val(),
                    std_weight:std_weight_number_fix,
                    weight_unit:currentInfoList.find('.std_unit_price').val()
          })
            productStoneData.setList =listData;

          }else{
            listData.push( {
                    group:currentInfoList.find('.product_info_group').val(),
                    sale_price:sale_price_number_fix,
                    unit_sale:currentInfoList.find('.unit_price').val(),
                    size:currentInfoList.find('.product_info_size').val(),
                    std_weight:std_weight_number_fix,
                    weight_unit:currentInfoList.find('.std_unit_price').val()
          })
          }
         
        });


  
        const add = await SendAjaxPost('api/product-master/product-master-stone',{
          productMasterGeneralData :{
            stone_code:productMasterForm.find('.stone_code').val(),
            stone_group:productMasterForm.find('.stone_group').val(),
            stone_name:productMasterForm.find('.stone_name').val(),
            stone_shape:productMasterForm.find('.stone_shape').val(),
            stone_color:productMasterForm.find('.stone_color').val(),
            stone_clarity:productMasterForm.find('.stone_clarity').val(),
            stone_cutting:productMasterForm.find('.stone_cutting').val(),
            master_certificate_type:productMasterForm.find('.master_certificate_type').val(),
            master_detail:productMasterForm.find('.master_detail').val(),
            status:productStoneData.getStatus,
          },
          productInfoGroupData:productStoneData.getList,
          masterImage:[...productStoneData.productStoneImageList],
          masterCertImage:[...productStoneData.productCertImageList]
        },
        {
          
  headers: {
    // 'Accept': 'application/json',
    'Content-Type': 'multipart/form-data'

  },
  processData: false, // Prevent jQuery from processing the data
      contentType: false, // Set the content type to false as FormData will set it correctly
}
        
        );


       });
    });

</script>