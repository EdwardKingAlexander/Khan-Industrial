@extends('layouts.app')
@section('content')

<div class="row  p-3 shadow bg-light rounded border m-1"><!----start of row div------>
            <div class="mt-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
                    <h1 class="text-center  p-3 shadow bg-light rounded border m-1 mb-3" id="Categories">{{$subcategory->subcategory_name}}</h1></div>

        
       
                    <ul class=" col-8 ">
                    @foreach($orsproducts as $orsproduct)
                         
                           
                    <li class=" p-3 shadow bg-light rounded border m-1"> <a href=""> 
                    <p class='text-success text-right pr-3'>Price: ${{$orsproduct->list_price}}/{{$orsproduct->standard_unit_measure}}</p>
                    <img class='pl-3' src="/images/products_small/114-8220-1_28.jpg" alt=""><br>
                    <h3 class='pl-3'>{{$orsproduct->part_number}}</h3></a> <p class="text-right pr-3">Text on the right</p>
                    <p class='pl-3'>{{$orsproduct->item_description}}</p>
                </li>
                @endforeach
                   
                    </ul>
                          
              
                    </div> 
            </div>
        </div> <!---end of row div---->


@endsection