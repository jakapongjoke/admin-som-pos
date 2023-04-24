
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
        <form class="modal_form product_master_form">

<div class="row">
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
                                  <select class="form-control" name="stone_group" id="stone_group" class="stone_group">
                                          <option value="">Stone Group </option>
                                      </select>     
                                 </div>
                                <div class="col-6">
                                <label class="col-form-label">Stone Name <span style="color:red">*<span></label>
                                    <select class="form-control" name="stone_name" class="stone_name" id="stone_name">
                                    <option value="">Stone Name</option>

                                    </select>
                                </div>
                            </div>

                            

                            

                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Stone Shape  <span style="color:red">*<span></label>
                                <select class="form-control" name="stone_shape" class="stone_shape" id="stone_shape">
                                        <option value="">Stone Shape</option>
                                    </select>                                </div>
                                <div class="col-6">
                                <label class="col-form-label">Stone Color </label>
                                    <select class="form-control" name="stone_color" class="stone_color" id="stone_color">
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
                                    <select class="form-control" name="stone_cutting" class="stone_cutting" id="stone_cutting">
                                        <option value="">Cutting</option>
                                    </select>
                                </div>
                            </div>

                            


                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Certificate Type </label>
                                <select class="form-control" name="master_certificate_type" class="master_certificate_type" id="master_certificate_type">
                                        <option value="">Certificate Type</option>
                                    </select>                               
                                   </div>
                                <div class="col-6">
                                <label class="col-form-label">Certificate Image</label>
                                    <input type="file" name="cert_image_file" id="cert_image_file"/>

                                    <label for="cert_image_file" class="cert_image_button"><span class="icon_add_image_plus"><img src="{{URL::asset('images/icons/add.png')}}"></span>
                                    <h4>Add Image</h4>
                                  </label>
                                </div>
                            </div>

                            

                            

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="textarea1"
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
                        <tr>
                            <td>
                            <input type="text" class="form-control product_info_group" name="product_info[][group]"></div>

                            </td>
                            <td>
                                <div class="product_info_price">
                                    <div class="form-control" contenteditable="true"></div>
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
                       
                        </tr>

                    </tbody>

                </table>
            </div>

        

    </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<script>
const ProductGroupInfo = {
  list: [
                  {
                    group:"",
                    parent:"",
                    sale_price:"",
                    unit_sale:"cts",
                    size:"",
                    std_weight:"cts",
                    weight_unit:"",
                  }
                ],
  get getList()  {
    return this.list;
  },
  set updateList(list){
  
     this.list.push(list);
  }

}
function updateList(CurrentRow,data){

  CurrentRow.insertAfter()
}


  window.addEventListener('DOMContentLoaded',  () => {
      let $ = jQuery;




 $('#product-master-image').on('change',function(e){
  e.preventDefault();
        e.stopPropagation();
  const imageUpload = multipleImageUploader(e)
  if(imageUpload.length>=3){
    $(this).prop("disabled", true);
  }
 });

jQuery( ".create" ).bind( "myCustomEvent", function( e, data ) {
  if(!data==false){
    ProductGroupInfo.updateList = data;
    updateList(data.CurrentRow,data.data);

  }
  

});


// $('.product-master-image').on('change',function(e){
//   e.stopPropagation();
//   e.preventDefault();
 
// });


      $('.add_group').on('click',function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('.action_wrp').removeClass('active');

        // $(this).parents('tbody').append($(this).parents('tr').clone(true,true));

        })
      $('.add_size').on('click',function (e) {
        e.preventDefault();
        e.stopPropagation();
        $('.action_wrp').removeClass('active');
        let CurrentRow = $(this).parents('tr');
        let CurrentTBody =  $(this).parents('tbody');

        $( ".create" ).trigger( "myCustomEvent",  {
                      data:{
                                group:CurrentRow.find('.product_info_group'),
                                parent:CurrentRow.find('.product_info_group'),
                                sale_price:CurrentRow.attr('key'),
                                unit_price:CurrentRow.find('.unit_price').val(),
                                size:CurrentRow.find('.product_info_size').val(),
                                std_weight:CurrentRow.find('.std_weight_val').text(),
                                weight_unit:CurrentRow.find('.weight_unit').val(),
                      },

                    CurrentRow:CurrentRow
        } );

      //  let a =  $(this).parents('tr').clone(true,true)
      //  $(this).parents('tbody').append($(this).parents('tr').clone(true,true));

        // a.insertAfter(CurrentRow);
        
     $(this).parents('tr').clone(true,true).insertAfter(CurrentRow).find(".product_info_group").hide().parents('tr').find(".product_info_price").hide();
        
        
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


    });

</script>