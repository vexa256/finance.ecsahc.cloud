	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = $E->StaffName." | Staff Next of kins", $Msg = "View next of kins | Next of kin documents are stored under the staff documentation section"); ?>

    </div>
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewKin", $Class="btn-danger", $Label="New Next of Kin", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Name</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>ID Type</th>
                    <th>ID N.O</th>
                    <th>Relationship</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Permanent Address</th>
                    <th class="bg-dark text-light">Edit</th>
                    <th class="bg-dark text-light"> Delete</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($Kins)): ?>
                <?php $__currentLoopData = $Kins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($data->Name); ?></td>
                    <td><?php echo e($data->Gender); ?></td>
                    <td><?php echo date('F j, Y', strtotime($data->DateOfBirth)); ?>

                    </td>

                    <td><?php echo e($data->Email); ?></td>
                    <td><?php echo e($data->IdType); ?></td>
                    <td><?php echo e($data->IdNumber); ?></td>
                    <td><?php echo e($data->Relationship); ?></td>
                    <td><?php echo e($data->PhoneNumber); ?></td>
                    <td><?php echo e($data->CurrentAddress); ?></td>
                    <td><?php echo e($data->PermanentAddress); ?></td>

                   <td><a data-bs-toggle="modal" href="#Update<?php echo e($data->id); ?>" class="btn btn-sm btn-dark edit" href="#">
                        <i class="fas fa-edit" aria-hidden="true"></i>
                    </a>

                   </td>

                    <td>

                            <?php echo ConfirmBtn($data = [
                                'msg'   => 'You want to delete this next of kin record',
                                'route' => route('DelNOK' , ['id' => $data->id]),
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


    <?php echo $__env->make('kins.New', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(isset($Kins)): ?>
    <?php $__currentLoopData = $Kins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="<?php echo e(route('UpdateLogic')); ?>" class="row" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    <?php echo e(RunUpdateModal(
        $ModalID = $data->id,
        $Extra = null,
        $csrf = '<?php echo csrf_field(); ?>',
        $Title ="Update the selected next of kin record",
        $RecordID =  $data->id,
        $col ='4',
        $te = '12',
        $TableName ="kins"
        )); ?>


</form>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>
<?php /**PATH /var/www/html/africhild.mis/hr/kins/Kins.blade.php ENDPATH**/ ?>