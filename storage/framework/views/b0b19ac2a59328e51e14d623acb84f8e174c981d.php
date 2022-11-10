
<div class="card-body pt-3 bg-light table-responsive">
    <?php echo e(HeaderBtn($Toggle="AssignBen", $Class="btn-danger", $Label="New Benefit", $Icon="fa-plus")); ?>


    <?php echo e(HeaderBtn($Toggle="AssignDed", $Class="btn-dark", $Label="New Deduction", $Icon="fa-plus")); ?>


    <?php echo e(HeaderBtn($Toggle="TaxAssign", $Class="btn-info", $Label="New Tax", $Icon="fa-cogs")); ?>

</div>
<div class="row">
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = $E->StaffName."| Payroll settings", $Msg = "Manage payroll settings for the selected staff member"); ?>

    </div>
</div>
<?php echo $__env->make('payroll.Stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
    <div class="col-md-4">
        <h3 class="h3">
            Assigned Benefits
        </h3>
        <table class="table  table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Benfit</th>
                    <th>Amount</th>
                    <th>Reverse Assignment</th>


                </tr>
            </thead>
            <tbody>
                <?php if(isset($AssignedBenefits)): ?>
                <?php $__currentLoopData = $AssignedBenefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->Benefit); ?></td>
                    <td><?php echo e(number_format($data->Amount)); ?> UGX</td>

                    <td><a data-route="<?php echo e(route('DeleteBenefit', ['id'=>$data->BIID])); ?>" data-msg="You sure you want to reverse this salary benefit assignment. "  class="btn-danger btn btn-sm deleteConfirm" href="#">Delete</a></td>




                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>

    <div class="col-md-4">
        <h3 class="h3">
            Assigned Deductions
        </h3>
        <table class="table  table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Deduction</th>
                    <th>Amount</th>
                    <th>Reverse Assignment</th>


                </tr>
            </thead>
            <tbody>
                <?php if(isset($AssignedDeductions)): ?>
                <?php $__currentLoopData = $AssignedDeductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->Deduction); ?></td>
                    <td><?php echo e(number_format($data->Amount)); ?> UGX</td>

                    <td><a data-route="<?php echo e(route('DeleteDeduction', ['id'=>$data->DIID])); ?>" data-msg="You sure you want to reverse this salary deduction assignment. "  class="btn-danger btn btn-sm deleteConfirm" href="#">Delete</a></td>




                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>



    <div class="col-md-4">
        <h3 class="h3">
            Assigned Taxes
        </h3>
        <table class="table  table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Tax</th>
                    <th>Percentage</th>
                    <th>Reverse Assignment</th>


                </tr>
            </thead>
            <tbody>
                <?php if(isset($AssignedTaxes)): ?>
                <?php $__currentLoopData = $AssignedTaxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->Tax); ?></td>
                    <td><?php echo e($data->Percentage); ?> %</td>

                    <td><a data-route="<?php echo e(route('DeleteTaxAssign', ['id'=>$data->TIID])); ?>" data-msg="You sure you want to reverse this salary tax assignment. "  class="btn-danger btn btn-sm deleteConfirm" href="#">Delete</a></td>




                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>



</div>


<?php echo $__env->make('payroll.AssignBen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('payroll.AssignDed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('payroll.AssignTax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/hr/payroll/Settings.blade.php ENDPATH**/ ?>