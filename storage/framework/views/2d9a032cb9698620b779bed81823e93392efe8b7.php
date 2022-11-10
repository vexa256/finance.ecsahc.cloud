<?php if(isset($Employees)): ?>
<?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade"  id="BankDetails<?php echo e($data->id); ?>">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bank details for the contractor

                    <span class="text-danger font-bold">

                        <?php echo e($data->Contractor); ?>

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
                    <th>Professional Fees</th>
                    <th>Bank Name</th>
                    <th>Bank Branch</th>
                    <th>Account Holder</th>
                    <th>Account N.O</th>
                    <th>ID or Reg N.O</th>







                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?php echo e($data->Contractor); ?></td>
                    <td><?php echo e(number_format($data->ProfessionalFees, 2)); ?> UGX</td>
                    <td><?php echo e($data->BankName); ?></td>
                    <td><?php echo e($data->BankBranch); ?></td>
                    <td><?php echo e($data->AccountName); ?></td>
                    <td><?php echo e($data->AccountNumber); ?></td>
                    <td><?php echo e($data->IdOrRegNumber); ?></td>







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
<?php /**PATH /var/www/html/africhild.mis/hr/cons/Bank.blade.php ENDPATH**/ ?>