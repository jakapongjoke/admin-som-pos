<select class="form-control  @isset($CustomClass){{$CustomClass}} @endisset" name="@isset($SelectName){{$SelectName}}@endisset" > 

<option value="">
@isset($TextOption){{ $TextOption }}@endisset
</option>

    @for($i=$startnum;$i<$num;$i++)
        <option value="{{$i}}">{{$i+1}}</option>
    @endfor
</select>