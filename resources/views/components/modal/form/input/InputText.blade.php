<label for="{{$ClassName}}" class="block col-form-label">
        
        {{$LabelText}}
        
        @if($required===true)
        <span style='color:red;'>*</span>
        @endif
    </label>

    <div class="block">
  <input type="email" class="form-control {{$ClassName}}" id="{{$ClassName}}" name="{{$ClassName}}" placeholder="{{$PlaceHolder}}"   @isset($TextOption) {{$custominline}} @endisset required >
  </div> 


