<div class="table_wrp">
<div class="table_header">
    <div class="search_area">
      <select>
        <option>1</option>
      </select>
      <input type="text" class="form-control item_search" name="item_search">
    </div>
    
    <div class="control_area">
      <ul class="list-unstyled export_setting">
        <li class="export_print">
          <img src="/images/icons/printing-2.png" class="img_icon">
        </li>
        <li class="setting">
        <img src="/images/icons/setting.png" class="img_icon">

        </li>
        <li class="create">
        <button type="button">+Create</button>
        </li>
      </div>
      
    </div>

<div class="table_list">

<table id="mastertable" class="table">
  
                  <thead>
                  <tr>
                    @foreach ($data['key_field'] as $heading)
                    <th>{{$heading}}</th>
                    @endforeach
                    @if($data['status_field']==true)
      
                    <th>Status</th>
                    @endif
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data['masterdata'] as $masterdata)
                  <tr>
                    <td><input type="checkbox" name="master_list_check" class="form-check-input" value="{{$masterdata->id}}"></td>
                    <td>{{$masterdata->id}}</td>
                    <td>{{$masterdata->master_code}}</td>
                    <td>{{$masterdata->s}}</td>
                    <td> jj bb</td>
                    <td>Xyz@hotmail.com</td>
                    <td>superadmin</td>
                    <td>12/12/2022</td>
                    @if($data['status_field']==true)

                    <td>
                      <div class="list-action-box">
                    <input type="checkbox" onText="ddd" class="lang" name="active-checkbox" checked >

                    </div>

                  </td>
                  @endif
                  </tr>
                  @endforeach
                  
                  
                  </tfoot>
</table>


</div>


</div>
