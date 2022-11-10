<div class="modal fade" id="NewDept">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Create a new Department


                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewDept')); ?>" class="row" method="POST" enctype=multipart/form-data> <?php echo csrf_field(); ?> <div
                    class="row">
                    <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($data['type'] == 'string'): ?>

                    <?php echo e(CreateInputText($data, $placeholder = null, $col = '12')); ?>


                    <?php elseif($data['type'] == 'integer'): ?>

                    <?php echo e(CreateInputInteger($data , $placeholder = null, $col = '4')); ?>


                    <?php elseif($data['type'] == 'date' || $data['type'] == 'datetime'): ?>


                    <?php echo e(CreateInputDate($data, $placeholder = null, $col = '4')); ?>


                    <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="row">
                <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($data['type'] == 'text'): ?>

                <?php echo e(CreateInputEditor($data, $placeholder = null, $col = '12')); ?>


                <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>



            <?php echo Form::hidden($name="DeptID", $value=\Hash::make(uniqid()."AFC".date('Y-m-d H:I:S')), [$options=null]); ?>




        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

            <button type="submit" class="btn btn-dark">Save Changes</button>

            </form>
        </div>

    </div>
</div>
</div>

<?php /**PATH /var/www/html/africhild.mis/hr/Depts/NewDept.blade.php ENDPATH**/ ?>