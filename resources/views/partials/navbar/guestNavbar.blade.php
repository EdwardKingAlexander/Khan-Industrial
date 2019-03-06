@guest
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
                                    <a class="{{Request::is('store/product') ? 'active' : '' }} nav-link" href="{{ url('/') }}">Products</a>
                                </li>
                                <li class="nav-item">
                                        <a class=" {{Request::is('store/services') ? 'active' : '' }} nav-link" href="{{ url('/services') }}">Services</a>
                                    </li>
                                    
                                <li class="nav-item ">
                                    <a class="nav-link {{Request::is('/community') ? 'active' : '' }}" href="{{ url('/community') }}">Community <span class="sr-only">(current)</span></a>
                                </li>
                               
                      
                          
                                <li class="nav-item">
                                        <a class="{{Request::is('users/cart') ? 'active' : '' }} nav-link" href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                    
                                    <li class="nav-item ml-2">
                                            <a class="{{Request::is('users/cart') ? 'active' : '' }} nav-link" href="{{ url('/cart') }}"> <i class="fas fa-cart-plus"></i> Cart</a>
                                        </li>
                                  
                                
                 </ul>
                </div>
               
            </div>
           
        </nav>
<nav>
      
        <div class="float-right mr-3 mt-3">
                <a class="mr-1 mt-2 ml-3 btn btn-outline-primary" href="{{ route('login') }}">Login</a>
                <a class="mr-3 mt-2 btn btn-outline-primary" href="{{ route('register') }}">Register</a>
            
        </div>
  
</nav>

        
        @endguest

    