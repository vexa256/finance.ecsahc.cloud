
  <div class="card-body pt-3 bg-light table-responsive">
      <?php echo e(HeaderBtn($Toggle="Pay", $Class="btn-danger", $Label="Pay Salary", $Icon="fa-plus")); ?>


      <?php echo e(HeaderBtn($Toggle="ViewBen", $Class="btn-dark", $Label="Benefits History", $Icon="fa-binoculars")); ?>



      <?php echo e(HeaderBtn($Toggle="ViewDed", $Class="btn-info", $Label=" Deductions History", $Icon="fa-binoculars")); ?>



      <?php echo e(HeaderBtn($Toggle="TaxLog", $Class="btn-dark", $Label=" Taxation History", $Icon="fa-binoculars")); ?>



  </div>
  <?php echo $__env->make('payroll.Stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="row">
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = $E->StaffName."| Payroll History", $Msg = "Payroll  transaction history for the selected staff member"); ?>

    </div>
</div>
  <div class="card-body mt-5 shadow-lg pt-5 bg-light table-responsive">
      <div class="row mt-5 ">
          <div class="col-md-12 ">

              <table class="table mytable table-rounded table-bordered  border gy-3 gs-3">
                  <thead>
                      <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                          <th>Staff Member</th>
                          <th>Staff Code</th>
                          <th>Net Salary </th>
                          <th>Gross Salary</th>
                          <th>Deductions</th>
                          <th>Benefits</th>
                          <th>Taxes</th>
                          <th>Month Paid</th>
                          <th>Calendar Year</th>
                          <th>Date Effected</th>
                          <th>Actions</th>


                      </tr>
                  </thead>
                  <tbody>
                      <?php if(isset($Payroll)): ?>
                      <?php $__currentLoopData = $Payroll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="">
                            <td><?php echo e($data->StaffName); ?></td>
                            <td><?php echo e($data->StaffCode); ?></td>
                            <td><?php echo e(number_format($data->SalaryPaid, 2)); ?> UGX</td>
                            <td><?php echo e(number_format($data->GrossSalary, 2)); ?> UGX</td>
                            <td><?php echo e(number_format($data->D, 2)); ?> UGX</td>
                            <td><?php echo e(number_format($data->Benefits, 2)); ?> UGX</td>
                            <td><?php echo e(number_format($data->Taxes, 2)); ?> UGX</td>
                            <td><?php echo e($data->Month); ?></td>
                            <td><?php echo e($data->Year); ?></td>
                            <td><?php echo e(date('d-M-Y', strtotime($data->CT))); ?></td>

<td class="row fs-6">
    <div class="dropdown">
        <button class="btn btn-sm  btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Action
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a data-bs-toggle="modal"  class="dropdown-item " href="#ViewDesc<?php echo e($data->id); ?>">HR Comments</a></li>
            <li><a data-route="<?php echo e(route('ReversePayroll', ['id'=>$data->PPID])); ?>" data-msg="You sure you want to reverse this payroll transaction. "  class="dropdown-item deleteConfirm" href="#">Reverse Transaction</a></li>


        </ul>
        </div>



</td>



                        </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>



                  </tbody>
              </table>
          </div>



      </div>


    </div>


    <?php echo $__env->make('payroll.Pay', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('payroll.ViewBen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('payroll.ViewDed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('payroll.ViewTax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo e(DescModal($Payroll, $Title="View HR note attached to the selected payroll transaction ", $ModalID="ViewDesc")); ?>

<?php /**PATH /var/www/html/africhild.mis/hr/payroll/Payroll.blade.php ENDPATH**/ ?>