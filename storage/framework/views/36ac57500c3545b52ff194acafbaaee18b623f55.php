	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "Salary Deductions", $Msg = "Manage all supported salary deductions"); ?>

    </div>
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="New", $Class="btn-danger", $Label="New Deduction", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Deduction</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Edit</th>

                    <th class="bg-dark text-light"> Delete</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($Deductions)): ?>
                <?php $__currentLoopData = $Deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($data->Deduction); ?></td>
                    <td><?php echo e(number_format($data->Amount)); ?> UGX</td>
                    <td>

                        <a data-bs-toggle="modal"  class="btn btn-danger btn-sm" href="#ViewDesc<?php echo e($data->id); ?>">

                            <i class="fas fa-binoculars" aria-hidden="true"></i>
                        </a>

                    </td>
                    <td><a data-bs-toggle="modal" href="#Update<?php echo e($data->id); ?>" class="btn btn-sm btn-dark edit" href="#">
                        <i class="fas fa-edit" aria-hidden="true"></i>
                    </a>

                   </td>

                    <td>

                            <?php echo ConfirmBtn($data = [
                                'msg'   => 'You want to delete this salary deduction category',
                                'route' => route('DelDed' , ['id' => $data->id]),
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



    <?php echo $__env->make('deductions.New', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if(isset($Deductions)): ?>
    <?php $__currentLoopData = $Deductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="<?php echo e(route('UpdateLogic')); ?>" class="row" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    <?php echo e(RunUpdateModal(
        $ModalID = $data->id,
        $Extra = null,
        $csrf = '<?php echo csrf_field(); ?>',
        $Title ="Update the selected deduction category record",
        $RecordID =  $data->id,
        $col ='6',
        $te = '12',
        $TableName ="deductions"
        )); ?>


</form>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>

    <?php echo e(DescModal($Deductions, $Title="View the description  attached to selected salary deduction", $ModalID="ViewDesc")); ?>

<?php /**PATH /var/www/html/africhild.mis/hr/deductions/Mgt.blade.php ENDPATH**/ ?>