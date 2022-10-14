<html>
 
    @include('layouts.head')
    @include('layouts.header')
   
    <body class="hold-transition sidebar-mini layout-fixed som-pos">
    <div class="wrapper">

    @auth
          <div class="container-fluid box-panel">
          <div class="row">
            <div class="col-2 no-gutter">
            @include('layouts.sidebar')


            </div>
            <div class="col-10 no-gutter">
            @yield('content')
            </div>

            </div>
            </div>
    @endauth
    
    @guest
    <div class="row">
          <div class="container">
          @yield('content')

        </div>
     </div>
    @endguest
      
</div>
    </body>
    @include('layouts.footer')
   
    
</html>