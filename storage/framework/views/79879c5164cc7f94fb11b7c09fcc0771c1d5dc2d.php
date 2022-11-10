<div class="row">

    <div class="col-md-6 card-body shadow-lg pt-3 bg-light table-responsive">

        <?php echo $chart->container(); ?>


    </div>

    <div class="col-md-6 card-body shadow-lg pt-3 bg-light table-responsive">

        <?php echo $chart2->container(); ?>


    </div>
    <div class="card-body   bg-light table-responsive">


        <div class="col-md-12">

            <table class="table mytable table-rounded table-bordered  border gy-3 gs-3">
                <thead>
                    <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">

                        <th class="bg-dark text-light">Grant</th>
                        <th class="bg-danger text-light">End Date</th>
                        <th class="bg-danger text-light">Validity in Years</th>
                        <th class="bg-danger text-light">Validity Status</th>




                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($Grants)): ?>
                    <?php $__currentLoopData = $Grants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>

                        <td class="bg-dark text-light"><?php echo e($data->GrantName); ?></td>
                        <td><?php echo e(date('j F, Y', strtotime($data->GrantExpiry))); ?>

                        </td>
                        <td class="bg-dark text-light"><?php echo e(number_format($data->ValidityMonths/12, 1)); ?> Year(s)</td>
                        <td class="bg-dark text-light"><?php echo e($data->status); ?> </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>



                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/proj/analytics/GrantVal.blade.php ENDPATH**/ ?>