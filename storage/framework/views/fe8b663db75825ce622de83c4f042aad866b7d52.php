	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewEmp", $Class="btn-danger", $Label="New Staff", $Icon="fa-plus")); ?>


          <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
              <thead>
                  <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                      <th>Name</th>
                      <th>Contract End</th>
                      <th>Code</th>
                      <th>Role</th>
                      <th>Gender</th>
                      <th>Supervisor</th>
                      <th>Dept</th>
                      <th>Edit</th>
                      <th>Trash</th>
                      <th class="bg-dark text-light"> Actions</th>

                  </tr>
              </thead>
              <tbody>
                  <?php if(isset($Employees)): ?>
                  <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($data->StaffName); ?></td>
                      <td><?php echo e(date('j, M, Y', strtotime($data->ContractExpiry))); ?>

                    </td>
                      <td><?php echo e($data->StaffCode); ?></td>
                      <td><?php echo e($data->Designation); ?></td>
                      <td><?php echo e($data->Gender); ?></td>
                      <td><?php echo e($data->ReportsTo); ?></td>
                      <td><?php echo e($data->Department); ?></td>
                      <td>

                        <a href="#Update<?php echo e($data->id); ?>" data-bs-toggle="modal"  class="btn shadow-lg btn-danger  btn-sm" >

                            <i class="fas fa-edit" aria-hidden="true"></i>

                        </a>

                  </td>
                      <td>

                            <a href="#" data-route="<?php echo e(route('DelEmp', ['id'=>$data->id])); ?>" data-msg="You want to delete this staff member's records"   class="btn shadow-lg btn-danger deleteConfirm btn-sm">

                                <i class="fas fa-trash" aria-hidden="true"></i>

                            </a>

                      </td>

                      <td class="row fs-6">
                          <div class="col-md-6">
                              <div class="dropdown">
                                  <button class="btn btn-sm  btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                   HR Actions
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a data-route="<?php echo e(route('TerminateContract', ['id'=>$data->id])); ?>" data-msg="You sure you want to end this staff member's contract"  class="dropdown-item deleteConfirm" href="#">End Contract</a></li>

                                    <li><a data-bs-toggle="modal"  class="dropdown-item " href="#PersonalDetails<?php echo e($data->id); ?>">Personal Details</a></li>

                                    <li><a data-bs-toggle="modal"  class="dropdown-item " href="#BankDetails<?php echo e($data->id); ?>">Bank Details</a></li>

                                    <li><a data-bs-toggle="modal"  class="dropdown-item " href="#Extend<?php echo e($data->id); ?>">Extend contract</a></li>







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
      <!--end::Card body-->

      <?php echo $__env->make('emp.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('emp.NewEmp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('emp.BankDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('emp.PersonalDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('emp.Extend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/hr/emp/MgtEmp.blade.php ENDPATH**/ ?>