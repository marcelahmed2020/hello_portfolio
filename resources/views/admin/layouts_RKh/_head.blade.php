<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <title> {{ sitesetting()->site_name  }} | @yield('site_name')</title>
   <!-- Favicon-->
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
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

   <!-- Bootstrap Core Css -->
   <link href="{{url('/RKhB')}}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

   <!-- Waves Effect Css -->
   <link href="{{url('/RKhB')}}/plugins/node-waves/waves.css" rel="stylesheet" />

   <!-- Animation Css -->
   <link href="{{url('/RKhB')}}/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{url('/RKhB')}}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
   <!-- Morris Chart Css-->
   <link href="{{url('/RKhB')}}/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{url('/RKhB')}}/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <link href="{{url('/RKhB')}}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{url('/RKhB')}}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

   <!-- Custom Css -->
   <link href="{{url('/RKhB')}}/css/style.css" rel="stylesheet">

   <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
   <link href="{{url('/RKhB')}}/css/themes/all-themes.css" rel="stylesheet" />
   @toastr_css


</head>
<body class="theme-black">
     <!-- Page Loader -->
     <div class="page-loader-wrapper">
         <div class="loader">
             <div class="preloader">
                 <div class="spinner-layer pl-black">
                     <div class="circle-clipper left">
                         <div class="circle"></div>
                     </div>
                     <div class="circle-clipper right">
                         <div class="circle"></div>
                     </div>
                 </div>
             </div>
             <p>Please wait...</p>
         </div>
     </div>
     <!-- #END# Page Loader -->
