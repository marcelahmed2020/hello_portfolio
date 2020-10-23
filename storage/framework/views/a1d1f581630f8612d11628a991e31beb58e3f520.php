<html lang="en">
<head>
    <title><?php echo e($settings->site_name); ?></title>
</head>
<body>
 <h3>  Dear <?php echo e($messageData['name']); ?></h3>
 <h3>  Email <?php echo e($messageData['email']); ?></h3>
 <p>  Your Account Has Been Successfully Created. </p>
 <p>
     <a href="<?php echo e(route('account.confirm.email',$messageData['code'])); ?>">Confirm Account</a> </p>

 <p>Thansk & Regards</p>
 <p><?php echo e(config('app.name')); ?></p>

</body>
</html>











<?php /**PATH E:\projects\profile\resources\views\dashboard\email\register.blade.php ENDPATH**/ ?>