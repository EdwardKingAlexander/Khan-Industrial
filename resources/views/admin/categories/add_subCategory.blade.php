@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="container">
    
        <div class="row shadow-lg m-3 p-3">
        <div class="mt-3 col-12">
   
        {!! Form::open(['admin/add_subCategory' => 'AdminController@add_sub_category']) !!}
        <div class="form-group">
                {!! Form::label('subcategory_name', 'Sub Category') !!}
                {!! Form::text('subcategory_name', null, ['class'=>'form-control']) !!}
            </div>

        <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                    {!! Form::label('category_id', 'Category ID') !!}
                    {!! Form::text('category_id', null, ['class'=>'form-control']) !!}
                </div>
            <div class="form-group">
                    {!! Form::submit('Add Sub Category',['class'=>'btn btn-outline-primary']); !!}
            </div>
        {!! Form::close() !!}
            </div>
           

           
            <div class="mt-3 col-6">
                    <table class="table table-dark">
                           
                            <thead>
                              <tr>
                              <th scope="col">Category ID</th>
                              <th scope="col">Sub Category ID</th>
                                <th scope="col">Sub Category Name</th>
                                <th scope="col">Description</th>
                               
                              </tr>
                            </thead>
                            <tbody>
                                  
                              <tr>
                                    @foreach ($subcategories as $category)
                                <th scope="row">{{$category->category_id}}</th>
                                <td>{{$category->subcategories_id}}</td>
                                <td>{{$category->subcategory_name}}</td>
                                <td>{{$category->description}}</td>
                              
                              </tr>
                            </tbody> @endforeach
                          </table>

            </div>

            <div class="mt-3 col-6">
                <table class="table table-dark">
                       
                        <thead>
                          <tr>
                          <th scope="col">Category ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Sub Category</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                              
                          <tr>
                                @foreach ($categories as $categoryy)
                            <th scope="row">{{$categoryy->category_id}}</th>
                            <td>{{$categoryy->category_name}}</td>
                            <td>{{$categoryy->description}}</td>
                          
                          </tr>
                        </tbody> @endforeach
                      </table>

        </div>
    </div>
</div>
@endsection