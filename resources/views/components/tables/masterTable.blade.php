<div class="table_wrp">
<div class="table_header">
    <div class="search_area">
      <select>
        <option>1</option>
      </select>
      <input type="text" class="form-control item_search" name="item_search">
      <button type="button" class="btn table_search_button" >
        <img src="/images/icons/search.jpg" width="15">
      </button>
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
        <button type="button" data-toggle="modal" data-target="#MasterStorageModal">+Create</button>
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
                  @php
                    $branch = json_decode($masterdata->addional_infomation,true)['branch_location'];
                    echo $branch;
                  @endphp
                  <tr>
                    <td class="master_list_col"><input type="checkbox" name="master_list_check" class="form-check-input" value="{{$masterdata->id}}"></td>
                    <td>{{$masterdata->id}}</td>
                    <td>{{$masterdata->master_code}}</td>
                    <td>{{$masterdata->master_description}}</td>
                  
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
