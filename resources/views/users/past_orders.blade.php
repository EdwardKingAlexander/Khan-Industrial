@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="text-center">@if(Auth::user()->company)
    {{Auth::user()->company}}
    @else
    {{Auth::user()->first_name}}
    
    @endif Orders
    </h3>
    <hr>
    <!-- Start of rows -->
    <div class="row container justify-content-center">
 
<hr>
<!-- Start of orders already shipped and delivered -->
    <div class="col-12 text-center" id="shipped-delivered">
    <h3>Shipped and Delivered</h3>
    <p>Order Number: Order <a href="">165425442</a></p>
    <p>Order Received: Date</p>
    </div>
    <!-- End of orders already shipped and delivered -->
    </div>
<hr>
       <!-- Start of first Column for Current Orders not yet delivered -->
       <div class="col-12 text-center" id="not-delivered">
    <h3><a href="{{url('/my_account')}}/{{Auth::user()->id}}/current-orders">Orders Not Yet Delivered</a></h3>
    </div>
    <!-- End of current orders not yet delivered -->

    <!-- End of rows -->
</div>
<!-- End of Container -->

@endsection