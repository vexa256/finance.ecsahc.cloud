
        <?php if(isset($Employees)): ?>
        <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $up): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="Extend<?php echo e($up->id); ?>">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Extend contract validity

                    <span class="text-primary">

                      (  <?php echo e($up->StaffName); ?> )

                    </span>

                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('ExtendCon')); ?>" class="row" method="POST" enctype=multipart/form-data> <?php echo csrf_field(); ?> <div
                    class="row">



<?php echo e(UpdateDate2($name = 'ContractExpiry', $label = 'Contract Expiry', $value = $up->ContractExpiry)); ?>


            </div>

            <input type="hidden" name="id" value="<?php echo e($up->id); ?>">




        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

            <button type="submit" class="btn btn-dark">Save Changes</button>

            </form>
        </div>

    </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php /**PATH /var/www/html/finance.ecsa/hr/emp/Extend.blade.php ENDPATH**/ ?>