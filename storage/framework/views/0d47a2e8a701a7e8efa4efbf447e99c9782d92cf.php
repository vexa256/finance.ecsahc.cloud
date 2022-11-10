	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewDept", $Class="btn-danger", $Label="New Department", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Department Name</th>
                    <th>About Department</th>

                    <th class="bg-dark text-light"> Actions</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($Departments)): ?>
                <?php $__currentLoopData = $Departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->DepartmentName); ?></td>
                    <td>
                        <a data-bs-toggle="modal" href="#DeptDesc<?php echo e($data->id); ?>" class="btn btn-sm btn-dark">
                            <i class="fas fa-binoculars" aria-hidden="true"></i>
                        </a>
                    </td>



                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm  btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                             Choose Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                              <li><a data-bs-toggle="modal" href="#Update<?php echo e($data->id); ?>" class="dropdown-item " href="#">Update</a></li>


                              <li><a data-msg="You want to delete this department, This action is not reversible!!" data-route="<?php echo e(route('DeleteDept', ['id'=>$data->id])); ?>" class="dropdown-item deleteConfirm" href="#">Delete</a></li>

                            </ul>
                          </div>
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>

    <!--end::Card body-->

    <?php echo $__env->make("Depts.NewDept", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make("Depts.Desc", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make("Depts.Update", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/hr/Depts/MgtDepts.blade.php ENDPATH**/ ?>