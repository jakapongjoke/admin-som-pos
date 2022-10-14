@extends('layouts.main')
 
@section('head')
@section('title', 'SOM POS JEWEAL ADMIN TEAM')
@endsection


@section('content')
    <div class="row">
        <div class="container-fluid">
        <h2 class="page-header">USER</h2>
        <div class="row">
          <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <div class="search-filter-box">
              <div class="form-group text-search">

              <select>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              </div>
              <div class="form-group text-search">
              <input type="text" class="form-control">
              <button class="btn search-button">
                <i class="fas fa-search"></i>
              </button>

              </div>

              </div>
            </div>
            <div class="col-6"> 
                <div class="action-box">
                    <ul class="list-unstyled">
                      <li class="icon"><img src="{{asset('images/icons/printing-2.png')}}"></li>
                      <li class="icon"><img  src="{{asset('images/icons/setting.png')}}"></li>
                      <li><button class="create"><i class="fas fa-plus"></i>Create</button></li>
                    </ul>
                </div>

            </div>
</div>
          </div>
        </div>
          
        </div>

    </div>
    <section class="content-header">
      <div class="container-fluid">
     
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
           
              <!-- /.card-header -->
              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Company</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Expired Date</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Jeweal </td>
                    <td>Admin 1</td>
                    <td> jj bb</td>
                    <td>Xyz@hotmail.com</td>
                    <td>superadmin</td>
                    <td>12/12/2022</td>
                    <td>
                      <div class="list-action-box">
                    <input type="checkbox" onText="ddd" class="lang" name="active-checkbox" checked >

                    </div>
                  </td>
                  </tr>
                  
                  
                  </tfoot>
                </table>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection

@section("footer")
  @section('footer_script')
    <script>
   jQuery(document).ready(function($){

    $("[name='active-checkbox']").bootstrapSwitch({
        on: 'active',
			off: 'inactive	',
			onClass: 'on',
			offClass: 'off'
       });
   })

   
   
   

    </script>
  @endsection
@endsection
