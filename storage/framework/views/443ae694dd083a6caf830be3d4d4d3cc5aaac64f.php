<?php if(isset($Employees)): ?>
<?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade"  id="PersonalDetails<?php echo e($data->id); ?>">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personal details for the staff member

                    <span class="text-danger font-bold">

                        <?php echo e($data->StaffName); ?>

                    </span>
                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                 <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Local Address</th>
                    <th>Permanent Address</th>
                    <th>NIN</th>

                    <th>Nationality</th>
                    <th>DOB</th>
                    <th>Joining Date</th>





                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?php echo e($data->StaffName); ?></td>
                    <td><?php echo e($data->PhoneNumber); ?></td>
                    <td><?php echo e($data->Email); ?></td>
                    <td><?php echo e($data->LocalAddress); ?></td>
                    <td><?php echo e($data->PermanentAddress); ?></td>
                    <td><?php echo e($data->NIN); ?></td>

                    <td><?php echo e($data->Nationality); ?></td>

                    <td><?php echo e(date('d-M-Y', strtotime($data->DOB))); ?></td>
                    <td><?php echo e(date('d-M-Y', strtotime($data->JoiningDate))); ?></td>


                </tr>




            </tbody>
        </table>
    </div>
    <!--end::Card body-->

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>


            </div>

        </div>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/finance.ecsa/hr/emp/PersonalDetails.blade.php ENDPATH**/ ?>