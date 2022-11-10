	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Name</th>
                    <th class="bg-dark text-light">Contract Status</th>
                    <th class="bg-dark text-light">Contract End</th>
                    <th class="bg-dark text-light">Months To Expiry</th>

                    <th>Role</th>
                    <th>Gender</th>
                    <th>Supervisor</th>
                    <th>Dept</th>
                    <th>Extend validity</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($Employees)): ?>
                <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->StaffName); ?></td>

                    <td class="bg-danger text-light"> <?php echo e($data->RecordStatus); ?> </td>
                    <td><?php echo date('F j, Y', strtotime($data->ContractExpiry)); ?>

                  </td>
                    <td class="bg-dark text-light"><?php echo e($data->MonthsToExpiry); ?>


                            Month(s)

                    </td>
                    <td><?php echo e($data->Designation); ?></td>
                    <td><?php echo e($data->Gender); ?></td>
                    <td><?php echo e($data->ReportsTo); ?></td>
                    <td><?php echo e($data->Department); ?></td>
                    <td><a data-bs-toggle="modal"  class="btn btn-danger btn-sm" href="#Extend<?php echo e($data->id); ?>">Extend </a></td>




                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>

    <?php echo $__env->make('emp.Extend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/hr/emp/SoonExp.blade.php ENDPATH**/ ?>