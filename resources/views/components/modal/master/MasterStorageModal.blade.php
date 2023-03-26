
<!-- Modal -->
<div class="modal fade" id="MasterStorageModal" tabindex="-1" role="dialog" aria-labelledby="MasterStorageModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Storage Master</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form">
          
        <div class="form-group row">
    <label for="name" class="col-sm-3 col-form-label">Name</label>
       <div class="col-sm-9">
      <input type="text" class="form-control" id="name" name="master_name" placeholder="Name" required>
       </div>
     </div>          
        <div class="form-group row">
    <label for="code" class="col-sm-3 col-form-label">Code</label>
       <div class="col-sm-9">
      <input type="text" class="form-control" name="master_code" id="code" placeholder="code" required>
       </div>
     </div>  
          
        <div class="form-group row">
    <label for="branch_location" class="col-sm-3 col-form-label">Branch Location</label>
       <div class="col-sm-9">
      <select class="form-control" id="branch_location"  name="branch_location" >
          <option value="1">Siam Paragon</option>
      </select>
       </div>
     </div>


        <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Description</label>
       <div class="col-sm-9">
      <textarea class="form-control" id="description" name="desctiption">
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
