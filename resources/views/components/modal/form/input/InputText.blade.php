<label for="{{$ClassName}}" class="block col-form-label">
        
        {{$LabelText}}
        
        @if($required===true)
        <span style='color:red;'>*</span>
        @endif
    </label>
 

    <div class="block">


  <input type="text" class="form-control @isset($ClassName){{$ClassName}}@endisset" id="@isset($ClassName){{$ClassName}}@endisset" name="  @isset($Inputname){{$Inputname}}@endisset" placeholder="@isset($PlaceHolder){{$PlaceHolder}}@endisset"   @isset($TextOption) {{$custominline}} @endisset required >
  </div> 


