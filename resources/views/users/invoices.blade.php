@extends('layouts.app')
@section('content')

<div class="container text-center">
<h1>Invoices for: 
@if(Auth::user()->business)
{{Auth::user()->business}}
@else 
{{Auth::user()->first_name}} {{Auth::user()->last_name}}
@endif
</h1>
<hr>
<div class="card shadow text-center p-2 m-2">
<h3>Invoices will be sent automatically after payment is accepted and products are shipped on credit card orders, and sent based on payment terms, once that is an option</h3>
</div>

</div>

@endsection