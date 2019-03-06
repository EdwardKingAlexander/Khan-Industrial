@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="container">
    <div class="row">
        <div class="mt-3 col-6">
   
        {!! Form::open(['admin/add_category' => 'CategoryController@roles']) !!}
        <div class="form-group">
            {!! Form::label('role', 'Role') !!}
            {!! Form::text('role', null, ['class'=>'form-control']) !!}
        </div>

            <div class="form-group">
                    {!! Form::submit('Add User Role',['class'=>'btn btn-outline-primary']); !!}
            </div>
        {!! Form::close() !!}
            </div>
    </div>
</div>
@endsection