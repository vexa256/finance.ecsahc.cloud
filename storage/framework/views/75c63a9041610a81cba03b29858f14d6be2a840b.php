<div class="modal fade"  id="NewCat">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Create a new activity broad category


                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                 <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewBroadCat')); ?>" class="row" method="POST" enctype= multipart/form-data>

                    <?php echo csrf_field(); ?>


                    <div class="row">



                        <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($data['type'] == 'string'): ?>

                        <div class="col-md-6 mb-3 mt-3 x_<?php echo e($data['name']); ?>">
                            <div class="mb-3">
                                <label class="required form-label"><?php echo e(ucfirst(FromCamelCase($data['name']))); ?></label>
                                <input required type="text" name="<?php echo e($data['name']); ?>" class="form-control " placeholder="" />
                            </div>
                        </div>

                        <?php elseif($data['type'] == 'integer'): ?>

                        <div class="col-md-6 mb-3 mt-3 x_<?php echo e($data['name']); ?>">
                            <div class="mb-3">
                                <label class="required form-label"><?php echo e(ucfirst(FromCamelCase($data['name']))); ?></label>
                                <input required type="text" name="<?php echo e($data['name']); ?>" class="form-control IntOnlyNow" />
                            </div>
                        </div>

                        <?php elseif($data['type'] == 'date' || $data['type'] == 'datetime'): ?>

                        <div class="col-md-6 mb-3 mt-3 x_<?php echo e($data['name']); ?>">
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



                    <?php echo Form::hidden($name="CatID", $value=\Hash::make(uniqid()."PROJ".date('Y-m-d H:I:S')), [$options=null]); ?>





            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-dark" >Save Changes</button>

            </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/proj/activities/NewCat.blade.php ENDPATH**/ ?>