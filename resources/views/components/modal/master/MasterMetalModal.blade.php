
<!-- Modal -->
<div class="modal fade" id="MasterMetalModal" tabindex="-1" role="dialog" aria-labelledby="MasterMetalModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CREATE METAL MASTER</h5>
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
    <label for="description" class="col-sm-3 col-form-label">Description</label>
       <div class="col-sm-9">
      <textarea class="form-control" id="description" name="desctiption">
      </textarea>
       </div>
     </div>
     
     
     <div class="form-group row">
    <label for="code" class="col-sm-3 col-form-label">Formula</label>

       <div class="col-sm-9 available_for_block">


       <div class="wrapper-items">


            <div class="form-group row" id="formula-row-header">
              <div class="col-sm-4">Base Metal</div>
              <div class="col-sm-4">Price</div>
              <div class="col-sm-2">%</div>
              <div class="col-sm-2"></div>
            </div>
            <div class="form-group row" id="formula-row">
      
                <div class="col-sm-4 ">
                    <div class="formula_list_block">
                      <div class="formula_list">

                          <div class="select_avaliable">
                              <select class="form-control master_formula base_metal" id="base_metal"  name="master_formula[][base_metal]">
                                  <option value="">Select</option>
                            
                              </select>
                          
                          </div>


                      </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="formula_list_block price_formula">
                      <div class="formula_list">

                      <div class="price_wrapper">
        <div class="price_block">
          <div class="price_value_display" id="price_value_display" contenteditable="true">
            <span class="span_placeholder">1,000</span></div>
          <input class="price_value"  type="hidden" name="master_price" id="price_value">
          
          <div class="price_currency">THB</div>
<!--               
            <input type="text" class="form-control price_input master_price" id="name" name="master_price"  required> -->

        </div>
        </div>



                      </div>
                    </div>
                </div>
                
                <div class="col-sm-2 ">
                    <div class="formula_list_block">
                      <div class="formula_list">

                          <div class="select_avaliable">
                              <select class="form-control master_formula" name="master_formula[][]">
                                  <option value="">Select</option>
                            
                              </select>
                          
                          </div>


                      </div>
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="formula_list_block">
                      <div class="formula_list">

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
     </div>  


     <div class="form-group row">
    <label for="status" class="col-sm-3 col-form-label">Status</label>
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
