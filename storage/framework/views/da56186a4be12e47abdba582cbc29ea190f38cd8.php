<div class="modal fade" id="New">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Hello <?php echo e(Auth::user()->name); ?>, Lets create  your activities


                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewRecord')); ?>" class="row" method="POST" enctype=multipart/form-data> <?php echo csrf_field(); ?> <div
                    class="row">

                    <div class="mb-3 pt-3 col-md-4 ">
                        <label id="label" for="" class="required form-label">Activity Category</label>
                        <select required name="CatID" class="form-select form-select-solid" data-control="select2"
                            data-placeholder="Select an option">
                            <option></option>
                            <?php if(isset($Cat)): ?>

                            <?php $__currentLoopData = $Cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datazs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($datazs->CatID); ?>"><?php echo e($datazs->Category); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </select>

                    </div>

                    <div class="mb-3 pt-3 col-md-4 ">
                        <label id="label" for="" class="required form-label">Select Supervisor</label>
                        <select required name="Supervisor" class="form-select form-select-solid" data-control="select2"
                            data-placeholder="Select an option">
                            <option></option>
                            <?php if(isset($Emp)): ?>

                            <?php $__currentLoopData = $Emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dataz->EmpID); ?>"><?php echo e($dataz->StaffName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                        </select>

                    </div>

                    <div class="mb-3 pt-3 col-md-4 ">
                        <label id="label" for="" class="required form-label">Activity Status</label>
                        <select required name="Status" class="form-select form-select-solid" data-control="select2"
                            data-placeholder="Select an option">
                            <option></option>

                            <option value="Expired">Expired</option>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Terminated">Terminated</option>
                            <option value="Concluded">Concluded</option>



                        </select>

                    </div>

                    <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($data['type'] == 'string'): ?>

                    <?php echo e(CreateInputText($data, $placeholder = null, $col='4')); ?>


                    <?php elseif($data['type'] == 'integer'): ?>

                    <?php echo e(CreateInputInteger($data , $placeholder = null, $col='4')); ?>


                    <?php elseif($data['type'] == 'date' || $data['type'] == 'datetime'): ?>


                    <?php echo e(CreateInputDate($data, $placeholder = null, $col='4')); ?>


                    <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="row">
                <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($data['type'] == 'text'): ?>

                <?php echo e(CreateInputEditor($data, $placeholder = null, $col = '12')); ?>


                <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <input type="hidden" name="TableName" value="trackings">

            <input type="hidden" name="EmpID" value="<?php echo e(Auth::user()->EmpID); ?>">



            <?php echo Form::hidden($name="ActivityID", $value=\Hash::make(uniqid()."AFC".date('Y-m-d H:I:S')), [$options=null]); ?>


            <?php echo Form::hidden($name="ActID", $value=\Hash::make(uniqid()."AFC".date('Y-m-d H:I:S')), [$options=null]); ?>




        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

            <button type="submit" class="btn btn-dark">Save Changes</button>

            </form>
        </div>

    </div>
</div>
</div>

<?php /**PATH /var/www/html/africhild.mis/tracker/Track/NewAct.blade.php ENDPATH**/ ?>