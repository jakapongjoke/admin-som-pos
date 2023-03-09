<a class="nav-link hide_menu" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
</a>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">


    <!-- Brand Logo -->
    <div class="display-menu-area">
    <a href="#" class="show_menu"  data-widget="pushmenu" role="button">
    <i class="fas fa-bars"></i>
    </a>

    </div>
 

    <!-- Sidebar -->
    <div class="sidebar ">
        
      <!-- Sidebar Menu -->
      <nav class="mt-2 user_nav">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item menu-open">
            <a href="/staff-dashboard" class="nav-link">
              <p>
              <i class="fas fa-solid fa-chart-pie"></i> Dashboard
              </p>
            </a>
          
          </li>
  
          <li class="nav-item">
            <a href="/company-master-storage" class="nav-link">
              <p>
              <i class="fas fa-angle-right right"></i>

                <i class="fas fa-crown"></i> Master
              </p>
            </a>


            <ul class="nav nav-treeview">
              <h2>ACCOUNT</h2>
              <li class="nav-item {{ Request::is('company-master-storage') ? 'active' : '' }}">
                <a href="/company-master-storage" class="nav-link ">
                  <p>Storage</p>
                </a>
              </li>

              </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>