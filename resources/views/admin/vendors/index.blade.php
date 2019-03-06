@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="container">
    <div class="row">
        <div class="mt-3 col-12">
   <h1 class="text-center">Khan Industrial Supply Vendors</h1>
            <table class="table table-dark m-2">
                <thead>
                  <tr>
                    <th scope="col">Vendor ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact Person</th>
                    <th scope="col">Location</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fax</th>
                  </tr>
                </thead>
                @foreach ($vendors as $vendor)
                    
                
                <tbody>
                  <tr>
                    <th scope="row">{{$vendor->vendor_id}}</th>
                    <td>{{$vendor->name}}</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  
                </tbody>@endforeach
              </table>
            </div>
    </div>
</div>
@endsection