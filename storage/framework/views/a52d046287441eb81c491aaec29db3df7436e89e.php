<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e($settings->site_name); ?> | <?php echo $__env->yieldContent('site_name'); ?></title>
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(url('/admin')); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(url('/admin')); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <?php echo toastr_css(); ?>
</head>

<body class="bg-gradient-primary">
<div class="container">
  <?php echo $__env->yieldContent('content'); ?>
    <!-- Outer Row -->
</div>
<!-- Bootstrap core JavaScript-->
   <script src="<?php echo e(url('/admin')); ?>/vendor/jquery/jquery.min.js"></script>
   <script src="<?php echo e(url('/admin')); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
    <script src="<?php echo e(url('/admin')); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
    <script src="<?php echo e(url('/admin')); ?>/js/sb-admin-2.min.js"></script>


<script src="<?php echo e(url('/admin')); ?>/jquery_script.js"></script>



















<?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\devmarcel\resources\views/dashboard/guest/guest.blade.php ENDPATH**/ ?>