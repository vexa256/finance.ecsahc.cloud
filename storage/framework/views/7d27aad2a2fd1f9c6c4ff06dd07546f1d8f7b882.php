<div class="modal fade" id="NewEmp">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Create new contractor record


                    <small class="text-danger">
                        Applicable PDF uploads should be added to the contrator documentation section
                    </small>

                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewCon')); ?>" class="row" method="POST" enctype="multipart/form-data"> <?php echo csrf_field(); ?> <div
                    class="row">
                    <div class="mb-3 mt-3 col-md-3" >
                        <label id="label" for="exampleFormControlInput1" class="required form-label">Department</label>
                        <select name="Department" required class="form-select form-control-sm  form-control" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                           <?php if(isset($Departments)): ?>

                           <?php $__currentLoopData = $Departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <option value="<?php echo e($data->DepartmentName); ?>"><?php echo e($data->DepartmentName); ?></option>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>

                    </div>
                    <div class="col-md-3 mb-3 mt-3" >
                        <label id="label" for="exampleFormControlInput1" class="required form-label">Nationality</label>
                        <select name="Nationality" required class="form-select form-control-sm  form-control" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                           <?php if(isset($Countries)): ?>

                           <?php $__currentLoopData = $Countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <option value="<?php echo e($data->name); ?>"><?php echo e($data->name); ?></option>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>

                    </div>
                    <div class="mb-3 mt-3 col-md-3" >
                        <label id="label" for="exampleFormControlInput1" class="required form-label">Reports To</label>
                        <select name="ReportsTo" required class="form-select form-control-sm  form-control" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                           <?php if(isset($Roles)): ?>

                           <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <option value="<?php echo e($data->Designation); ?>"><?php echo e($data->Designation); ?></option>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>

                    </div>



                    <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($data['type'] == 'string'): ?>

                    <?php echo e(CreateInputText($data, $placeholder = null, $col = '3')); ?>


                    <?php elseif($data['type'] == 'integer'): ?>

                    <?php echo e(CreateInputInteger($data , $placeholder = null, $col = '3')); ?>


                    <?php elseif($data['type'] == 'date' || $data['type'] == 'datetime'): ?>


                    <?php echo e(CreateInputDate($data, $placeholder = null, $col = '3')); ?>


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



            <?php echo Form::hidden($name="EmpID", $value=\Hash::make(uniqid()."AFC".date('Y-m-d H:I:S')), [$options=null]); ?>





        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

            <button type="submit" class="btn btn-dark">Save Changes</button>

            </form>
        </div>

    </div>
</div>
</div>

<?php /**PATH /var/www/html/africhild.mis/hr/cons/NewCon.blade.php ENDPATH**/ ?>