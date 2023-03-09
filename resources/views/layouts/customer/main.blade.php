<html>
 
    @include('layouts.customer.head')
    @if( Auth::guard('company_users')->check())
    @include('layouts.customer.header')

    <body class="hold-transition sidebar-mini layout-fixed som-pos">
    <div class="wrapper">

       <div class="container-fluid box-panel">
          <div class="row">
            
            <div class="col-2 no-gutter">
            @include('layouts.customer.sidebar')


            </div>

            <div class="col-10 no-gutter">
            @yield('content')
            </div>

            </div>
         </div>

    


      
</div>
    </body>
    @endif
    @include('layouts.customer.footer')
   
    
</html>