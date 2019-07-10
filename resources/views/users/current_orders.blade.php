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
    <!-- Start of first Column for Current Orders not yet delivered -->
    <div class="col-12 text-center" id="not-delivered">
    <h3>Not yet Delivered</h3>
    <p>Order Number: <a href="">125605542</a></p>
    <p>Order ETA: ETA</p>
    </div>
    <!-- End of current orders not yet delivered -->
<!-- End of rows div -->
    </div>
<hr>
   
<!-- Start of orders already shipped and delivered -->
    <div class="col-12 text-center" id="shipped-delivered">
    <h3><a href="{{url('/my_account')}}/{{Auth::user()->id}}/past-orders">Shipped and Delivered</a></h3>
    </div>
    <!-- End of orders already shipped and delivered -->
    

    <!-- End of rows -->
</div>
<!-- End of Container -->

@endsection