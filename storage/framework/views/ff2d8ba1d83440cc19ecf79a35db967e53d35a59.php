<div class="text-inverse-dark fs-3 bg-dark py-5 pb-5 ps-4 mb-5">
    <span class="p3-3 me-3"> Manage all leave rights for the staff member  </span>  <?php echo e($StaffName); ?>

  </div><!--begin::Card body--><!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewAssign", $Class="btn-danger", $Label="Assign Leave", $Icon="fa-plus")); ?>


          <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
              <thead>
                  <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                      <th>Staff Name</th>
                      <th>Asigned Leave</th>
                      <th>Entitled Days</th>
                      <th>Designation</th>
                      <th>Department </th>
                      <th>Staff Code </th>
                      <th>Description</th>
                      <th>Revoke</th>


                  </tr>
              </thead>
              <tbody>
                  <?php if(isset($Employees)): ?>
                  <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($data->StaffName); ?></td>
                      <td><?php echo e($data->LeaveType); ?></td>
                      <td><?php echo e($data->Days); ?></td>
                      <td><?php echo e($data->Designation); ?></td>
                      <td><?php echo e($data->Department); ?></td>
                      <td><?php echo e($data->StaffCode); ?></td>
                      <td>
                        <a data-bs-toggle="modal" href="#ViewLeaveDesc<?php echo e($data->id); ?>" class="btn btn-sm btn-dark">
                                 <i class="fas fa-binoculars" aria-hidden="true"></i>
                             </a>
                         </td>

                         <td>
                            <a data-msg="You want to revoke this  leave assignement" data-route="<?php echo e(route('RevokeLeaveRight', ['id'=>$data->AID])); ?>" data-bs-toggle="modal" href="#" class="btn btn-sm btn-danger deleteConfirm">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>



                 </td>



                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>



              </tbody>
          </table>
      </div>
<?php echo $__env->make('leave.ViewDesc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('leave.NewAssign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/hr/leave/Assign.blade.php ENDPATH**/ ?>