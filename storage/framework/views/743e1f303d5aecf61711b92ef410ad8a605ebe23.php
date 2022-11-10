	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = $E->StaffName." | Staff beneficiaries", $Msg = "View staff beneficiaries | beneficiary related documents are stored under the staff documentation section"); ?>

    </div>
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewBeneficiary", $Class="btn-danger", $Label="New Beneficiary", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Beneficiary</th>
                    <th>Benefit</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>ID Type</th>
                    <th>ID N.O</th>

                    <th class="bg-dark text-light"> View More</th>
                    <th class="bg-dark text-light"> Edit</th>
                    <th class="bg-dark text-light"> Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($Beneficiaries)): ?>
                <?php $__currentLoopData = $Beneficiaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->Name); ?></td>
                    <td><?php echo e($data->Benefit); ?></td>
                    <td><?php echo e($data->Gender); ?></td>
                    <td><?php echo date('F j, Y', strtotime($data->DateOfBirth)); ?>

                    </td>

                    <td><?php echo e($data->Email); ?></td>
                    <td><?php echo e($data->IdType); ?></td>
                    <td><?php echo e($data->IdNumber); ?></td>
                    <td>

                        <a class="btn btn-sm btn-dark" data-bs-toggle="modal" href="#ViewMore<?php echo e($data->id); ?>">

                            <i class="fas fa-binoculars" aria-hidden="true"></i>
                        </a>

                    </td>

                    <td><a data-bs-toggle="modal" href="#Update<?php echo e($data->id); ?>" class="btn btn-sm edit btn-dark" href="#">
                        <i class="fas fa-edit" aria-hidden="true"></i>
                    </a>

                   </td>

                    <td>

                            <?php echo ConfirmBtn($data = [
                                'msg'   => 'You want to delete this beneficiary record',
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


    <?php echo $__env->make('bens.NewBeneficiary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('bens.More', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php

           /* $cache = '';

          if (isset($Benefits)) {

                foreach ($Benefits as $data) {

                    $cache .='<option value="'.$data->BID.'">'.$data->Benefit.'</option>';
                }

            }

        $extra = '<div class="mb-4 mt-3 col-md-3" >
                        <label  class="required form-label">Benefit</label>
                        <select name="BID" required class="form-select form-control-sm  form-control" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                            '.$cache.'

                        </select>

                    </div>';

*/

    ?>



    <?php if(isset($Beneficiaries)): ?>
    <?php $__currentLoopData = $Beneficiaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form action="<?php echo e(route('UpdateLogic')); ?>" class="row" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
    <?php echo e(RunUpdateModal(
        $ModalID = $data->id,
        $Extra = null,
        $csrf = '<?php echo csrf_field(); ?>',
        $Title ="Update the selected  beneficiary record",
        $RecordID =  $data->id,
        $col ='4',
        $te = '12',
        $TableName ="beneficiaries"
        )); ?>


</form>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>
<?php /**PATH /var/www/html/africhild.mis/hr/bens/MgtBens.blade.php ENDPATH**/ ?>