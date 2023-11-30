<label for="phone" class="block col-form-label">
        
        Phone
        
        @if($required===true)
        <span style='color:red;'>*</span>
        @endif
    </label>

    <div class="block phone-block">
    @component('components.modal.form.input.PhoneCode',["required"=>true])
                @endcomponent         
  <input type="text" class="form-control phone_number" id="phone_number" name="master_infomation[phone_number]" placeholder="Phone Number">
  </div> 


