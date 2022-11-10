<div class="text-inverse-dark fs-6 bg-dark py-5 pb-5 ps-4 mb-5">
    <span class="p3-3 me-3"> Hello , <?php echo e(Auth::user()->name); ?>, Use this interface to  manage leave requests of staff members you supervise
  </div><!--begin::Card body--><!--begin::Card body-->


  <div class="alert bg-primary">
    <h3 class="h3 text-light">

       Leave requests pending your approval

    </h3>
</div>


    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="Approved", $Class="btn-danger", $Label="Approved Requests", $Icon="fa-check")); ?>


        <?php echo e(HeaderBtn($Toggle="Declined", $Class="btn-dark", $Label="Declined Requests", $Icon="fa-times")); ?>


          <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
              <thead>
                  <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">

                      <th>Leave</th>
                      <th>Staff Name</th>
                      <th>Leave Days</th>
                      <th>Days requested</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Spent Days</th>
                      <th>Unused Days</th>
                      <th class="bg-danger text-light">Approval</th>
                      <th class="bg-dark text-light">Validity</th>
                      <th>Actions</th>


                  </tr>
              </thead>
              <tbody>
                  <?php if(isset($Apps)): ?>
                  <?php $__currentLoopData = $Apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>

                      <td><?php echo e($data->LeaveCategory); ?></td>
                      <td><?php echo e($data->StaffName); ?></td>
                      <td><?php echo e($data->AssignedDays); ?></td>
                      <td><?php echo e($data->DaysAppliedFor); ?></td>
                      <td><?php echo e(date('j F, Y', strtotime($data->StartDate))); ?></td>
                      <td><?php echo e(date('j F, Y', strtotime($data->EndDate))); ?></td>
                      <td><?php echo e($data->SpentDays); ?></td>
                      <td><?php echo e($data->UnusedDays); ?></td>
                      <td class="bg-danger text-light"><?php echo e($data->ApprovalStatus); ?></td>
                      <td class="bg-dark text-light"><?php echo e($data->ValidityStatus); ?></td>



                 <td class="row fs-6">
                    <div class="col-md-12">
                        <div class="dropdown">
                            <button class="btn btn-sm  btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                             More
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">


                              <li><a data-bs-toggle="modal"  class="dropdown-item " href="#AppLetter<?php echo e($data->id); ?>">Leave Letter </a></li>

                              <li><a data-bs-toggle="modal"  class="dropdown-item " href="#ApproveLeave<?php echo e($data->id); ?>">Approve Request</a></li>

                              <li><a data-bs-toggle="modal"  class="dropdown-item " href="#DeclineLeave<?php echo e($data->id); ?>">Decline Request</a></li>







                            </ul>
                          </div>


                    </div>
                </td>



                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>



              </tbody>
          </table>
      </div>
<?php echo $__env->make('leave.Approve', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('leave.Approved', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('leave.AppLetter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('leave.AppComments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('leave.Declined', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('leave.Decline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /var/www/html/africhild.mis/hr/leave/Approval.blade.php ENDPATH**/ ?>