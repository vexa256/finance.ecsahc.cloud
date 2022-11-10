	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo Alert($icon = "fa-info", $class = "alert-primary", $Title = "Lets plan your activities", $Msg = "Create and manage your activity plans"); ?>

    </div>
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="UpStatus", $Class="btn-dark", $Label="Alter Activity Status", $Icon="fa-edit")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Category</th>
                    <th>Activity</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Venue</th>
                    <th>Duration</th>
                    <th class="text-wrap">Supervisor Comments</th>
                    <th>Description</th>




                </tr>
            </thead>
            <tbody>
                <?php if(isset($Act)): ?>
                <?php $__currentLoopData = $Act; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($data->Category); ?></td>
                    <td><?php echo e($data->Activity); ?></td>
                    <td class="bg-danger text-light fw-bolder"><?php echo e($data->Month); ?></td>
                    <td class="bg-danger text-light fw-bolder"><?php echo e($data->Year); ?></td>
                    <td class="bg-dark  text-light fw-bolder"><?php echo date('d/M/Y', strtotime($data->StartDate)); ?></td>
                    <td class="bg-dark text-light fw-bolder"><?php echo date('d/M/Y', strtotime($data->EndDate)); ?></td>
                    <td class="bg-danger text-light fw-bolder"><?php echo e($data->Status); ?></td>

                    <td><?php echo e($data->ActivityLocation); ?></td>

                    <td><?php echo e($data->DurationInWeeks); ?> Weeks</td>
                    <td><?php echo e($data->SupervisorComment); ?></td>



                    <td><a data-bs-toggle="modal" href="#Desc<?php echo e($data->id); ?>" class="btn btn-sm btn-dark edit" href="#">
                        <i class="fas fa-binoculars" aria-hidden="true"></i>
                    </a>


                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>
    <!--end::Card body-->







    <?php if(isset($Act)): ?>
    <?php $__currentLoopData = $Act; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form novalidate action="<?php echo e(route('CMSUpdate')); ?>" class="" method="POST"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="row">
                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">

                <input type="hidden" name="TableName" value="trackings">




                <?php echo e(RunUpdateModal($ModalID = $data->id,$Extra ='  <div class="mb-3 pt-3 col-md-12 ">
                    <label id="label" for="" class="required form-label">Activity Status</label>
                    <select required name="Status" class="form-select form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>

                        <option value="Expired">Expired</option>
                        <option value="Ongoing">Ongoing</option>
                        <option value="Terminated">Terminated</option>
                        <option value="Concluded">Concluded</option>



                    </select>

                </div>',$csrf = null,$Title = 'Update the selected  record',$RecordID = $data->id,$col = '12',$te = '12',$TableName = 'trackings')); ?>

            </div>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php echo $__env->make('Track.NewAct', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('Track.UpStatus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('Track.ViewDesc', ['All' => $Act, 'column'=> 'Description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/africhild.mis/tracker/Track/Supervisor.blade.php ENDPATH**/ ?>