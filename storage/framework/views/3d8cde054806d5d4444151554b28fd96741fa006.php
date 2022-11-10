<div class="card-body pt-3 bg-light table-responsive">
    <?php echo e(HeaderBtn($Toggle="NewDonor", $Class="btn-danger", $Label="New Donor", $Icon="fa-plus")); ?>



</div>
<div class="card-body shadow-lg pt-3 bg-light table-responsive">
    <div class="row">
        <div class="col-md-12">

            <table class="table mytable table-rounded table-bordered  border gy-3 gs-3">
                <thead>
                    <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">

                        <th>Donor</th>
                        <th>Contact Person</th>
                        <th> Email</th>
                        <th> Phone</th>
                        <th> Address</th>
                        <th>Category</th>
                        <th>Country</th>
                        <th>Date Registered</th>
                        <th>Donor Details</th>
                        <th>Actions</th>



                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($Donors)): ?>
                    <?php $__currentLoopData = $Donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>

                        <td><?php echo e($data->Name); ?></td>
                        <td><?php echo e($data->ContactPerson); ?></td>
                        <td><?php echo e($data->Email); ?></td>
                        <td><?php echo e($data->Phone); ?></td>
                        <td><?php echo e($data->Address); ?></td>
                        <td><?php echo e($data->Category); ?></td>
                        <td><?php echo e($data->Country); ?></td>
                        <td><?php echo e(date('j F, Y', strtotime($data->created_at))); ?>

                        </td>
                        <td><a   data-bs-toggle="modal" href="#Details<?php echo e($data->id); ?>" class="btn btn-sm  btn-dark"> <i class="fas fa-binoculars" aria-hidden="true"></i> </a></td>

                        <td class="row fs-6">

                                <div class="dropdown">
                                    <button class="btn btn-sm  btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a  href="javascript:void(0);" data-route="<?php echo e(route('DelDonor', ['id'=>$data->id])); ?>" data-msg="You sure you want to delete this donor. This action is not reversible"  class="dropdown-item deleteConfirm" >Delete</a></li>
                                      <li><a data-bs-toggle="modal"  href="#UpDonor<?php echo e($data->id); ?>" class="dropdown-item " >Update</a></li>




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
  <!--end::Card body-->

  <?php echo $__env->make('donors.NewDonor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('donors.Details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('donors.Update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /var/www/html/africhild.mis/proj/donors/MgtDonors.blade.php ENDPATH**/ ?>