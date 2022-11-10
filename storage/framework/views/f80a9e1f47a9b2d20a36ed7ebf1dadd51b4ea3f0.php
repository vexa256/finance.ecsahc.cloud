<div class="card-body pt-3 bg-light shadow-lg table-responsive">
<?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "Activity Database | ".$P->GrantName, $Msg = "View all activity records attached to the grant ".$P->GrantName ); ?>


</div>



<div class="card-body shadow-lg pt-3 bg-light table-responsive">
<?php echo e(HeaderBtn($Toggle="New", $Class="btn-danger", $Label="New project Activity", $Icon="fa-plus")); ?>


<div class="col-md-12">

<table class="table mytable table-rounded table-bordered  border gy-3 gs-3">
<thead>
<tr class="fw-bold  text-gray-800 border-bottom border-gray-200">

    <th class="bg-dark text-light">Activity</th>
    <th class="bg-dark text-light">Grant</th>
    <th class="bg-dark text-light">Budget</th>
    <th class="bg-danger text-light">Start Date</th>
    <th class="bg-danger text-light">End Date</th>
    <th>Strategic Objectives</th>
    <th>Critical Information </th>
    <th>Actions</th>



</tr>
</thead>
<tbody>
<?php if(isset($Activities)): ?>
<?php $__currentLoopData = $Activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>

    <td class="bg-dark text-light"><?php echo e($data->Activity); ?></td>
    <td class="bg-dark text-light"><?php echo e($data->Grant); ?></td>
    <td class="bg-dark text-light"><?php echo e(number_format($data->Budget, 2)); ?>  UGX </td>
    <td><?php echo e(date('j F, Y', strtotime($data->StartDate))); ?> </td>
    <td><?php echo e(date('j F, Y', strtotime($data->ActivityExpiry))); ?> </td>
    <td><a data-bs-toggle="modal" href="#ViewStrat<?php echo e($data->id); ?>" class="btn btn-danger btn-sm">

       View </a>
    </td>
    <td><a data-bs-toggle="modal" href="#ViewCrit<?php echo e($data->id); ?>" class="btn btn-danger btn-sm">

        View </a>
     </td>





    <td class="row fs-6">

            <div class="dropdown">
                <button class="btn btn-sm  btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Actions
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">


                    <li><a  href="javascript:void(0);" data-route="<?php echo e(route('DelActivity', ['id'=>$data->id])); ?>" data-msg="You sure you want to delete this activity . "  class="dropdown-item deleteConfirm" >Delete Activity</a></li>







                </ul>
                </div>


    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>



</tbody>
</table>
</div>
</div>

<?php echo $__env->make('activities.New', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('activities.Critical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /var/www/html/africhild.mis/proj/activities/Mgt.blade.php ENDPATH**/ ?>