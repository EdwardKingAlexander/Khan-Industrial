@extends('layouts.app')
@section('content')
<h3 class="text-center">Ship To:</h3><hr>
<div class="container row p-3 m-3"> 
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xl-12 align-content-center">

@include('partials.forms.ship_to')

</div>
<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xl-12">
<h3 class="mt-2 p-3">This is a banner</h3>
</div>
</div>




@endsection