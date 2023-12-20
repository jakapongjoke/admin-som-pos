
<!-- Modal -->
<div class="modal fade" id="MasterBaseMetalModal" tabindex="-1" role="dialog" aria-labelledby="MasterMetalModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CREATE BASE METAL MASTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form">

        <div class="form-group row">
    <label for="name" class="col-sm-3 col-form-label">Name <span style="color:red;">*</span></label>
       <div class="col-sm-9">
      <input type="text" class="form-control master_name" id="name" name="master_name" placeholder="Name" required>

      <input type="hidden" class="master_type" id="master_type" name="master_type" value="master_base_metal" >
       </div>
     </div>          
     
 


        <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Description</label>
       <div class="col-sm-9">
      <textarea class="form-control master_description" id="master_description" name="master_description">
      </textarea>
       </div>
     </div>

     <div class="form-group row">
    <label for="master_price" class="col-sm-3 col-form-label">Price <span style="color:red;">*</span></label>
       <div class="col-sm-9">
        <div class="price_block">
          <div class="price_value" contenteditable="true">1000</div>
          <div class="price_currency">THB</div>
<!--               
            <input type="text" class="form-control price_input master_price" id="name" name="master_price"  required> -->

        </div>

       </div>
     </div>


     <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Status</label>
    <div class="col-sm-9">
      @component('components.modal.form.RadioStatus',['custom_class'=>'status'])

      @endcomponent
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
