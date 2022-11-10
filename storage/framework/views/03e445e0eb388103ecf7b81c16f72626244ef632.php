<?php if(isset($Roles)): ?>
    <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="Update<?php echo e($data->id); ?>">
            <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-he]ader bg-gray">
                        <h5 class="modal-title">Update the staff role

                            <span class="text-danger">
                                <?php echo e($data->Designation); ?>

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

                        <form action="<?php echo e(route('UpdateLogic')); ?>" class="row" method="POST"
                            enctype=multipart/form-data> <?php echo csrf_field(); ?> <div class="row">

                                <div class="mb-3 mt-3 col-md-6">
                                    <label id="label" for="exampleFormControlInput1"
                                        class="required form-label">Department</label>
                                    <select name="Department" required class="form-select form-control-sm  form-control"
                                        data-control="select2" data-placeholder="Select an option">
                                        <option></option>
                                        <?php if(isset($Departments)): ?>
                                            <?php $__currentLoopData = $Departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($data->DepartmentName); ?>"><?php echo e($data->DepartmentName); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>

                                </div>



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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/africhild.mis/resources/views/Depts/Update.blade.php ENDPATH**/ ?>