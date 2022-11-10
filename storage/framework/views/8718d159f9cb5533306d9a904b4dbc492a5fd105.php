<?php echo $__env->make('users.Update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->


<script src="<?php echo e(asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/scripts.bundle.js')); ?>"></script>
<?php if(isset($TurnOffDataTables)): ?>
    <script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.js">
    </script>


<?php else: ?>
    <script defer src="<?php echo e(asset('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>


<?php endif; ?>




<script defer src="<?php echo e(asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js')); ?>"></script>

<script defer src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<!--end::Global Javascript Bundle-->

<script defer src="https://cdn.tiny.cloud/1/1nr3t3t5xeyg86kk7vb6p7u0d9eo1w4zd7dy14p1volsp9ed/tinymce/5/tinymce.min.js"
referrerpolicy="origin"></script>

<script defer src="<?php echo e(asset('js/custom.js')); ?>"></script>
<?php echo $__env->make('not.not', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script defer src="<?php echo e(asset('js/main.js')); ?>"></script>
<!--end::Javascript-->
<?php echo $__env->make('scripts.chartjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(isset($chart)): ?>

    <?php echo $chart->script(); ?>


<?php endif; ?>

<?php if(isset($chart2)): ?>

    <?php echo $chart2->script(); ?>


<?php endif; ?>
</body>
<!--end::Body-->

</html>
<?php /**PATH /var/www/html/africhild.mis/views/scripts/scripts.blade.php ENDPATH**/ ?>