<div class="modal fade"  id="NewAssign">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Assign leave rights to selected staff member

                    <small class="text-danger">
                        This action has to be repeated annually i.e delete the assignment and re-assign a given leave category to a staff member. This resets available days.
                    </small>

                </h5>

                <!--begin::Close-->
                <a href="#MgtTaxes" class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                 <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </a>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('AcceptAssign')); ?>" class="row" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3 col-md-12" >
                        <label id="label" for="" class="required form-label">Choose Leave Category</label>
                        <select name="LID" style="height: 15px !important" required class="form-select form-control-sm  form-control" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                           <?php if(isset($LeaveTypes)): ?>

                           <?php $__currentLoopData = $LeaveTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <option value="<?php echo e($data->LID); ?>"><?php echo e($data->LeaveType); ?></option>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>

                    </div>

                    <input type="hidden" name="EmpID" value="<?php echo e($EmpID); ?>">



            </div>

            <div class="modal-footer">
                <a href="#MgtTaxes" id="StartMgt" data-bs-dismiss="modal" data-bs-toggle="modal" type="button" class="btn btn-info" >Close</a>

                <button type="submit" class="btn btn-danger" >Save Changes</button>

            </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/hr/leave/NewAssign.blade.php ENDPATH**/ ?>