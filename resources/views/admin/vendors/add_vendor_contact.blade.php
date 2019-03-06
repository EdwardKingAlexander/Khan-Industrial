@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="container">
    <div class="row">
        <div class="mt-3 col-6">
   
        {!! Form::open(['admin/vendors/add_vendor_contact' => 'VendorController@addVendorContact']) !!}
        <div class="form-group">
            {!! Form::label('fname', 'Vendor Contact First Name') !!}
            {!! Form::text('fname', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('lname', 'Vendor Contact Last Name') !!}
                {!! Form::text('lname', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                    {!! Form::label('email', 'Vendor Email') !!}
                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                </div>

              

                <div class="form-group">
                        {!! Form::label('fax', 'Vendor Fax') !!}
                        {!! Form::text('fax', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                            {!! Form::label('addressST', 'Vendor Ship-To Address') !!}
                            {!! Form::text('addressST', null, ['class'=>'form-control']) !!}
                        </div>
        <div class="form-group">
                {!! Form::label('STcity', 'Vendor Ship-To City') !!}
                {!! Form::text('STcity', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                    {!! Form::label('STstate', 'Vendor Ship-To State') !!}
                    {!! Form::text('STstate', null, ['class'=>'form-control']) !!}
                </div>
            <div class="form-group">
                    {!! Form::label('STzip', 'Vendor Ship-To Zip') !!}
                    {!! Form::text('STzip', null, ['class'=>'form-control']) !!}
                </div>
           
            <div class="form-group">
                    {!! Form::label('addressBT', 'Vendor Bill-To Address') !!}
                    {!! Form::text('addressBT', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                        {!! Form::label('BTcity', 'Vendor Bill-To City') !!}
                        {!! Form::text('BTcity', null, ['class'=>'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                            {!! Form::label('BTstate', 'Vendor Bill-To State') !!}
                            {!! Form::text('BTstate', null, ['class'=>'form-control']) !!}
                        </div>
                <div class="form-group">
                        {!! Form::label('BTzip', 'Vendor Bill-To Zip') !!}
                        {!! Form::text('BTzip', null, ['class'=>'form-control']) !!}
                    </div>
               
        
                    <div class="form-group">
                            {!! Form::label('terms', 'Vendor Payment Terms') !!}
                            {!! Form::text('terms', null, ['class'=>'form-control']) !!}
                        </div>
            <div class="form-group">
                    {!! Form::submit('Add Customer',['class'=>'btn btn-outline-primary']); !!}
            </div>
        {!! Form::close() !!}
            </div>
    </div>
</div>
@endsection
