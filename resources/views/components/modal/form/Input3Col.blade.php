
            
            <div class="row  p-0 inputs-3-row">

            <div class="col-12">
            <label for="name" class="col-sm-12 col-form-label">Contact Name
                @if($label_heading_required===true)
                 <span style='color:red;'>*</span>
                @endif
                </label>
            </div>
           <div class="col-sm-4">
            <input type="text" class="form-control first_name" id="first_name" name="@isset($input_field_data['input_1']['name']){{$input_field_data['input_1']['name']}}@endisset" placeholder="First Name" required>
           </div>
           <div class="col-sm-4">
            <input type="text" class="form-control middle_name" id="middle_name" name="@isset($input_field_data['input_2']['name']){{$input_field_data['input_2']['name']}}@endisset" placeholder="Middle Name"  maxlength="13">
           </div>
           <div class="col-sm-4">
            <input type="text" class="form-control last_name" id="last_name" name="@isset($input_field_data['input_3']['name']){{$input_field_data['input_3']['name']}}@endisset" placeholder="Last Name"  maxlength="13" required>
           </div>
       
            </div>
   