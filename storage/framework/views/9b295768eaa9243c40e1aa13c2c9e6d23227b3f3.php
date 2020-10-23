</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(url('/admin/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo e(url('/admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


<!-- Custom scripts for all pages-->
<script src="<?php echo e(url('/admin/js/sb-admin-2.min.js')); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo e(url('/admin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('/admin/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo e(url('/admin/js/demo/datatables-demo.js')); ?>"></script>
<!-- Page level plugins -->
<script src="<?php echo e(url('/admin/vendor/chart.js/Chart.min.js')); ?>"></script>
<!-- Page level custom scripts -->
<script src="<?php echo e(url('/admin/js/demo/chart-area-demo.js')); ?>"></script>
<script src="<?php echo e(url('/admin/js/demo/chart-pie-demo.js')); ?>"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

<script src="<?php echo e(url('/admin/js/tag-picker.min.js')); ?>"></script>
<script>

   // var picker = new TP(document.querySelector('#keywords'));

//  var picker = new TP(document.querySelector('#keywords'), {
//     min:3
// });
//
   var tags = new TP(document.querySelector('#keywords'), {
       escape: [
           // Modern browser(s)
           ',',
           ' ',
           '\t',
           '\n',
           // Legacy browser(s)
           188,
           32,
           9,
           13
       ]
   });
   //    var picker = new TP(document.querySelector('#keywords'));
//
//    picker.on('change', function(tag, index) {
//        console.log([tag, index, this.tags]);
//    });

</script>
  <!-- JavaScript Script -->
  <script  type="text/javascript" src="<?php echo e(url('/admin/script.js')); ?>"></script>
<script  type="text/javascript" src="<?php echo e(url('/admin/option.js')); ?>"></script>

<script type="text/javascript">

    $('.timepicker').datetimepicker({

        format:  "YYYY-MM-DD HH:MM:SS"

    });

</script>
<?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>
</body>
</html>
<?php /**PATH E:\projects\profile\resources\views\dashboard\layouts\_footer.blade.php ENDPATH**/ ?>