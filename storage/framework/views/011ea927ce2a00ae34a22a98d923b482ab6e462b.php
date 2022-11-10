 <!--begin::Card body-->
 <div class="card-body pt-3 bg-light shadow-lg table-responsive">
 <?php echo e(HeaderBtn($Toggle = 'NewRole', $Class = 'btn-danger', $Label = 'New Role', $Icon = 'fa-plus')); ?>

 <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
 <thead>
 <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
 <th>Role</th>
 <th>Department</th>
 <th>Role Description</th>
 
 <th class="bg-dark text-light"> Actions</th>



 </tr>
 </thead>
 <tbody>
 <?php if(isset($Roles)): ?>
     <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr>
     <td><?php echo e($data->Designation); ?></td>
     <td><?php echo e($data->Department); ?></td>
     <td>
     <a data-bs-toggle="modal" href="#RoleDesc<?php echo e($data->id); ?>" class="btn btn-sm btn-dark">
     <i class="fas fa-binoculars" aria-hidden="true"></i>
     </a>
     </td>
     



     <td>
     <div class="dropdown">
     <button class="btn btn-sm  btn-secondary dropdown-toggle" type="button"
     id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
     Choose Action
     </button>
     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

     <li>
     <?php echo e(ConfirmBtn(
         $data = [
             'msg' => 'You want to delete this role, This action is not reversible!!',
             'route' => route('DelRole', ['id' => $data->id]),
             'label' => 'Delete',
             'class' => 'dropdown-item deleteConfirm',
         ],
     )); ?>

     </li>

     </ul>
     </div>
     </td>

     </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?>



 </tbody>
 </table>
 </div>
 <!--end::Card body-->

 <?php echo $__env->make('Roles.Update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('Roles.NewRole', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('Roles.Desc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/hr/Roles/MgtRoles.blade.php ENDPATH**/ ?>