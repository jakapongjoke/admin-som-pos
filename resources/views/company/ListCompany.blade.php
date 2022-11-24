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
                  <li>Company</li>
                  <li class="active">List Company</li>

                </ul>
            </div>
            <div class="col-6"> 
                <div class="action-box">
                    <ul class="list-unstyled">
                    
                      <li><a href="add-company"><button class="create"><i class="fas fa-plus"></i> Add </button></a></li>
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
        <h2 class="page-header h-line-after">Company List</h2>
        <div class="card-body">
   
        <table id="list" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  </tbody>
        </table>
                 
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
  $(function () {

    $('#list').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });
  });
    </script>
  @endsection
@endsection
