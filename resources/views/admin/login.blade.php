<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/adminLogin.css')}}">
</head>
<body>
  <div class="modal-dialog text-center">
      <div class="col-sm-8 main-section">
          <div class="modal-content">
              <div class="col-12 user-image">
                  <img src="{{asset('../img/face.png')}}" alt="">
              </div>
              
              @if(Session::has('flash_message_error'))
          
              <div class="mt-3 mb-3 alert alert-danger alert-block text-center">
                  <button class="close" type="button" data-dismiss="alert" >x</button>
                  <strong> {!! session('flash_message_error')!!}</strong>
              </div>
              @endif

              @if(Session::has('flash_message_success'))
          
              <div class="mt-3 mb-3 alert alert-success alert-block text-center">
                  <button class="close" type="button" data-dismiss="alert" >x</button>
                  <strong> {!! session('flash_message_success')!!}</strong>
              </div>
              @endif

            <form action="{{action('AdminController@login')}}" method="POST" class="col-12">
                  
                <!-----csrf token for Admin Login------->
                  @csrf
                 <div class="form-group">
                     <input type="text" class="form-control" placeholder="Admin Email" name="email">
                     
                 </div>
                  <div class="form-group">
                     <input type="password" class="form-control" placeholder="Enter Password" name="password">
                     
                 </div>
                 <button type="submit" value="Login" class="btn"><i class="fas fa-sign-in-alt"></i>Get Funky</button>
              </form>

      
              <div class="col-12 forgot">
                  <a href="#">Not an Admin?</a>
              </div>
          </div> <!------end of modal content----->
      </div>
  </div>

</body>
</html>
























