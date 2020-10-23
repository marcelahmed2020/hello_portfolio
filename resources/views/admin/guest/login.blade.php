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
@toastr_css


</head>
<body>
  @include('partials._errors')
<!-- partial:index.partial.html -->
<div id="login-button">
  <img src="{{ url('RKhB/loging_desighn/login-w-icon.png')}} ">
  <!-- <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png"> -->
  </img>
</div>
<div id="container">
  <h1>Log In</h1>
  <span class="close-btn">
    <img    src="{{ url('RKhB/loging_desighn/circle_close_delete_-128.png')}}"></img>
    <!-- <img  src="{{ url('RKhB/loging_images/login-w-icon.png')}} " src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img> -->
  </span>

   <form action="{{ route('admin.login') }}" method="post" onsubmit="return validate_form()">
        @csrf
    <input type="email" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Password">
     <button class="btn_lo" type="submit">Login</button>
    {{--<a href="#">Log in</a>--}}
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Remember me</span>
      <span id="forgotten">Forgotten password</span>
    </div>
</form>
</div>

<!-- Forgotten Password Container -->
<div id="forgotten-container">
   <h1>Forgotten</h1>
  <span class="close-btn">
    <img src="{{ url('RKhB/loging_desighn/circle_close_delete_-128.png')}}"></img>
  </span>
      <form action="{{ route('admin.send_mail_password') }}" method="post">
        @csrf
    <input type="email" name="email" placeholder="E-mail">
    {{--<a href="#" class="orange-btn"></a>--}}
         <button class="btn_lo orange-btn" type="submit">Get new password</button>

</form>
</div>
<!-- partial -->
  <script src="{{  url('RKhB/loging_desighn/TweenMax.min.js') }}"></script>
<script src="{{  url('RKhB/loging_desighn/jquery.min.js') }}"></script>
<script  src="{{ url('RKhB/script.js')  }}"></script>
@toastr_js
@toastr_render

</body>
</html>
