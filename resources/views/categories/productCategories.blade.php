@extends('layouts.app')
@section('content')
<div class="row"><!----start of row div------>
<div class="col-12 ml-3 shadow p-3 container">
  
        
<h1>

 {{$categories->category_name}}
 
</h1>
    <p>{{$categories->description}}</p>
   
</div>
    <div class="mt-3 col-xl-12 col-lg-12 col-md-12 col-sm-6 col-xs-6"><br>
            <h1 class="text-center p-3" id="alternateProducts">Subcategories </h1></div>
    <h1 class="text-center"></h1>
          
              
    <ul class="list-inline text-center col-12 ">
    @foreach($subcategories as $subcategory)


                    
            <li class="list-inline-item p-3 shadow bg-light rounded border m-1"><img src="/images/products_small/114-8220-1_28.jpg" alt=""><br><h3>
                <a href="/category/{{$categories->category_name}}/{{$subcategory->subcategory_name}}">{{$subcategory->subcategory_name}}</a></h3></li>    
                
                 @endforeach
              
                  </ul>

                

                  
            </div> 
    </div>
</div> <!---end of row div---->

   
    
  
@endsection