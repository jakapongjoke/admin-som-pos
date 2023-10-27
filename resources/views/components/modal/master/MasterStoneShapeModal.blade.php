
<!-- Modal -->
<div class="modal fade" id="MasterStoneShapeModal" tabindex="-1" role="dialog" aria-labelledby="MasterStoneShapeModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CREATE STONE SHAPE MASTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form">
        <input type="hidden" class="form-control master_type" id="master_type" name="master_type" value="master_stone_shape"  >
        <div class="form-group row">
    <label for="name" class="col-sm-3 col-form-label">Name</label>
       <div class="col-sm-9">
      <input type="text" class="form-control master_name" id="name" name="master_name" placeholder="Name" required>
       </div>
     </div>          
        <div class="form-group row">
    <label for="code" class="col-sm-3 col-form-label">Code</label>
       <div class="col-sm-9">
      <input type="text" class="form-control master_code" name="master_code" id="code" placeholder="code" required>
       </div>
     </div>  
 


        <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Description</label>
       <div class="col-sm-9">
      <textarea class="form-control master_description" id="description" name="description">
      </textarea>
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
