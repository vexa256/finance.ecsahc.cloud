	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Name</th>
                    <th class="bg-dark text-light">Contract Status</th>
                    <th class="bg-dark text-light">Contract End</th>
                    <th class="bg-dark text-light">Months To Expiry</th>

                    <th>Expertise</th>
                    <th>Service Rendered</th>
                    <th>Gender</th>
                    <th>Reports To</th>
                    <th>Department</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($Employees)): ?>
                <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->Contractor); ?></td>

                    <td class="bg-danger text-light"> <?php echo e($data->RecordStatus); ?> </td>
                    <td><?php echo date('F j, Y', strtotime($data->ContractExpiry)); ?>

                  </td>
                    <td class="bg-dark text-light"><?php echo e($data->MonthsToExpiry); ?>


                            Month(s)

                    </td>
                    <td><?php echo e($data->Expertise); ?></td>
                    <td><?php echo e($data->ServiceRendered); ?></td>
                    <td><?php echo e($data->Gender); ?></td>
                    <td><?php echo e($data->ReportsTo); ?></td>
                    <td><?php echo e($data->Department); ?></td>




                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>
<?php /**PATH /var/www/html/africhild.mis/hr/cons/ConValidity.blade.php ENDPATH**/ ?>