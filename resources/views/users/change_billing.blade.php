@extends('layouts.app')
@section('content')
<div class="container">
<h1 class="text-center">Billing for: 
@if(Auth::user()->company)
{{Auth::user()->company}}
@else
{{Auth::user()->first_name}} {{Auth::user()->last_name}}
@endif
</h1>
<hr>
<div class="card text-center shadow p-2 m-2">
<h3>Name</h3>
<h3>Company</h3>
<h3>Address</h3>
<h3>Address 2</h3>
<h3>City</h3>
<h3>State</h3>
<h3>Zip</h3>
</div>
<div class="text-center"><a href="" class='btn btn-primary'>Change Billing Information</a></div>
</div>
@endsection