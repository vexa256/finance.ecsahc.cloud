<div class="modal fade" id="NewBeneficiary">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Attach beneficiary to the selected staff member

                   <small class="text-danger">  Please attach applicable pdf uploads to staff documentation |  Photo attachments supported here</small>

                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('NewBeneficiary')); ?>" class="row" method="POST" enctype=multipart/form-data> <?php echo csrf_field(); ?> <div
                    class="row">

                    <div class="mb-3 mt-3 col-md-3" >
                        <label  class="required form-label">Benefit</label>
                        <select name="BID" required class="form-select form-control-sm  form-control" data-control="select2" data-placeholder="Select an option">
                            <option></option>
                           <?php if(isset($Benefits)): ?>

                           <?php $__currentLoopData = $Benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <option value="<?php echo e($data->BID); ?>"><?php echo e($data->Benefit); ?></option>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>
                        </select>

                    </div>


                    <?php $__currentLoopData = $Form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($data['type'] == 'string'): ?>

                    <?php echo e(CreateInputText($data, $placeholder = null, $col='3')); ?>


                    <?php elseif($data['type'] == 'integer'): ?>

                    <?php echo e(CreateInputInteger($data , $placeholder = null, $col='3')); ?>


                    <?php elseif($data['type'] == 'date' || $data['type'] == 'datetime'): ?>


                    <?php echo e(CreateInputDate($data, $placeholder = null, $col='3')); ?>


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

            <input type="hidden" name="EmpID" value="<?php echo e($E->EmpID); ?>">
            <input type="hidden" name="StaffName" value="<?php echo e($E->StaffName); ?>">


            <?php echo Form::hidden($name="BenID", $value=\Hash::make(uniqid()."AFC".date('Y-m-d H:I:S')), [$options=null]); ?>




        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

            <button type="submit" class="btn btn-dark">Save Changes</button>

            </form>
        </div>

    </div>
</div>
</div>

<?php /**PATH /var/www/html/africhild.mis/hr/bens/NewBeneficiary.blade.php ENDPATH**/ ?>