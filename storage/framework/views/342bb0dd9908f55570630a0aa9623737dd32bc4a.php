	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "User Account Management", $Msg = "Manage all  user accounts"); ?>

    </div>
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewAcc", $Class="btn-danger", $Label="New User Account", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Account Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Account Role</th>
                    <th>Date Created</th>
                    <th class="bg-dark text-light"> Delete</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($User)): ?>
                <?php $__currentLoopData = $User; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->email); ?></td>
                    <td><?php echo e($data->role); ?></td>
                    <td><?php echo e(date('j F, Y', strtotime($data->created_at))); ?>

                    </td>



                    <td>

                            <?php echo ConfirmBtn($data = [
                                'msg'   => 'You want to delete this user  account',
                                'route' => route('DelUserAccount' , ['id' => $data->id]),
                                'label' => '<i class="fas fa-trash"></i>',
                                'class' => 'btn btn-danger btn-sm deleteConfirm',

                            ]); ?>


                    </td>





                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>
    <!--end::Card body-->


<?php echo $__env->make('users.New', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/hr/users/Mgt.blade.php ENDPATH**/ ?>