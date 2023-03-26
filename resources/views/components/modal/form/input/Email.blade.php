        <label for="email" class="block col-form-label">
        
            Email
            
            @if($required===true)
            <span style='color:red;'>*</span>
            @endif
        </label>

        <div class="block">
      <input type="email" class="form-control email" id="email" name="email" placeholder="email"  maxlength="13"  @isset($TextOption) {{$custominline}} @endisset required >
      </div> 


