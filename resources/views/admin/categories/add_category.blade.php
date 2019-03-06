@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="container">
  <div class="row shadow-lg m-3 p-3">
        <div class="mt-3 col-6">
   
        {!! Form::open(['admin/add_category' => 'AdminController@add_category']) !!}
        <div class="form-group">
            {!! Form::label('category_name', 'Category') !!}
            {!! Form::text('category_name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>
  
            <div class="form-group">
                    {!! Form::submit('Add Product Category',['class'=>'btn btn-outline-primary']); !!}
            </div>
        {!! Form::close() !!}
            </div>

            <hr>
          
            <div class="mt-3 col-6">
                    <table class="table table-dark shadow-md rounded-top">
                           
                            <thead>
                              <tr>
                              <th scope="col">Category ID</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                               
                              </tr>
                            </thead>
                            <tbody>
                                  
                              <tr>
                                    @foreach ($categories as $category)
                                <th scope="row">{{$category->category_id}}</th>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->description}}</td>
                  
                              </tr>

                             
                            </tbody> @endforeach 
                         
                          </table>

            </div>
          
    </div>
</div>
@endsection