<div class="modal fade"  id="Approved">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">All leave requests approved by <?php echo e(Auth::user()->name); ?>

                </h5>

                <!--begin::Close-->
                <a href="#MgtTaxes" class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                 <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </a>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

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
                        <?php if(isset($ApprovedApps)): ?>
                        <?php $__currentLoopData = $ApprovedApps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                                    <li><a data-bs-toggle="modal"  class="dropdown-item " href="#AppComms<?php echo e($data->id); ?>">Supervisor Comments </a></li>


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

            <div class="modal-footer">
                <a href="#MgtTaxes" id="StartMgt" data-bs-dismiss="modal" data-bs-toggle="modal" type="button" class="btn btn-info" >Close</a>


            </div>


    </div>
</div>
</div>

<?php /**PATH /var/www/html/africhild.mis/hr/leave/Approved.blade.php ENDPATH**/ ?>