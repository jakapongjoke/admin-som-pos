
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
      <input type="text" class="form-control master_name" id="master_name" name="master_name" placeholder="Name" required>
       </div>
     </div>          
        <div class="form-group row">
    <label for="code" class="col-sm-3 col-form-label">Code</label>
       <div class="col-sm-9">
      <input type="text" class="form-control master_code" name="master_code" id="master_code" placeholder="code" required>
       </div>
     </div>  
 


        <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Description</label>
       <div class="col-sm-9">
      <textarea class="form-control master_description" id="master_description" name="desctiption">
      </textarea>
       </div>
     </div>
     
     
     <div class="form-group row">
    <label for="code" class="col-sm-3 col-form-label">Formula</label>

       <div class="col-sm-9 formula_block">


       <div class="wrapper-items formula_list_item">


            <div class="form-group row" id="formula-row-header">
              <div class="col-sm-4">Base Metal</div>
              <div class="col-sm-4">Price</div>
              <div class="col-sm-2">%</div>
              <div class="col-sm-2"></div>
            </div>

            
            <div class="form-group row formula-row" id="formula-row" itemkey="1">
      
                <div class="col-sm-4 ">
                    <div class="formula_list_block">

                          <div class="select_fomula">
                              <select class="form-control master_formula base_metal" id="base_metal"  name="master_formula[][base_metal]">
                                  <option value="">Select</option>
                            
                              </select>
                          
                          </div>


                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="formula_list_block price_formula">

                      <div class="price_wrapper">
        <div class="price_block">
          <div class="formula_price_value_display" id="price_value_display" contenteditable="true">
            <span class="span_placeholder">0</span></div>
          <input class="formula_price_value"  type="hidden" name="master_formula[][price]" id="price_value">
          
          <div class="price_currency">THB /g</div>
        </div>
        </div>



                    </div>
                </div>
                
                <div class="col-sm-2 ">
                    <div class="formula_list_block">

                          <div class="percent_fomula">

                          <div class="percent_block">
          <div class="percent_value_display" id="percent_value_display" contenteditable="true">
            <span class="span_placeholder">0</span></div>
          <input class="percent_value"  type="hidden" name="master_formula[][percent_value]" id="percent_value">
          
          <div class="percent_label">%</div>

        </div>
                          
                          </div>


                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="formula_list_block">

                      <div class="action_formula">
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
   
            <div class="row" id="formula-summarize">
              <div class="col-md-9 text-alert-area">
                
              </div>
              <div class="col-md-2 text-summarize-alert">
                <span class="percent_total_label">Total</span>
                <span class="percent_total_number">0</span>
                <span class="percent_text_label">%</span>

              </div>
          </div>


        </div>
     
      
      </div>
       
     </div>  

      <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Price</label>
       <div class="col-sm-9">
        <div class="price_calculator_block">
        <div class="radio_div_wrp master_metal_price_block">


<input type="hidden" name="master_price_value" id ="master_price_value" class="radio_checkbox master_price_value" value="active">

  <div class="radio_div_group">
              <div class="radio_check checked">
                <input type="checkbox" name="master_price" class="master_price radio_checkbox" value="auto_price" checked="checked">
              </div>
              <div class="radio_label">
                  Auto Price
              </div>
              <div class="master_price_block">
              <div class="price_wrapper">
        <div class="price_block">
          <div class="price_value_display auto_price_value_display" id="price_value_display" ><span class="span_placeholder">0</span></div>
          <input class="master_price_auto"  type="hidden" name="master_price_auto" id="price_value">
          
          <div class="price_currency">THB /g</div>
        </div>
        <div class="refresh-metal-price">
        <i class="fas fa-sync-alt"></i>        </div>
        </div>

              </div>
        </div>
   
        <div class="radio_div_group">
              <div class="radio_check">
                <input type="checkbox" name="master_price_type" class="master_price_type radio_checkbox" value="manual_price">
              </div>
              <div class="radio_label">
              Manual Price
              </div>
              
              <div class="master_price_block">
              <div class="price_wrapper">

        <div class="price_block">
          <div class="price_value_display" id="price_value_display" contenteditable="true"></div>
          <input class="price_value"  type="hidden" name="master_price_manual" id="price_value">
          
          <div class="price_currency">THB /g</div>
        </div>


        </div>

              </div>
        </div>
   

</div>

        </div>
      </textarea>
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
