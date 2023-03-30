<div class="table_wrp">
<div class="table_header">
<h1>
Stone Product Master
</h1>
    <div class="search_area">
        @component('components.util.SearchList')
        @endcomponent
    </div>
    @component('components.util.ControlArea',["data"=>[
      "modalName"=>'#MasterProductModal'
    ]
  ])
  @endcomponent

      
    </div>

<div class="table_list">

<table id="mastertable" class="table product-master-table">
  
                  <thead>
                  <tr>
                  <th class="heading_no">
                  <input type="checkbox" name="master_list_check_all" class="form-check-input master_list_check_all">
                <span class="list_no"> No.</span>
                </th>
                  <th>Image</th>
                  <th>Stone Code</th>
                  <th>Stone Group</th>
                  <th>Stone</th>
                  <th>Shape</th>
                  <th>Size</th>
                  <th>Price (THB )</th>
                  <th>Description</th>
                  <th>Last Modified Date</th>
                  <th>Status</th>
                  <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data['masterdata'] as $k=>$masterdata)
                  @php
                    $branch = json_decode($masterdata->addional_infomation,true)['branch_location'];
                    
                  @endphp
                  <tr>
                    <td class="master_list_col"><input type="checkbox" name="master_list_check" class="form-check-input" value="{{$masterdata->id}}"><span class="list_no">{{$k+1}}</span></td>
            
                    <td>{{$masterdata->master_name}}</td>
                    <td>{{$masterdata->master_code}}</td>
                    <td>{{$masterdata->master_code}}</td>
                    <td>{{$masterdata->master_code}}</td>
                    <td>{{$masterdata->master_code}}</td>
                    <td>0.5</td>
                    <td>{{$branch}}</td>
                    <td>{{$masterdata->master_description}}</td>
                    <td>{{$masterdata->updated_at}}</td>
                    <td>
                      <div class="list-action-box">
                    <input type="checkbox" onText="ddd" class="lang" name="active-checkbox" checked >
                    </div>
                  </td>
               <td>
                      @component('components.util.ActionButton')
                            <li>
                                <span class="icon"><img src="/images/icons/view_2.png"></span>
                                <span class="text-link" data-id="{{$masterdata->id}}">Preview</span>
                            </li>
                            <li>
                                <span class="icon"><img src="/images/icons/editing-2.png"></span>
                                <span class="text-link" data-id="{{$masterdata->id}}">Edit</span>
                            </li>
                            <li>
                                 <span class="icon"><img src="/images/icons/cancel1.png"></span>
                                <span class="text-link" data-id="{{$masterdata->id}}">Delete</span>
                            </li>
                      @endcomponent
                  </td>
             
                  </tr>
                  @endforeach
                  <tfoot>
                    @include('layouts.customer.table_footer')
                

                  </tfoot>
</table>


</div>


</div>
