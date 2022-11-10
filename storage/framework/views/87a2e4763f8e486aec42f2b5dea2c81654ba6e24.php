<div class="modal fade" id="NewDoc">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Attach new scanned document to the grant

                    <span class="text-danger">
                        <?php echo e($E->GrantName); ?>

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

                <form action="<?php echo e(route('NewGrantDoc')); ?>" class="row" method="POST" enctype="multipart/form-data"> <?php echo csrf_field(); ?> <div
                    class="row">

                    <div class="mb-3 col-md-4 mb-3 mt-3" >
                        <label class="required form-label"> PDF Document </label>
                        <input name="DocURL"  type="file" required  class="  form-control form-control-solid" /> </div>


        <input type="hidden" name="GID" value="<?php echo e($E->GID); ?>">

        <input type="hidden" name="GrantName" value="<?php echo e($E->GrantName); ?>">

        <input type="hidden" name="DOCID" value="<?php echo e(\Hash::make($E->GID)); ?>">

        <input type="hidden" name="id" value="<?php echo e($E->id); ?>">


                    <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($data['type'] == 'string'): ?>

                    <?php echo e(CreateInputText($data, $placeholder = null, $col = '4')); ?>


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








        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

            <button type="submit" class="btn btn-dark">Save Changes</button>

            </form>
        </div>

    </div>
</div>
</div>
<?php /**PATH /var/www/html/africhild.mis/proj/grants/NewDoc.blade.php ENDPATH**/ ?>