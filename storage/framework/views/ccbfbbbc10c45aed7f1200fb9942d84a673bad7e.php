
        <?php if(isset($Employees)): ?>
        <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $up): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="Update<?php echo e($up->id); ?>">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Update selected  record for the staff member

                    <span class="text-primary">

                        <?php echo e($up->StaffName); ?>


                    </span>
                    <small class="text-danger">
                        (Applicable PDF uploads should be added to the staff documentation section)
                    </small>

                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('UpdateEmp')); ?>" class="row" method="POST" enctype=multipart/form-data> <?php echo csrf_field(); ?> <div
                    class="row">
                    <div class="mb-3 mt-3 col-md-3">
                        <label id="label" for="exampleFormControlInput1" class="required form-label">Department</label>
                        <select name="Department" required class="form-select form-control-sm  form-control"
                            data-control="select2" data-placeholder="Select an option">
                            <option value="<?php echo e($up->Department); ?>">
                                <?php echo e($up->Department); ?></option>
                            <?php if(isset($Departments)): ?>

                            <?php $__currentLoopData = $Departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option value="<?php echo e($data->DepartmentName); ?>"><?php echo e($data->DepartmentName); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>

                    </div>
                    <div class="mb-3 mt-3 col-md-3">
                        <label id="label" for="exampleFormControlInput1" class="required form-label">Reports To</label>
                        <select name="ReportsTo" required class="form-select form-control-sm  form-control"
                            data-control="select2" data-placeholder="Select an option">
                            <option value="<?php echo e($up->ReportsTo); ?>">
                                <?php echo e($up->ReportsTo); ?></option>
                            <?php if(isset($Roles)): ?>

                            <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option value="<?php echo e($data->Designation); ?>"><?php echo e($data->Designation); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>

                    </div>

                    <div class="mb-3 mt-3 col-md-3">
                        <label id="label" for="exampleFormControlInput1" class="required form-label">Gender</label>
                        <select name="Gender" required class="form-select form-control-sm  form-control"
                            data-control="select2" data-placeholder="Select an option">
                            <option value="<?php echo e($up->Gender); ?>"><?php echo e($up->Gender); ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>


                        </select>

                    </div>

                    <div class="mb-3 mt-3 col-md-3">
                        <label id="label" for="exampleFormControlInput1" class="required form-label">Designation</label>
                        <select name="Designation" required class="form-select form-control-sm  form-control"
                            data-control="select2" data-placeholder="Select an option">
                            <option value="<?php echo e($up->Designation); ?>">
                                <?php echo e($up->Designation); ?></option>
                            <?php if(isset($Roles)): ?>

                            <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option value="<?php echo e($des->Designation); ?>"><?php echo e($des->Designation); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>

                    </div>


<?php echo e(UpdateString($name = 'StaffName', $label = 'Staff Name', $value = $up->StaffName)); ?>


<?php echo e(UpdateString($name = 'PhoneNumber', $label = 'Phone Number', $value = $up->PhoneNumber)); ?>


<?php echo e(UpdateString($name = 'Email', $label = 'Email', $value = $up->Email)); ?>


<?php echo e(UpdateString($name = 'LocalAddress', $label = 'Local Address', $value = $up->LocalAddress)); ?>


<?php echo e(UpdateString($name = 'Nationality', $label = 'Nationality', $value = $up->Nationality)); ?>


<?php echo e(UpdateString($name = 'PermanentAddress', $label = 'Permanent Address', $value = $up->PermanentAddress)); ?>


<?php echo e(UpdateString($name = 'NIN', $label = 'NIN', $value = $up->NIN)); ?>


<?php echo e(UpdateInteger($name = 'MonthlySalary', $label = 'Monthly Salary', $value = $up->MonthlySalary)); ?>


<?php echo e(UpdateString($name = 'StaffCode', $label = 'Staff Code', $value = $up->StaffCode)); ?>


<?php echo e(UpdateDate($name = 'JoiningDate', $label = 'Joining Date', $value = $up->JoiningDate)); ?>


<?php echo e(UpdateDate($name = 'ContractExpiry', $label = 'Contract Expiry', $value = $up->ContractExpiry)); ?>


<?php echo e(UpdateDate($name = 'DOB', $label = 'DOB', $value = $up->DOB)); ?>


<?php echo e(UpdateString($name = 'BankName', $label = 'Bank Name', $value = $up->BankName)); ?>


<?php echo e(UpdateString($name = 'BankBranch', $label = 'Bank Branch', $value = $up->BankBranch)); ?>


<?php echo e(UpdateString($name = 'AccountName', $label = 'Account Name', $value = $up->AccountName)); ?>


<?php echo e(UpdateString($name = 'AccountNumber', $label = 'Account Number', $value = $up->AccountNumber)); ?>


<?php echo e(UpdateString($name = 'TIN', $label = 'TIN', $value = $up->TIN)); ?>


<?php echo e(UpdateString($name = 'BankCode', $label = 'Bank Code', $value = $up->BankCode )); ?>


<?php echo e(UpdateString($name = 'BankCode', $label = 'Bank Code', $value = $up->BankCode )); ?>


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

<?php /**PATH /var/www/html/finance.ecsa/hr/emp/update.blade.php ENDPATH**/ ?>