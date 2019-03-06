@include('layouts.adminLayout.admin_header')
<body>
   
    <div id="app">
            <nav class="  justify-content-center navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
                    <a class="navbar-brand" href="#">Admin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown1">
                      <ul class="navbar-nav">
                        


                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inventory Control
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{url('/admin/add-category')}}">Add Category</a>
                            <a class="dropdown-item" href="{{url('/admin/add-sub-category')}}">Add Subcategory</a>
                            <a class="dropdown-item" href="{{url('/admin/add-product')}}">Add Product</a>
                           
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  User Management
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="{{url('/admin/roles-managerment')}}">Roles and Permissions</a>
                                <a class="dropdown-item" href="{{url('/admin/user-managerment')}}">User Management</a>
                                  <a class="dropdown-item" href="{{url('/admin/reports')}}">Reports</a>
                                </div>
                              </li>
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Event Manager
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </li>

                                  <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Shipping
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                      </li>

                                      <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Point of Sale
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                              <a class="dropdown-item" href="#">Create an Order</a>
                                              <a class="dropdown-item" href="#">Create a Return</a>
                                              <a class="dropdown-item" href="#">Create a Quote</a>
                                              <a class="dropdown-item" href="#">Search for a Quote</a>
                                              <a class="dropdown-item" href="#">Create an Invoice</a>
                                             
                                            </div>
                                          </li>
                                          <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Vendors
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="{{url('/admin/vendors')}}">All Vendors</a>
                                                  <a class="dropdown-item" href="#">Create an Order</a>
                                                  <a class="dropdown-item" href="#">Create a Return</a>
                                                  <a class="dropdown-item" href="#">Create a Quote</a>
                                                  <a class="dropdown-item" href="#">Search for a Quote</a>
                                                  <a class="dropdown-item" href="#">Create an Invoice</a>
                                                  <a class="dropdown-item" href="{{url('/admin/add-vendor')}}">Add Vendor</a>
                                                 
                                                </div>
                                              </li>
                      </ul>
                    </div>
                  </nav>


    


              @yield('content')
              
             

 
    <!--------------End of App div------------------->
    </div>
    @include('layouts.adminLayout.admin_footer')
    @yield('scripts')
</body>
</html>
