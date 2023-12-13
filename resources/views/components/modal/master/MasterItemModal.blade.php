
<!-- Modal -->
<div class="modal fade master_item_modal_style" id="MasterItemModal" tabindex="-1" role="dialog" aria-labelledby="MasterItemModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Item Master</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form" id="single_image_modal_form" enctype="multipart/form-data">
            <div class="form-group row">
            <div class="col-5">

            <div class="form-group row label-top">
            <div class="status-block">
    <label for="description" class="col-sm-12 col-form-label">Status</label>
      @component('components.modal.form.RadioStatus',['custom_class'=>'status'])

      @endcomponent
    </div>  
    <div class="img_upload_wrapper">
                    <div class="image-upload-preview">
                        <img src="{{URL::asset('images/icons/image_upload.png')}}"
                            class="w-100 h-100" alt="">
                    </div>
                    <input type="file" id="image-input" class="d-none" name="image-input">
                    <label for="image-input" class="add-image-btn">Add Image</label>
                </div>
     </div>
            </div>
            <div class="col-7">
            <div class="form-group row">
    <label for="name" class="col-sm-3 col-form-label">Name</label>
       <div class="col-sm-9">
      <input type="text" class="form-control gray_input master_name" id="master_name" name="master_name" placeholder="Name" required>
       </div>
     </div>          
        <div class="form-group row">
    <label for="code" class="col-sm-3 col-form-label">Code</label>
       <div class="col-sm-9">
      <input type="text" class="form-control gray_input master_code" name="master_code" id="master_code" placeholder="code" required>
       </div>
     </div>  
       


        <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Description</label>
       <div class="col-sm-9">
      <textarea class="form-control description master_description" id="master_description" name="master_description" placeholder="Master Item desctiption"></textarea>
       </div>
     </div>
     
            </div>
          </div>
       



      
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary save">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
     window.addEventListener('DOMContentLoaded',  () => {
            // Initialize an array to store image URLs
            let imageUrls = [];
        let count = 0;

        // Listen for file input change events on all image upload inputs
        $('#image-input').on('change', function () {
      
            const input = this;
            const files = input.files;
            const reader = new FileReader();
            reader.onload = function (e) {

            }

        });

        // Listen for delete button click events on all uploaded images
        $('.img_upload_wrapper').on('click', '.delete-image-btn', function () {
            // Get the index of the clicked delete button
            const index = $(this).parent().index();

            // Remove the corresponding image from the preview
            $(this).parent().empty();

            // Remove the corresponding URL from the imageUrls array
            //const deletedImageUrl = imageUrls[index].shift();
            //alert(`Image at index ${index} (${deletedImageUrl}) has been deleted.`);

            if (imageUrls[index].length === 0) {
                imageUrls[index] = null;
            }
        });
    });
</script>