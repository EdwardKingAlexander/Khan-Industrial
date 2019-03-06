@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="container">
    <div class="row">
        <div class="mt-3 col-6">
   
        {!! Form::open(['admin/vendors/add_vendor' => 'VendorController@addVendor']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Vendor Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        
            <div class="form-group">
                    {!! Form::submit('Add Vendor',['class'=>'btn btn-outline-primary']); !!}
            </div>
        {!! Form::close() !!}
            </div>
    </div>
</div>
@endsection