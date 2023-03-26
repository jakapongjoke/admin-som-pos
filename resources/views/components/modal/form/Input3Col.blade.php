
            
            <div class="row  p-0 inputs-3-row">

            <div class="col-12">
            <label for="name" class="col-sm-12 col-form-label">Contact Name
                @if($label_heading_required===true)
                 <span style='color:red;'>*</span>
                @endif
                </label>
            </div>
           <div class="col-sm-4">
            <input type="text" class="form-control first_name" id="first_name" name="card_id" placeholder="First Name"  maxlength="13" required>
           </div>
           <div class="col-sm-4">
            <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name"  maxlength="13" required>
           </div>
           <div class="col-sm-4">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"  maxlength="13" required>
           </div>
       
            </div>
   