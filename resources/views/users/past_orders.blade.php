@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center"> Orders for @if(Auth::user()->company)
    {{Auth::user()->company}}
    @else
    {{Auth::user()->first_name}}
    
    @endif
    </h1>
    <hr>
    <!-- Start of rows -->
    <div class="row container justify-content-center">
 
<hr>
<!-- Start of orders already shipped and delivered -->
    <div class="col-12 text-center" id="shipped-delivered">
    <div class="card shadow p-2 m-3"><h3>Shipped and Delivered</h3></div>
    <div class="card shadow p-2 m-2">
    <p>Order Number: Order <a href="">165425442</a></p>
    <p>Order Received: Date</p></div>
    </div>
    <!-- End of orders already shipped and delivered -->
    </div>
<hr>
       <!-- Start of first Column for Current Orders not yet delivered -->
       <div class="col-12 text-center" id="not-delivered">
    <h3><a href="{{url('/my_account')}}/{{Auth::user()->id}}/orders">Orders Not Yet Delivered</a></h3>
    </div>
    <!-- End of current orders not yet delivered -->

    <!-- End of rows -->
</div>
<!-- End of Container -->

@endsection