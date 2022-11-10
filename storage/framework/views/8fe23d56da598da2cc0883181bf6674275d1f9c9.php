	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "Salary Taxes", $Msg = "Manage all supported salary taxes"); ?>

    </div>
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="New", $Class="btn-danger", $Label="New Tax", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Tax</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th class="bg-dark text-light"> Delete</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($Taxes)): ?>
                <?php $__currentLoopData = $Taxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($data->Tax); ?></td>
                    <td><?php echo e($data->Percentage); ?> %</td>
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
                                'msg'   => 'You want to delete this tax  category',
                                'route' => route('DelTax' , ['id' => $data->id]),
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



    <?php echo $__env->make('tax.New', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo e(DescModal($Taxes, $Title="View the description  attached to selected salary tax", $ModalID="ViewDesc")); ?>

<?php /**PATH /var/www/html/africhild.mis/hr/tax/Mgt.blade.php ENDPATH**/ ?>