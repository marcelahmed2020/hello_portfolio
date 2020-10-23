<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Thanks For Shoping With Us!</title>
</head>
<body>

 <div class="card">
     <div class="card-header">
     </div>
     <table width="700px">
         <tr>
             <td>&nbsp;</td></tr>
         <tr>
             <td>         Hi <?php echo e(OrdersTime($messageData['order_id'])->first_name); ?> <?php echo e(OrdersTime($messageData['order_id'])->first_name); ?></td>
         </tr>
         <tr>
             <td>&nbsp;</td></tr>
         <tr>
             <td>Email : <?php echo e(OrdersTime($messageData['order_id'])->user_email); ?> </td>
         </tr>
         <tr>
             <td>Total Price : <?php echo e(OrdersTime($messageData['order_id'])->grand_total); ?> </td>
         </tr>
         <tr>
             <td>&nbsp;</td></tr>
         <tr>
         </tr>
         <td>  Thanks For Shopping With Us Your Order Details  </td>
     </table>
 </div>
 <div></div>
 <br>
 <table width="95%" bgcolor="#cccccc" cellpadding="5" cellspacing="5">
    <tr>
        <td>#</td>
        <td>Product title</td>
        <td>Code</td>
        <td>Quntity</td>
        <td>Size</td>
        <td>Price</td>
    </tr>

    <?php $__currentLoopData = OrdersTime($messageData['order_id'])->order_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td><a href="<?php echo e(url('/product/details/'.$ord->product_id)); ?>"><?php echo e($ord->title); ?></a> </td>
            <td><a href="<?php echo e(url('/product/details/'.$ord->product_id)); ?>"> <?php echo e($ord->code); ?></a></td>
            <td><?php echo e($ord->quntity); ?></td>
            <td><?php echo e($ord->size); ?></td>
            <td>$ <?php echo e($ord->price); ?></td>
            <td><?php echo e($ord->status == 1?'Exist':'Not Exist'); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH E:\projects\profile\resources\views\dashboard\email\orders.blade.php ENDPATH**/ ?>