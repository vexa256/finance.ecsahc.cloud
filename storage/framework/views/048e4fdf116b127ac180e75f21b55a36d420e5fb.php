	<!--begin::Card body-->
    <div class="card-body pt-3 text-light  bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "Non-Salary benefits", $Msg = "Manage non-salary benefits | Non-salary benefits are assigned to staff beneficiaries"); ?>

    </div>
    <div class="card-body pt-3 text-light  bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewBen", $Class="btn-danger", $Label="New Benefit Category", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th class="text-light  bg-danger">Benefit</th>
                    <th class="text-light  bg-dark">Amount</th>
                    <th class="text-light  bg-dark">Description</th>
                    <th class="text-light  bg-dark text-light"> Delete</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($Bens)): ?>
                <?php $__currentLoopData = $Bens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td class="text-light  bg-dark"><?php echo e($data->Benefit); ?></td>
                    <td class="text-dark "><?php echo e(number_format($data->Amount, 2)); ?> UGX</td>
                    <td><a data-bs-toggle="modal" href="#ViewDesc<?php echo e($data->id); ?>" class="btn btn-danger btn-sm">
                        <i class="fas fa-binoculars aria-hidden="true"></i>
                    </a></td>


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


    <?php echo $__env->make('bens.NewBen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo e(DescModal($Bens, $Title="View description of the selected non-salary benefit category selected", $ModalID="ViewDesc")); ?>


<?php /**PATH /var/www/html/finance.ecsa/hr/bens/BenCategories.blade.php ENDPATH**/ ?>