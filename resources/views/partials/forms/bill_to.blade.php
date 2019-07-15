<div class="container">
<h1 class="text-center">Bill To Address for: 
@if(Auth::user()->company)
{{Auth::user()->company}}
@else 
{{Auth::user()->first_name}} {{Auth::user()->last_name}}
@endif
</h1><hr>
<div class="card text-center shadow p-3 m-3">
<h3>Name: </h3>
<h3>Address: </h3>
<h3>City: </h3>
<h3>State: </h3>
<h3>Zip: </h3>


</div>
<div class="text-center"><a class="btn btn-primary" href="{{url('my_account')}}/{{Auth::user()->id}}/change-billing">Change Billing Information</a></div>
</div>