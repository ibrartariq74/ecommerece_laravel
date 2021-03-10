<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  
    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          
        <li class="nav-item has-treeview menu-open "  >
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link active">
                
                <i class="fa fa-home nav-icon " aria-hidden="true"></i>
                <p>Dashboard</p>
              </a>
            </li>
            
            
          </ul>

        </li>
          <li class="nav-item has-treeview menu-open "  >
          
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link ">
                <i class="fa fa-calendar nav-icon  "></i>
                  <p>Category</p>
                </a>
              </li>
              
              
            </ul>

          </li>

               <!-- /.product-menu -->

          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link ">
            <i class="fa fa-shopping-cart nav-icon " aria-hidden="true"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('products.index')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('stock.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('products.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Product</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open "  >
          
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('customer.index')}}" class="nav-link ">
                <i class="fa fa-users nav-icon"></i>
                  <p>Customer</p>
                </a>
              </li>
              
              
            </ul>

          </li>
          <li class="nav-item has-treeview menu-open "  >
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('order.index')}}" class="nav-link ">
              <i class="fa fa-bus nav-icon " aria-hidden="true"></i>
                <p>Orders</p>
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
