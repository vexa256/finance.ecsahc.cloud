	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "Salary Benefits", $Msg = "Manage all supported salary benefits"); ?>

    </div>
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="New", $Class="btn-danger", $Label="New Benefit", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Benefit</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th class="bg-dark text-light"> Delete</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($SalaryBenefits)): ?>
                <?php $__currentLoopData = $SalaryBenefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($data->Benefit); ?></td>
                    <td><?php echo e(number_format($data->Amount)); ?> UGX</td>
                    <td>

                        <a data-bs-toggle="modal"  class="btn btn-danger btn-sm" href="#ViewDesc<?php echo e($data->id); ?>">

                            <i class="fas fa-binoculars" aria-hidden="true"></i>
                        </a>

                    </td>


                    <td>

                            <?php echo ConfirmBtn($data = [
                                'msg'   => 'You want to delete this benefit  category',
                                'route' => route('DelSalaryBen' , ['id' => $data->id]),
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



    <?php echo $__env->make('benefits.New', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo e(DescModal($SalaryBenefits, $Title="View the description  attached to selected salary benefit", $ModalID="ViewDesc")); ?>

<?php /**PATH /var/www/html/finance.ecsa/hr/benefits/Mgt.blade.php ENDPATH**/ ?>