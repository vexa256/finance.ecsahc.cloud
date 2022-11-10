	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewEmp", $Class="btn-danger", $Label="New Contractor", $Icon="fa-plus")); ?>


          <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
              <thead>
                  <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                      <th>Contractor</th>
                      <th>Contact Person</th>
                      <th>Expertise</th>
                      <th>Service Rendered</th>
                      <th>Category</th>
                      <th>Reports To</th>
                      <th>Department</th>
                      <th>Delete</th>
                      <th class="bg-dark text-light"> Actions</th>

                  </tr>
              </thead>
              <tbody>
                  <?php if(isset($Employees)): ?>
                  <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($data->Contractor); ?></td>
                      <td><?php echo e($data->ContactPerson); ?></td>

                      <td><?php echo e($data->Expertise); ?></td>
                      <td><?php echo e($data->ServiceRendered); ?></td>
                      <td><?php echo e($data->Category); ?></td>
                      <td><?php echo e($data->ReportsTo); ?></td>
                      <td><?php echo e($data->Department); ?></td>
                      <td>

                            <a href="#" data-route="<?php echo e(route('DelCon', ['id'=>$data->id])); ?>" data-msg="You want to delete this contractor's records"   class="btn shadow-lg btn-danger deleteConfirm btn-sm">

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
                                    <li><a data-route="<?php echo e(route('ConContractTerm', ['id'=>$data->id])); ?>" data-msg="You sure you want to end this contractor's contract"  class="dropdown-item deleteConfirm" href="#">End Contract</a></li>

                                    <li><a data-bs-toggle="modal"  class="dropdown-item " href="#PersonalDetails<?php echo e($data->id); ?>">Personal Details</a></li>

                                    <li><a data-bs-toggle="modal"  class="dropdown-item " href="#BankDetails<?php echo e($data->id); ?>">Bank Details</a></li>


                                    <li><a data-bs-toggle="modal"  class="dropdown-item " href="#ViewDesc<?php echo e($data->id); ?>">More Details</a></li>







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

      <?php echo $__env->make('cons.NewCon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('cons.Bank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('cons.Personal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php echo e(DescModal($Employees, $Title="View  more details/description  attached to selected contractor's records", $ModalID="ViewDesc")); ?>

<?php /**PATH /var/www/html/africhild.mis/hr/cons/MgtCons.blade.php ENDPATH**/ ?>