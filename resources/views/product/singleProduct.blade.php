@extends('layouts.app')
@section('content')

<div class="container">

    <div class=" border shadow bg-white rounded p-3 row">
      @foreach($products as $product)
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-3">
            <!----product image 364x370 ------->
                <img class="img-responsive border shadow bg-white  rounded p-3" src="/images/product_page364x370/bearing.jpg" alt="">
                <h5 class="mt-3 {{$product->Stocked_Chicago_IL="b" ? 'text-success' : 'text-danger'}}">Inventory: {{$product->Stocked_Chicago_IL ? 'Chicago, Illinois' : ' Currently Out of Stock'}}</h5>
                <br>
        </div>
        <div class="border rounded shadow bg-white  p-3 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-3">
        <p>{{$product->brand_id}}</p>
        <h3>{{$product->part_number}}</h3>
            <br>
            <h4>{{$product->item_description}}</h4>
            <br>
            <h3>${{$product->list_price}}</h3>
        <p>Standard Package Quantity: {{$product->std_package_quantity}}/ea</p>
            <br>
       
            
            <form action="">
                <input class="form-control shadow bg-light rounded border" type="text" name="" id="" value="1"><span><p class="mt-2">Quantity</p></span>
                <button class="btn btn-success mb-3">Add to Cart</button>
            </form>
            <p>Min order: Number/each/box</p>
        
            <br>
            <hr>
            <div class=" shadow bg-light rounded border">
                    <p class="shadow text-center mt-1">Easy Navigation:</p>
            <ul class="list-inline text-center mt-3">
               
                    <li class="list-inline-item mr-3 "><a href="#productDetails"><h5>Product Details </h5></a></li>
                    <li class="list-inline-item mr-3"> <a href="#specs"><h5>Specifications </h5></a></li>@auth
                    <li class="list-inline-item"> <a href=""><h5>Add Custom Part Number</h5></a></li>@endauth
                  </ul></div>
                  <hr>
        </div>
    </div>
<br><hr>

<br>






<!-----start of the product details section----->
<div id="productDetails"></div><br><br><br>
<div class="text-center container p-3 shadow bg-light rounded border" >
        <h1>Product Details</h1><br>
        <p>{{$product->item_description}}</p>
        <hr>
        <br>
</div>


<!--------------end of the product details section------>

<!---start of the specifccations section----->
<div id="specs"></div><br><br><br>
<div class="text-center container p-3 col-6 shadow bg-light rounded border">
    <h3>Specifications</h3><br>
   
   
    <table class="table">


            <thead class="thead-dark">
              <tr>
                <th scope="col">Weight</th>
              </tr>
            </thead>

            <tbody>
              <tr>
              <th scope="row">{{$product->item_weight}}lbs</th>
              </tr>
            </tbody>


            <thead class="thead-dark">
                    <tr>
                      <th scope="col">Length</th>
                    </tr>
                  </thead>
      
                  <tbody>
                    <tr>
                    <th scope="row">{{$product->item_length}}"</th>
                    </tr>
                  </tbody>


                  <thead class="thead-dark">
                        <tr>
                          <th scope="col">Width</th>
                        </tr>
                      </thead>
          
                      <tbody>
                        <tr>
                          <th scope="row">{{$product->item_width}}"</th>
                        </tr>
                      </tbody>


          </table>
          
</div>@endforeach
<hr><br><br><br>

<!----End of the specifcations table---->


<!---start of the alternate products section----->
<div class="shadow bg-light rounded border row"><div class="col-12">
<h1 class="text-center p-3" id="alternateProducts">Alternate Products</h1></div>

<ul class="list-inline text-center col-12 ">
        <li class="list-inline-item p-3 shadow bg-light rounded border m-1"><img src="/images/products_small/114-8220-1_28.jpg" alt=""></li>
        <li class="list-inline-item p-3 shadow bg-light rounded border m-1"><img src="/images/products_small/114-8220-1_28.jpg" alt=""></li>
        <li class="list-inline-item p-3 shadow bg-light rounded border m-1"><img src="/images/products_small/114-8220-1_28.jpg" alt=""> </li>
        <li class="list-inline-item p-3 shadow bg-light rounded border m-1"><img src="/images/products_small/114-8220-1_28.jpg" alt=""> </li>
        
      </ul>
</div> 
</div>
<hr><br>
<!-----------end of the alternate products section------>


    

   
    
  
@endsection