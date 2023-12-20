
<!-- Modal -->
<div class="modal fade master_item_modal_style" id="MasterItemSizeModal" tabindex="-1" role="dialog" aria-labelledby="MasterItemModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Item Size Master</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form" id="single_image_modal_form" enctype="multipart/form-data">
            <div class="form-group row">
       
            <div class="col-12">
            <div class="form-group row">
    <label for="name" class="col-sm-3 col-form-label">Name</label>
       <div class="col-sm-9">
      <input type="text" class="form-control gray_input master_name" id="master_name" name="master_name" placeholder="Name" required>
      <input type="hidden" class="master_type" id="master_type" name="master_type" value="master_item_size" >
       </div>
     </div>          
    
          



          


     <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Description</label>
       <div class="col-sm-9">
      <textarea class="form-control description master_description" id="master_description" name="master_description" placeholder="Master Item desctiption"></textarea>
       </div>
     </div>
     
     <div class="form-group row">
    <label for="code" class="col-sm-3 col-form-label">Available for</label>
       <div class="col-sm-9 available_for_block">


       <div class="wrapper-items">
            <div class="form-group row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available_check" id="all-item-radio"
                            value="all_item" checked>
                        <label class="form-check-label" for="all-item-radio">All Item</label>
                    </div>
                </div>
                <div class="col-sm-8"></div>
            </div>



            <div class="form-group row" id="avalible-row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="available_check" id="available-radio"
                            value="selected_item">
                        <label class="form-check-label" for="available-radio">Available for</label>
                    </div>
                </div>
                <div class="col-sm-8 select_avaliable_list_block">
                    <div class="select_avaliable_list">

                        <div class="select_avaliable">
                            <select class="form-control master_available_for" name="master_available_for[]">
                                <option value="">Select</option>
                          
                            </select>
                        
                        </div>

                        <div class="action_avaliable">
                            <div class="d-flex flex-nowrap align-items-center">
                                <div class="delete-row-btn delete-row"><img
                                        src="https://i.postimg.cc/qBYLX9nC/del-btn.png" width="14px" alt=""></div>
                                <div class="btn-add add-row"><img
                                        src="https://i.postimg.cc/GtZxLyrj/add-btn.png" width="26px" alt=""></div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>




        </div>
      
      
      </div>
     </div>  




     <div class="form-group row">
     
                <label for="description" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                        <div class="status-block">
                        @component('components.modal.form.RadioStatus',['custom_class'=>'status'])

                        @endcomponent
                        </div> 
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