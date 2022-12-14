<div class="card-body pt-3 bg-light shadow-lg table-responsive">
    <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "Manage activity broad categories", $Msg = "These categories are used when creating activity costs" ); ?>


    </div>



    <div class="card-body shadow-lg pt-3 bg-light table-responsive">
    <?php echo e(HeaderBtn($Toggle="NewCat", $Class="btn-danger", $Label="New Category Activity", $Icon="fa-plus")); ?>


    <div class="col-md-12">

    <table class="table mytable table-rounded table-bordered  border gy-3 gs-3">
    <thead>
    <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">

        <th class="bg-dark text-light">Broad Category</th>
        <th class="bg-dark text-light">Units</th>
        <th>Delete</th>



    </tr>
    </thead>
    <tbody>
    <?php if(isset($BroadCategories)): ?>
    <?php $__currentLoopData = $BroadCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

        <td class="bg-dark text-light"><?php echo e($data->BroadCategory); ?></td>
        <td class="bg-dark text-light"><?php echo e($data->MeasurementUnits); ?></td>

        <td class="bg-dark text-light">
            <a href="#" data-route="<?php echo e(route('DelBroadCat', ['id'=>$data->id])); ?>" data-msg="You sure you want to delete this activity broad category . "  class="btn btn-danger btn-sm deleteConfirm" >
                Trash
            </a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>



    </tbody>
    </table>
    </div>
    </div>


    <?php echo $__env->make('activities.NewCat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/proj/activities/BroadCat.blade.php ENDPATH**/ ?>