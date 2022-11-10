<div class="card-body pt-3 bg-light shadow-lg table-responsive">
    <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "View grant validity  details", $Msg = "Grant validity report"); ?>


</div>



<div class="card-body shadow-lg pt-3 bg-light table-responsive">


    <div class="col-md-12">

        <table class="table mytable table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">

                    <th class="bg-dark text-light">Grant</th>
                    <th class="bg-danger text-light">End Date</th>
                    <th style="background-color: #ff8f00 !important " class="fw-bolder text-dark">Validity in Months</th>
                    <th style="background-color: #ff8f00 !important " class="fw-bolder text-dark">Validity Status</th>




                </tr>
            </thead>
            <tbody>
                <?php if(isset($Grants)): ?>
                <?php $__currentLoopData = $Grants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>

                    <td class="bg-dark text-light"><?php echo e($data->GrantName); ?></td>
                    <td><?php echo e(date('j F, Y', strtotime($data->GrantExpiry))); ?>

                    </td>
                    <td style="background-color: #ff8f00 !important " class="fw-bolder text-dark"><?php echo e($data->ValidityMonths); ?> Months</td>
                    <td style="background-color: #ff8f00 !important " class="fw-bolder text-dark"><?php echo e($data->status); ?> </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/proj/grants/Validity.blade.php ENDPATH**/ ?>