@extends('layouts.UserLayout')
 
@section('head')
@section('title', 'SOM POS JEWEAL ADMIN TEAM')
@endsection


@section('content')
    <div class="row pt-4">
    <div class="container-fluid">
          <div class="row">
            <div class="col-6">
                <ul class="pl-0 page-label" >
                  <li>User</li>
                  <li class="active">Create User</li>

                </ul>
            </div>
            <div class="col-6"> 
                <div class="action-box">
                    <ul class="list-unstyled">
                    
                      <li><button  class="create reset-btn">Cancel</button></li>
                      <li><button class="create">Create</button></li>
                    </ul>
                </div>

            </div>
</div>
          </div>

    </div>

<div class="card">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <form>

        <div class="row">
        <h2 class="page-header h-line-after">User Information</h2>
        <div class="card-body">
                  <div class="form-group row">
                    <label for="company" class="col-sm-2 col-form-label">Company *</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="company" placeholder="Company">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="level" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                    <div class="form-group">
                        <select class="form-control">
                          <option>Admin</option>
                          <option>Sales</option>
                          <option>Manager</option>

                        </select>
                      </div>
                    </div>
                  </div>
                 
                </div>
          <!-- /.col -->
        </div>

        </form>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

</div>


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
