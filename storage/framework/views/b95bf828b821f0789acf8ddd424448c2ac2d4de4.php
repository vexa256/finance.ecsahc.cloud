<?php if($errors->any()): ?>

 <script type="text/javascript">
  Swal.fire({
   title: 'An error occured, try again',
   icon: 'error',
   html: `
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    `,

   showCancelButton: false,
   focusConfirm: false,
   confirmButtonText: '<i class="fas fa-times"></i> Close!',
   confirmButtonAriaLabel: 'Close',

  });

 </script>
<?php endif; ?>

<?php if(isset($Status)): ?>
 <script type="text/javascript">
  $(function() {

   Swal.fire('Information', '<?php echo e($Status); ?>', 'success');

  });

 </script>
<?php endif; ?>
<?php if(session('status')): ?>

 <script type="text/javascript">
  $(function() {

   Swal.fire('Information', '<?php echo e(session('status')); ?>', 'success');

  });

 </script>

<?php endif; ?>

<?php if(session('taxadded')): ?>

 <script type="text/javascript">
  $(function() {
    var myModal = new bootstrap.Modal(document.getElementById("MgtTaxes"), {});
        document.onreadystatechange = function () {
        myModal.show();
        };

   Swal.fire('Information', '<?php echo e(session('taxadded')); ?>', 'success');

  });

 </script>

<?php endif; ?>


<?php if(session('taxerror')): ?>

 <script type="text/javascript">
  $(function() {
    var myModal = new bootstrap.Modal(document.getElementById("MgtTaxes"), {});
        document.onreadystatechange = function () {
        myModal.show();
        };

   Swal.fire('Information', '<?php echo e(session('taxerror')); ?>', 'error');

  });

 </script>

<?php endif; ?>

<?php if(session('error_a')): ?>

 <script type="text/javascript">
  $(function() {

   Swal.fire('Information', '<?php echo e(session('error_a')); ?>', 'error');

  });

 </script>

<?php endif; ?>


<?php if(isset($SelectKyc)): ?>
 <script>
  Swal.fire('Select Investment', 'Select the investment whose KYC is to be reviewed', 'success');

 </script>
<?php endif; ?>
x_RecordStatus

<script>

$(function() {

if ($('.x_RecordStatus').length > 0) {
    $('.x_RecordStatus').remove();
}

});
</script>


    <?php if(isset($rem)): ?>
    <script>
        $(function() {

    <?php $__currentLoopData = $rem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $(".x_<?php echo e($val); ?>").remove();
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    BootEditor();
        });
</script>
<?php else: ?>
<script>
    $(function() {

        BootEditor();

    });
</script>

<?php endif; ?>



<?php if(isset($rem2)): ?>
<script>
    $(function() {

<?php $__currentLoopData = $rem2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    $(".x_<?php echo e($val); ?>").remove();
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

BootEditor();
    });
</script>
<?php else: ?>
<script>
$(function() {

    BootEditor();

});
</script>

<?php endif; ?>
<?php /**PATH /var/www/html/africhild.mis/views/not/not.blade.php ENDPATH**/ ?>