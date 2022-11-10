<div class="modal fade"  id="NewApp">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Leave application form | Send any pdf attachments by email. Photo attachments can be sent using this interface
                </h5>

                <!--begin::Close-->
                <a href="#" class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                 <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </a>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewApp')); ?>" class="row" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3 col-md-2" >
                        <label id="label" for="" class="required form-label">Start Date </label>
                        <input type="text" required   name="StartDate" class="   form-control DateArea form-control-solid" />
                    </div>

                    <div class="mb-3 col-md-2" >
                        <label id="label" for="" class="required form-label">End Date </label>
                        <input type="text" required   name="EndDate" class="   form-control DateArea form-control-solid" />
                    </div>

                    <input type="hidden" name="TheDateToday" value="<?php echo e(date('Y-m-d')); ?>">

                    <div class="mb-3 col-md-2" >
                        <label id="label" for="" class="required form-label">Choose Leave Category</label>
                        <select name="LID" required class="form-select  form-control" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                           <?php if(isset($LeaveTypes)): ?>

                           <?php $__currentLoopData = $LeaveTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <option value="<?php echo e($data->LID); ?>"><?php echo e($data->LeaveType); ?></option>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>

                    </div>

                    <div class="mb-3 col-md-3" >
                        <label id="label" for="" class="required form-label">Select Supervisor</label>
                        <select name="Supervisor" required class="form-select  form-control" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                           <?php if(isset($Sup)): ?>

                           <?php $__currentLoopData = $Sup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <option value="<?php echo e($data->id); ?>"><?php echo e($data->StaffName); ?></option>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>

                    </div>


                    <div class="mb-3 col-md-3" >
                        <label  for="" class="required form-label">Days applied for</label>
                        <input type="text" required   name="DaysAppliedFor" class="   form-control IntOnlyNow form-control-solid" />
                    </div>

                    <input type="hidden" name="EmpID" value="<?php echo e($EmpID); ?>">


                <div class="mb-3 col-md-12 pt-3 mt-3">
                    <label id="label" for="" class="required form-label">Leave Application Letter </label>
                     <textarea    name="AppLetter"></textarea>

                </div>



            </div>

            <div class="modal-footer">
                <a href="#MgtTaxes" id="StartMgt" data-bs-dismiss="modal" data-bs-toggle="modal" type="button" class="btn btn-info" >Close</a>

                <button type="submit" class="btn btn-danger" >Apply for Leave</button>

            </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/hr/leave/NewApp.blade.php ENDPATH**/ ?>