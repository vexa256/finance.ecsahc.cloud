<?php if(isset($Donors)): ?>
<?php $__currentLoopData = $Donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $up): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="UpDonor<?php echo e($up->id); ?>">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-gray">
                <h5 class="modal-title">Update the selected record


                    for the donor <span class="text-danger">


                        <?php echo e($up->Name); ?>

                    </span>

                </h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body ">

                <form action="<?php echo e(route('UpdateDonor')); ?>" class="row" method="POST" enctype=multipart/form-data> <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($up->id); ?>">

                    <div class="row">


                        <div class="col-md-4 mb-3 mt-3">
                            <label id="label" for="exampleFormControlInput1" class="required form-label">Country</label>
                            <select name="Country" required class="form-select form-control-sm  form-control"
                                data-control="select2" data-placeholder="Select an option">
                                <option value="<?php echo e($up->Country); ?>">
                                    <?php echo e($up->Country); ?>

                                </option>
                                <?php if(isset($Countries)): ?>

                                <?php $__currentLoopData = $Countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option value="<?php echo e($data->name); ?>"><?php echo e($data->name); ?></option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>

                        </div>

                        <?php echo e(UpdateString($name = 'Name', $label = 'Donor Name', $value = $up->Name)); ?>


                        <?php echo e(UpdateString($name = 'ContactPerson', $label = 'Contact Person', $value = $up->ContactPerson)); ?>


                        <?php echo e(UpdateString($name = 'Address', $label = 'Address', $value = $up->Address)); ?>


                        <?php echo e(UpdateString($name = 'Email', $label = 'Email', $value = $up->Email)); ?>


                        <?php echo e(UpdateString($name = 'Phone', $label = 'Phone', $value = $up->Phone)); ?>


                        <?php echo e(UpdateString($name = 'Category', $label = 'Donor Category', $value = $up->Category)); ?>


                    </div>

                    <div class="row">
                        <?php echo e(UpdateText($name = 'Description', $label = 'Description', $value = $up->Description)); ?>


                    </div>






            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-dark">Save Changes</button>

                </form>
            </div>

        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/africhild.mis/proj/donors/Update.blade.php ENDPATH**/ ?>