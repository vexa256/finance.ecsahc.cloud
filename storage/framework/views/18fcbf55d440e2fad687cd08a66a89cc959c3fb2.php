<div class="modal fade"  id="NewDonor">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Create a new donor record


                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                 <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewDonor')); ?>" class="row" method="POST" enctype= multipart/form-data>

                    <?php echo csrf_field(); ?>


                    <div class="row">

                        <div class="mb-3 mt-3 col-md-4" >
                            <label id="label" for="exampleFormControlInput1" class="required form-label">Donor Categories</label>
                            <select name="Category" required class="form-select form-control-sm  form-control" data-control="select2" data-placeholder="Select an option">
                                <option></option>


                               <option value="NGO or INGO">NGO or INGO</option>
                               <option value="Development Agency">Development Agency</option>
                               <option value="Individual">Individual</option>
                               <option value="University">University</option>
                               <option value="Foundation">Foundation</option>
                               <option value="Government">Government</option>

                               <option value="Other">Other</option>


                            </select>

                        </div>

                <div class="col-md-4 mb-3 mt-3" >
                    <label id="label" for="exampleFormControlInput1" class="required form-label">Country</label>
                    <select name="Country" required class="form-select form-control-sm  form-control" data-control="select2" data-placeholder="Select an option">
                        <option></option>
                       <?php if(isset($Countries)): ?>

                       <?php $__currentLoopData = $Countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                       <option value="<?php echo e($data->name); ?>"><?php echo e($data->name); ?></option>

                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <?php endif; ?>
                    </select>

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
                                <label class="required form-label"><?php echo e(ucfirst(FromCamelCase($data['name']))); ?> (UGX)</label>
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

                        <div class="col-md-12 mb-3 mt-3 x_<?php echo e($data['name']); ?>">
                            <div class="mb-3  x_insert" data-name="<?php echo e($data['name']); ?>">
                                <label class="required form-label"><?php echo e(ucfirst(FromCamelCase($data['name']))); ?> /Applicable Information</label>
                                <textarea name="<?php echo e($data['name']); ?>" class="form-control"></textarea>
                            </div>
                        </div>

                        <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>



                    <?php echo Form::hidden($name="DID", $value=\Hash::make(uniqid()."PROJ".date('Y-m-d H:I:S')), [$options=null]); ?>




            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-dark" >Save Changes</button>

            </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/proj/donors/NewDonor.blade.php ENDPATH**/ ?>