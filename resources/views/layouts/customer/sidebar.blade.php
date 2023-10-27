@php
use Illuminate\Routing\UrlGenerator;
$request = Request::instance();
@endphp

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

               <li class="nav-item ">
               <a class="nav-link mb-0 pb-2" href="/dashboard">
              <p>
                <span class="pos-menu-icon master-icon icon-single-menu dashboard-icon "></span>
                <span class="menu-text">Dashboard</span>
              </p>
</a>

            
          
          </li>
               <li class="nav-item {{ Request::is('general-infomation') ? 'is-open' : '' }}">
               <a class="nav-link  mb-0 pb-3" href="/general-infomation">
              <p>
                <span class="pos-menu-icon master-icon icon-single-menu general-info-icon "></span>
                <span class="menu-text">General Infomation</span>
              </p>
</a>


          
          </li>
  
          <li class="nav-item">
            <span class="nav-link list_with_sub">
              <p>
              <i class="icon-sub-treemenu-arrow right arrow"></i>

                <span class="pos-menu-icon master-icon"></span>
                <span class="menu-text">Master</span>
              </p>
            </span>


            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">ACCOUNT</h2>

              <li class="nav-item {{ Request::is('master/master-storage') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-storage')}}" class="nav-link ">
                  <p>Storage</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/master-customer') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-customer')}}" class="nav-link ">
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/master-vendor') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-vendor')}}" class="nav-link ">
                  <p>Vendor</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/company-login-account') ? 'active' : '' }}">
                <a href="/company-login-account" class="nav-link ">
                  <p>Login Account</p>
                </a>
              </li>

              </ul>
            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">ITEM</h2>

              <li class="nav-item {{ Request::is('master/master-item') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-item')}}" class="nav-link ">
                  <p>Item</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/master-collection') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-collection')}}" class="nav-link ">
                  <p>Collection</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/master-item-size') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-item-size')}}" class="nav-link ">
                  <p>Item Size</p>
                </a>
              </li>
          

              </ul>
            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">METAL</h2>

              <li class="nav-item {{ Request::is('master/master-base-metal') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-base-metal')}}" class="nav-link ">
                  <p>Base Metal</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/master-metal') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-metal')}}" class="nav-link ">
                  <p>Metal</p>
                </a>
              </li>
         
          

              </ul>
            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">STONE</h2>

              <li class="nav-item {{ Request::is('master/master-stone-group') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-stone-group')}}" class="nav-link ">
                  <p>Stone Group</p>
                </a>
              </li>
              
              <li class="nav-item {{ Request::is('master/master-stone') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-stone')}}" class="nav-link ">
                  <p>Stone</p>
                </a>
              </li>

              <li class="nav-item {{ Request::is('master/master-stone-shape') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-stone-shape')}}" class="nav-link ">
                  <p>Stone Shape</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/master-stone-color') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-stone-color')}}" class="nav-link ">
                  <p>Stone Color</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/master-clarity') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-clarity')}}" class="nav-link ">
                  <p>Clarity</p>
                </a>
              </li>
         
              <li class="nav-item {{ Request::is('master/master-cutting') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-cutting')}}" class="nav-link ">
                  <p>Cutting</p>
                </a>
              </li>
         
              <li class="nav-item {{ Request::is('master/master-stone-size') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-stone-size')}}" class="nav-link ">
                  <p>Stone Size</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('master/master-certificate-type') ? 'active' : '' }}">
                <a href="{{url()->to('master/master-certificate-type')}}" class="nav-link ">
                  <p>Certificate Type</p>
                </a>
              </li>
         
          

              </ul>
          </li>

  
          <li class="nav-item @if(Request::segment(1) == 'product-master') is-opening menu-is-opening menu-open  @endif">
            <span class="nav-link list_with_sub">
              <p>
              <i class="icon-sub-treemenu-arrow right arrow"></i>

                <span class="pos-menu-icon product-master-icon"></span>
                <span class="menu-text">Product Master</span>
              </p>
            </span>


            <ul class="nav nav-treeview ">
              
         

              <li class="nav-item {{ Request::is('product-master/product-master-stone') ? 'active' : '' }}">
                <a href="{{url()->to('product-master/product-master-stone')}}" class="nav-link ">
                  <p>Stone</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('product-master/product-master-component') ? 'active' : '' }}">
                <a href="{{url()->to('product-master/product-master-component')}}" class="nav-link ">
                  <p>Component</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('product-master/product-master-jewelry') ? 'active' : '' }}">
                <a href="{{url()->to('product-master/product-master-jewelry')}}" class="nav-link ">
                  <p>Jewelry</p>
                </a>
              </li>
             

              </ul>
           
          </li>
 


          <li class="nav-item">
            <span class="nav-link list_with_sub">
              <p>
              <i class="icon-sub-treemenu-arrow right arrow"></i>

                <span class="pos-menu-icon master-icon"></span>
                <span class="menu-text">Inventory</span>
              </p>
            </span>


            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">Analysis</h2>

              <li class="nav-item {{ Request::is('inventory/stock-analysis') ? 'active' : '' }}">
                <a href="{{url()->to('inventory/stock-analysis')}}" class="nav-link ">
                  <p>Stock Analysis</p>
                </a>
              </li>
       
              </ul>
            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">Recieve</h2>

              <li class="nav-item {{ Request::is('inventory/recieve') ? 'active' : '' }}">
                <a href="{{url()->to('inventory/stock-recieve')}}" class="nav-link ">
                  <p>Recieve</p>
                </a>
              </li>

              </ul>
            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">Memo</h2>

              <li class="nav-item {{ Request::is('inventory/memo-in') ? 'active' : '' }}">
                <a href="{{url()->to('inventory/memo-in')}}" class="nav-link ">
                  <p>Memo In</p>
                </a>
              </li>
              <li class="nav-item {{ Request::is('inventory/memo-return') ? 'active' : '' }}">
                <a href="{{url()->to('inventory/memo-return')}}" class="nav-link ">
                  <p>Memo Return</p>
                </a>
              </li>
         
          

              </ul>
            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">Purchase</h2>

              <li class="nav-item {{ Request::is('inventory/purchase') ? 'active' : '' }}">
                <a href="{{url()->to('inventory/purchase')}}" class="nav-link ">
                  <p>Purchase</p>
                </a>
              </li>
              
          

              </ul>
            <ul class="nav nav-treeview ">
              
              <h2 class="tree-menu-heading">Service Order</h2>

              <li class="nav-item {{ Request::is('inventory/custom-order') ? 'active' : '' }}">
                <a href="{{url()->to('inventory/custom-order')}}" class="nav-link ">
                  <p>Custom Order</p>
                </a>
              </li>
              
          
              <li class="nav-item {{ Request::is('inventory/repair-order') ? 'active' : '' }}">
                <a href="{{url()->to('inventory/repair-order')}}" class="nav-link ">
                  <p>Repair Order</p>
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