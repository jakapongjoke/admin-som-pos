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
                    <td>{{$masterdata->master_name}}</td>
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
