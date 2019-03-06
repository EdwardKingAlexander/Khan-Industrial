@extends('layouts.app')
@section('content')

    

@include('partials.modules.welcome')
<!-----slide end--> 

 @include('partials.jumbotron')

    
   
         
                <!-------Product category sections---------->
                @include('partials.modules.product_category_section')
         


    
           
  
                @include('partials.modules.featured_brands')
    
@endsection