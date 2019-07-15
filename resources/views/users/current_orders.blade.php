@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center">Orders for @if(Auth::user()->company)
    {{Auth::user()->company}}
    @else
    {{Auth::user()->first_name}}
    
    @endif
    </h1>
    <hr>
    <!-- Start of rows -->
    <div class="row container justify-content-center">
    <!-- Start of first Column for Current Orders not yet delivered -->
    <div class="col-12 text-center" id="not-delivered">
    <div class="card shadow p-2 m-2"><h3>Not Yet Delivered</h3></div>

   <div class="card shadow p-2 m-2">
    <p>Order Number: <a href="">125605542</a></p>
    <p>Order ETA: ETA</p></div>
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