@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="col-9 container mt-3">
        <h1>Settings</h1>
      <p>Tis is settings content</p>
      <h1 class="container">Change Password</h1>
      <form class="container">
            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Current Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword" name="c_password" placeholder="Current Password">
                    </div>
                  </div>
            <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Change Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword" name="n_password" placeholder="New Password">
                    </div>
                  </div>
                  <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword" name="cfrm_password" placeholder="Confirm Password">
                        </div>
                      </div>
          </form>
    </div>
</div>
<hr class="container">
@endsection