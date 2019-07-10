@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="col-12 shadow mb-3"><h1 class="m-3 p-3 text-center ">Shopping Cart</h1><h4 class="text-right">Total:</h4><hr></div>
        
        <a class="btn btn-outline-primary mb-4" href="/">Continue Shopping</a>

        
<hr>
            <!-----start of row div----->
        <div class="row shadow mb-3">   
            <!---left side of product div------->
           
            <div class="mt-3 col-6 shadow mb-3">
                <img class="shadow p-2 m-2" src="/images/products_small/115-D55168.jpg" alt="" class="img-responsive">
        
            <h4>Part Number</h4>
                <p>Part Number</p>
                <h5 class="text-success mb-3" >In Stock</h5>
                <h4>Price Each</h4>
            <p>List Price</p>
                <h4>Item Description</h4>
                <p>Item Description</p>
               
          
            </div><!--------end of left side of product div------>
         
            <!----right side of product div------->
            <div class="mt-3 col-6 shadow mb-3">
                  
                    <h4>Quantity</h4>
                    <p>*Minimum Order: 1 ea</p>
                    <form action="">
                        <input class="mb-3 form-control" type="text">

                                <button class="btn btn-outline-primary" >Update Cart</button> 
                    </form>
                    <h4 class="mr-2 mt-3">Subtotal</h4>
                    <p class="mb-3">$5,465.33</p>
                    <form action="">
                <button class="mt-5 mb-2 btn btn-outline-danger">Delete Product From Cart</button>
                    </form>
                        <p>Ships from: SHIPPING with SHIPPING WEIGHT/ea</p>
                </div>
                <!----------end of right side of product div--------->
          

                <div class="row">
                <div class="col-12 mb-3"><hr></div></div>
            


        

                      
                        <div class="shadow mb-3 col-12 text-center border rounded border-success"><h1 class="mt-3">Order Details: </h1>
                            <p>Subtotal: </p>
                            <p>Shipping & Handling*:</p>
                            <p>Estimated Sales Tax: </p>
                            <hr>
                            <h3>Order Total</h3>
                        <h4 class="">$554.25</h4>
                      
                        
                        <form action="">
                                <button class="btn mb-3 mt-3 btn-lg btn-outline-success">Checkout</button>
                            </form>
                            <strong>Shipping will be calculated at checkout</strong>
                    </div>
                       
       
        </div> <!-----end of row div----->
    </div>



    

   
    
  
@endsection