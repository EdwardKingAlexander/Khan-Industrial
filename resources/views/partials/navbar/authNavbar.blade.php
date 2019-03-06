@auth
<nav id="navBarMaster" class="sticky-top navbar navbar-expand-md navbar-light navbar-laravel">
           
        <!---------Start of navbar container ----->
         <div  class="container-fluid">


             <!--------- Navbar Brand------------>
             <a class="navbar-brand" href="{{ url('/') }}">
                Khan Industrial Supply LLC
             </a> 
               
             <!---------Toggle/collapgs button ------------>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <!-- Left Side Of Navbar -->
                 <ul class="navbar-nav mr-auto">
                       
                 </ul>

                 <!-- Right Side Of Navbar -->
                 <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                    <a class="{{Request::is('/product') ? 'active' : '' }} nav-link" href="/">Products</a>
                                </li>
                                <li class="nav-item">
                                        <a class=" {{Request::is('/services') ? 'active' : '' }} nav-link" href="{{ url('/services') }}">Services</a>
                                    </li>
                                   
                                <li class="nav-item ">
                                    <a class="nav-link {{Request::is('/community') ? 'active' : '' }}" href="{{ url('/community') }}/">Community <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                        <a class="{{Request::is('/contact') ? 'active' : '' }} nav-link" href="{{ url('/contact') }}">Contact</a>
                                    </li>
                               
                          
                            <li class="nav-item ml-2">
                                    <a class="{{Request::is('store/cart') ? 'active' : '' }} nav-link" href="{{ url('/cart') }}"><i class="fas fa-cart-plus"></i> Cart</a>
                                </li>
                            
                 </ul>
                </div>
               
            </div>
           
        </nav>
<nav>
        <li class="btn btn-outline-primary float-right mr-3 mt-3 nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>


                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item" href="{{ url('/home') }}">My Account</a>
                <a class="dropdown-item " href="{{ url('/order_history') }}">Order History</a>
                <a class="dropdown-item" href="{{ url('/reports') }}">Invoices & Reports</a>
                <a class="dropdown-item" href="{{ url('/settings') }}">Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
</nav>

@endauth