@auth


<header class="header_login">
<div class="container-fluid">
        <div class="row">

            <div class="col-md-8">
             <img src="{{asset('images/logo.png')}}" class="logo">
            </div>
            <div class="col-md-4">
            <div class="user-box">
                <nav class="main-header navbar">
    <!-- Left navbar links -->


    <!-- Right navbar links -->
    <ul class="navbar-nav">
   

      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">
            <span style="color:black">Hello</span> {{Auth::guard('company_users')->user()->username}}</span>
        </a>  
        <a href="/logout" class="logout">
          <i class="fa fa-power-off"></i>
        </a>
      </li>
 
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

      </ul>
                    </div>

                    <div class="lang-box">
                    <input type="checkbox" onText="ddd" class="lang" name="lang-checkbox" checked >

                    </div>
              
            
            </div>
        </div>
    </div>
</header>
@endauth
 
@guest

<header class="header_login">
        <div class="container-fluid">
          <div class="row-fluid">
              <div class="col-md-12">
                <img src="{{asset('images/logopos.png')}}" class="logo">
              </div>
          </div>
        </div>
</header>
@endguest

