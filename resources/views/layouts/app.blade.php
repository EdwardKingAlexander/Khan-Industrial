<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('/resources/js/product.js')}}" defer></script>
    <script src="{{asset('/public/js/custom.js')}}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
   
    <div id="app">
        <!----------------------------------Start of navbar------------------------------------------->  
       @include('partials.navbar.guestNavbar')
       @include('partials.navbar.authNavbar')
        <!----------------------------------End of navbar------------------------------------------->




            <!-------------Start of search bar-------------------->

          
            <div id="search_bar" class="ml-3 mt-3 mb-0">
         
              @include('partials.forms.search')
            </div>
              <!--------------End  of  search bar------------------->


  

        <main class="py-4">
            @include('partials.messages')
                          <!-----breadcrumbs----------->
                         @include('partials.modules.breadcrumb')
            @yield('content')
            







        </main>
    </div>
  
    @include('partials.modules.subscribe')
    @include('partials.navbar.bottom_navbar')
      <!--------------Start of Footer------------------->
    @include('partials.footer')
    <!--------------End of Footer------------------->
    @yield('scripts')
</body>
</html>
