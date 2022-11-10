	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "Your activity categories", $Msg = "Create and manage your activity categories"); ?>

    </div>
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="New", $Class="btn-danger", $Label="New Category", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Category</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th class="bg-dark text-light"> Delete</th>



                </tr>
            </thead>
            <tbody>
                <?php if(isset($Cat)): ?>
                <?php $__currentLoopData = $Cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($data->Category); ?></td>
                    <td><?php echo e($data->Description); ?></td>


                    <td><a data-bs-toggle="modal" href="#Update<?php echo e($data->id); ?>" class="btn btn-sm btn-dark edit" href="#">
                        <i class="fas fa-edit" aria-hidden="true"></i>
                    </a>

                   </td>
                   <td>

                    <a data-route="<?php echo e(route('MassDelete', ['id' => $data->id, 'TableName' => 'tracking_categories'])); ?>"
                        data-msg="You want to delete this record. This action is not reversible" href="#"
                        class="btn deleteConfirm btn-danger btn-sm btn-shadow"> <i
                            class="fas me-1  fa-trash" aria-hidden="true"></i> Delete </a>
                </td>





                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>
    <!--end::Card body-->







    <?php if(isset($Cat)): ?>
    <?php $__currentLoopData = $Cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form novalidate action="<?php echo e(route('CMSUpdate')); ?>" class="" method="POST"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="row">
                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">

                <input type="hidden" name="TableName" value="tracking_categories">


                <?php echo e(RunUpdateModal($ModalID = $data->id,$Extra =null,$csrf = null,$Title = 'Update the selected  record',$RecordID = $data->id,$col = '12',$te = '12',$TableName = 'tracking_categories')); ?>

            </div>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php echo $__env->make('Track.NewCat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/tracker/Track/MgtCat.blade.php ENDPATH**/ ?>