@extends('layouts.app')
@section('content')
    <div class="container"><!---- start of the main container div---->


    <h1 class="p-3">Checkout</h1>    
   <div class="row shadow"><!---- start of the row div------->
       
    <!---- first column of first row------>
    <div class="col shadow p-3"><h3>Check Out As A Guest</h3>
       
        <h5 class="mt-3">If you do not wish to create an account, you may checkout as a guest.</h5>
        <br>
        <h5>We use your email only to send you information regarding your orders.</h5><br>
         
        <form action="" class="mt-3">
                <input type="email" class="form-control" placeholder="Email">   <hr>
                <button class="mt-3 btn btn-outline-primary">Continue</button> </form>
    </div>
    <!----- end of first column of first row----->



            <!---- second column of first row------>
       <div class="col shadow p-3"><h3>I Already Have an Account</h3>
        
        <h5 class="mt-3">If you already have an account, please enter your login information here and continue.</h5>
       <br><br><br>
       <form action="" class="mt-3">
                <input class="form-control" type="email">
                <input class="mt-3 form-control" type="password">
                <div class="text-center"><br><hr class="mt-2">
                <button class=" btn btn-outline-primary">Login</button>
                <a href="" ><p class="mt-2">Forgot your password?</p></a></div>
            </form>
    </div>
       <!----- end of second column of first row----->




           <!---- third column of first row------>
        <div class="col shadow p-3"><h3>Register With Khan Industrial</h3>
            <h5 class="mt-3">Register with Khan Industrial Supply for even more convenient benefits such as:</h5>
            <ul class="mt-3">
                <li>Order History</li>
                <li>Community Projects Funding</li>
                <li>Easy Invoicing</li>
                <li>Order Templates</li>
                <li>Custom Part Number Storage</li>
                <li>It Makes You Cool</li>
            </ul>
            <div class="text-center">
                <hr>
            <button class="btn btn-outline-primary">Register</button>
            </div>
        </div>
        <!----- end of second column of first row----->


    </div><!-----end of the row div------>
    </div>  <!---- end of the main container div---->


    

   
    
  
@endsection