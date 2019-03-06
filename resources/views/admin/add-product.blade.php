@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="container">
    <div class="row">

        <div class="mt-3 col-6">

     

            <h2>Import Vendor Products CSV File</h2>
  
            <form class="form-horizontal" action="AdminController@add_product" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
  
            <div class="input-row control-label">
              <label for="" class="col-md-4">Vendor Id</label>
              <input type="text">
  
              <label class="col-md-4 control-label">Choose CSV File</label> <input type="file" name="file" id="file" accept=".csv"> <br>
              <button type="submit" id="submit" name="import" class="btn btn-success">Import</button> 
              <br />
            </div>
          </form>
  
  
              </div>
        
            <div class="mt-3 col-6">
                    <table class="table table-dark">
                           
                            <thead>
                              <tr>
                              <th scope="col">Vendor</th>
                              <th scope="col">Vendor Id</th>
                               
                               
                              </tr>
                            </thead>
                            <tbody>
                                  
                              {{-- <tr>
                                    @foreach ($categories as $category)
                                <th scope="row">{{$category->category_id}}</th>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->description}}</td>
                  
                              </tr> --}}

                             
                            {{-- </tbody> @endforeach  --}}
                         
                          </table>

                          {{-- @foreach ($subcategories as $subcat)
                        <ul><li>{{$subcat->subcategory_name}}</li></ul>
                          @endforeach --}}

            </div>
    </div>
</div>
@endsection