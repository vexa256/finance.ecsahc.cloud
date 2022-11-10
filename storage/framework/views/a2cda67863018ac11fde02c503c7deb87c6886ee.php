<div class="modal fade"  id="New">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Create a new grant activity record


                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                 <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewActivity')); ?>" class="row" method="POST" enctype= multipart/form-data>

                    <?php echo csrf_field(); ?>


                    <div class="row">


                        <div class="col-md-4 mb-3 mt-3 ">
                            <div class="mb-3">
                                <label class="required form-label">Activity Budget</label>
                                <input required type="text" name="Budget" class="form-control IntOnlyNow" />
                            </div>
                        </div>


                        <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($data['type'] == 'string'): ?>

                        <div class="col-md-4 mb-3 mt-3 x_<?php echo e($data['name']); ?>">
                            <div class="mb-3">
                                <label class="required form-label"><?php echo e(ucfirst(FromCamelCase($data['name']))); ?></label>
                                <input required type="text" name="<?php echo e($data['name']); ?>" class="form-control " placeholder="" />
                            </div>
                        </div>

                        <?php elseif($data['type'] == 'integer'): ?>

                        <div class="col-md-4 mb-3 mt-3 x_<?php echo e($data['name']); ?>">
                            <div class="mb-3">
                                <label class="required form-label"><?php echo e(ucfirst(FromCamelCase($data['name']))); ?></label>
                                <input required type="text" name="<?php echo e($data['name']); ?>" class="form-control IntOnlyNow" />
                            </div>
                        </div>

                        <?php elseif($data['type'] == 'date' || $data['type'] == 'datetime'): ?>

                        <div class="col-md-4 mb-3 mt-3 x_<?php echo e($data['name']); ?>">
                            <div class="mb-3">
                                <label class="required form-label"><?php echo e(ucfirst(FromCamelCase($data['name']))); ?></label>
                                <input type="text" name="<?php echo e($data['name']); ?>" class="form-control DateArea" />
                            </div>
                        </div>

                        <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <div class="row">
                        <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($data['type'] == 'text'): ?>

                        <div class="col-md-6 mb-3 mt-3 x_<?php echo e($data['name']); ?>">
                            <div class="mb-3  x_insert" data-name="<?php echo e($data['name']); ?>">
                                <label class="required form-label"><?php echo e(ucfirst(FromCamelCase($data['name']))); ?> </label>
                                <textarea name="<?php echo e($data['name']); ?>" class="form-control"></textarea>
                            </div>
                        </div>

                        <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>


                    <input type="hidden" name="DID" value="<?php echo e($P->DID); ?>">
                    <input type="hidden" name="GID" value="<?php echo e($P->GID); ?>">
                    <input type="hidden" name="Grant" value="<?php echo e($P->GrantName); ?>">

                    <?php echo Form::hidden($name="AID", $value=\Hash::make(uniqid()."PROJ".date('Y-m-d H:I:S')), [$options=null]); ?>





            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-dark" >Save Changes</button>

            </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/proj/activities/New.blade.php ENDPATH**/ ?>