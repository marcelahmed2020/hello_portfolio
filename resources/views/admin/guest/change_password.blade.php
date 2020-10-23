<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{sitesetting()->site_name}}| LogIn</title>

  <!-- S images -->
  <link href="{{url('marc/logo/favicon.png')}}" rel="icon">
  <link rel="apple-touch-icon" sizes="57x57" href="{{url('marc/logo/favicon.png')}}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{url('marc/logo/favicon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{url('marc/logo/favicon.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('marc/logo/favicon.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{url('marc/logo/favicon.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{url('marc/logo/favicon.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{url('marc/logo/favicon.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{url('marc/logo/favicon.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{url('marc/logo/favicon.png')}}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{url('marc/logo/favicon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('marc/logo/favicon.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{url('marc/logo/favicon.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('marc/logo/favicon.png')}}">

    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{ url('RKhB/style.css')  }}">

</head>
<body>
  @include('sweetalert::alert')
  @include('partials._errors')
<!-- partial:index.partial.html -->
<div id="login-button">
  <img src="{{ url('RKhB/loging_desighn/login-w-icon.png')}} ">
  </img>
</div>
<div id="container">
  <h5 style="margin: 42px auto;font-size: 24px;text-align: center;">Change Password</h5>
  <span class="close-btn">
    <img    src="{{ url('RKhB/loging_desighn/circle_close_delete_-128.png')}}"></img>
  </span>

   <form action="{{ route('admin.change_password',$user->id) }}" method="post">
          @csrf
          {{  method_field('PUT')  }}
     <input type="password" name="password" required class="form-control" placeholder="New Password">
    <input  type="password" name="password_confirmation" required class="form-control" placeholder="Confirmed Password">
     <button class="btn_lo" type="submit">Update</button>
</form>
</div>


<!-- partial -->
<script src="{{  url('RKhB/loging_desighn/TweenMax.min.js') }}"></script>
<script src="{{  url('RKhB/loging_desighn/jquery.min.js') }}"></script>
<script  src="{{ url('RKhB/script.js')  }}"></script>

</body>
</html>
