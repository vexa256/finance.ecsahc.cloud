 <!--begin::Card body-->
 <div class="card-body pt-3 bg-light shadow-lg table-responsive">
     <?php echo Alert($icon = 'fa-info', $class = 'alert-primary', $Title = 'Activity Grant Impact', $Msg = 'Activity Grant Impact Detailed Analysis'); ?>

 </div>
 <div class="card-body pt-3 bg-light shadow-lg table-responsive">
     
     <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
         <thead>
             <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                 <th>Activity</th>
                 <th>Donor</th>
                 <th>Grant</th>
                 <th>Grant Amount</th>
                 <th>Activity Budget</th>
                 <th>Activity Actual</th>
                 <th>Activity Variance</th>
                 <th>Activity Budget BR</th>
                 <th>Activity Grant BR</th>
                 <th class="bg-danger text-light fw-bolder">Month</th>
                 <th class="bg-info text-light fw-bolder">Year</th>



             </tr>
         </thead>
         <tbody>
             <?php if(isset($Report)): ?>
                 <?php $__currentLoopData = $Report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>

                         <td><?php echo e($data->Activity); ?></td>
                         <td><?php echo e($data->Name); ?></td>
                         <td><?php echo e($data->GrantName); ?></td>
                         <td><?php echo e(number_format($data->AvailableGrantAmountInUgx)); ?> UGX</td>
                         <td><?php echo e(number_format($data->Budget)); ?> UGX</td>
                         <td><?php echo e(number_format($data->TotalActivityCost)); ?> UGX</td>
                         <td><?php echo e(number_format($data->Budget - $data->TotalActivityCost)); ?>

                             UGX
                         </td>
                         <td><?php
                         
                         $Variance = $data->Budget - $data->TotalActivityCost;
                         
                         $a = $Variance / $data->Budget;
                         
                         echo $BurnRate = $a * 100;
                         
                         ?> %</td>
                         <td><?php
                         
                         $Variance = $data->AvailableGrantAmountInUgx - $data->TotalActivityCost;
                         
                         $a = $Variance / $data->AvailableGrantAmountInUgx;
                         
                         echo $BurnRate = $a * 100;
                         
                         ?> %</td>
                         <td class="bg-danger text-light fw-bolder"><?php echo e($data->Month); ?></td>
                         <td class="bg-dark text-light fw-bolder"><?php echo e($data->Year); ?></td>


                     </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php endif; ?>



         </tbody>
     </table>
 </div>
 <!--end::Card body-->
<?php /**PATH /var/www/html/africhild.mis/ActUpdate/stat/ActivityGrantImpactReport.blade.php ENDPATH**/ ?>