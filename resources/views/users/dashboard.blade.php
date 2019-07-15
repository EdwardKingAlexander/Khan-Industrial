@extends('layouts.app')
@section('content')
<div class="container">
    <h3 class="text-center">@if(Auth::user()->company)
    {{Auth::user()->company}}
    @else
    {{Auth::user()->first_name}}
    
    @endif
    
    </h3>
    <hr>

    <!-- Start of the row div -->
    <div class="row container justify-content-center">
    <!-- Start of first Column -->
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center card shadow p-2 m-2">
   
    <h4><a href="{{url('/my_account')}}/{{Auth::user()->id}}/orders">Your orders</a></h4>
    
    <!-- End of first column -->

   </div>
   <!-- End of first column -->

    <!-- Start of second Column -->
   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center card shadow p-2 m-2">
   
   <h4><a href="{{url('/my_account')}}/{{Auth::user()->id}}/shipping-info">Shipping Address</a></h4>
   
   <!-- End of second Column -->

  </div>


<!-- Start of Third column -->
  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center card shadow p-2 m-2">
   
   <h4><a href="{{url('/my_account')}}/{{Auth::user()->id}}/billing-info">Billing Information</a></h4>
   
   <!-- End of third column -->

  </div>


<!-- Start of 4th column -->
  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center card shadow p-2 m-2">
   
   <h4><a href="{{url('/my_account')}}/{{Auth::user()->id}}/invoices">Invoices</a></h4>
   
   <!-- End of fourth column -->

  </div>

<!-- Start of fifth column -->
  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6 text-center card shadow p-2 m-2">
   
   <h4><a href="{{url('/my_account')}}/{{Auth::user()->id}}/change-login">Change Login Information</a></h4>
   
   <!-- End of fifth column -->

  </div>
    </div> 
    <!-- End of the row div -->
    
</div>

@endsection