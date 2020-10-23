<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$settings->site_name }} | @yield('site_name')</title>
    <!-- Custom fonts for this template-->
    <link href="{{url('/admin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('/admin')}}/css/sb-admin-2.min.css" rel="stylesheet">
    @toastr_css
</head>

<body class="bg-gradient-primary">
<div class="container">
  @yield('content')
    <!-- Outer Row -->
</div>
<!-- Bootstrap core JavaScript-->
   <script src="{{url('/admin')}}/vendor/jquery/jquery.min.js"></script>
   <script src="{{url('/admin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
    <script src="{{url('/admin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
    <script src="{{url('/admin')}}/js/sb-admin-2.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>--}}
<script src="{{url('/admin')}}/jquery_script.js"></script>
{{--   <script>--}}
{{--       $(function(){--}}

{{--           $("#mylogin").validate({--}}
{{--               rules: {--}}
{{--                   email: {--}}
{{--                       required: true,--}}
{{--                       email: true--}}
{{--                   }--}}
{{--               },--}}
{{--               messages: {--}}
{{--                   email: {--}}
{{--                       // required: "E-mail Should Be Required",--}}

{{--                   }--}}
{{--               }--}}
{{--           });--}}
{{--       });--}}
{{--   </script>--}}
@toastr_js
    @toastr_render
</body>

</html>
