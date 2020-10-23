<?php $__env->startComponent('mail::message'); ?>
<h1>Hello From Your Website <?php echo e($settings->site_name); ?></h1>
    # Introduction

<h2>Name : <?php echo e($details['name']); ?></h2>
<h3>E-mail : <?php echo e($details['email']); ?></h3>
<p>Subject :<?php echo e($details['subject']); ?></p>
<p>Message :<?php echo e($details['message']); ?></p>

<p>Thank you</p>

<?php $__env->startComponent('mail::button', ['url' =>  url('/')]); ?>
Back To Website
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\projects\profile\resources\views/emails/contact.blade.php ENDPATH**/ ?>