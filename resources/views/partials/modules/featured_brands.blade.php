
<div class="row  p-3 shadow bg-light rounded border  " id="brands">
        <div class="col-12 mb-2 text-center"><h1>Featured Brands</h1><hr></div>
        
   
     
</div>


<div class="row  p-3 shadow bg-light rounded border ">

        <div class="text-center col-xl-12 col-lg-12  col-md-12 col-sm-12 col-xs-6 mt-2">
        <ul class="list-inline">
        @foreach($brands as $brand)
        <li class="list-inline-item"><a href=""><img class="rounded mt-3 ml-3 mr-3" src="/images/card100x180/pexels-photo-1187987 (1).jpeg" alt=""><h3 class="mt-2">{{$brand->brand_name}}</h3></a></li>
           @endforeach
        </ul>
        
           
            </div>    
           
           
                             
 
</div>

<div class="text-center p-2 shadow bg-light rounded border mt-3 container">
<a class="mt-1 btn btn-outline-primary" href="{{url('/brands')}}">See All Brands</a>
</div>

        


<br><br><hr><br><br>