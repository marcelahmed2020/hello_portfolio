# Introduction
<h3>From your Websit -<?php echo e($details['site_name']); ?>-</h3>
<h4> Hi, I'm  <?php echo e($details['name']); ?>  And My E-mail <?php echo e($details['email']); ?> </h4>
<p>Telephone Is :<?php echo e($details['telephone']); ?> </p>
<p>Subject Is :<?php echo e($details['subject']); ?> </p>
<p>Message Is :<?php echo e($details['message']); ?> </p>
Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php /**PATH E:\projects\profile\resources\views\dashboard\email\send_mail_to_site.blade.php ENDPATH**/ ?>