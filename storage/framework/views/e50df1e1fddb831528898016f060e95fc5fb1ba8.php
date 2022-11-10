<div class="modal fade" id="NewAcc">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Create a new user account
                </h5>

                <!--begin::Close-->
                <a href="#MgtTaxes" class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </a>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewRoles')); ?>" class="row" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="col-md-4 mb-3 mt-3 x_Deduction">
                        <div class="mb-3"><label class="required form-label">AfriChild Email</label>
                            <input required="" type="text" name="Email" class="form-control " placeholder="">
                        </div>
                    </div>

                    <div class="mb-3 mt-3 col-md-4">
                        <label id="label" for="" class="required form-label">Select Staff Member</label>
                        <select name="id" required class="form-select form-control-sm  form-control"
                            data-control="select2" data-placeholder="Select an option">
                            <option></option>
                            <?php if(isset($Staff)): ?>

                                <?php $__currentLoopData = $Staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->StaffName); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>

                    </div>


                    <div class="mb-3 mt-3 col-md-4">
                        <label id="label" for="" class="required form-label">Select Account Role</label>
                        <select name="role" required class="form-select form-control-sm  form-control"
                            data-control="select2" data-placeholder="Select an option">
                            <option></option>


                            <option value="superadmin">Executive Director</option>
                            <option value="staffaccount">Staff Account</option>
                            <option value="hrandfinance">HR and Finance</option>
                            <option value="projectmanager">Project Manager</option>
                            <option value="sysadmin">System Administrator</option>


                        </select>

                    </div>


            </div>

            <div class="modal-footer">
                <a href="#MgtTaxes" id="StartMgt" data-bs-dismiss="modal" data-bs-toggle="modal" type="button"
                    class="btn btn-info">Close</a>

                <button type="submit" class="btn btn-danger">Save Changes</button>

                </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/hr/users/New.blade.php ENDPATH**/ ?>