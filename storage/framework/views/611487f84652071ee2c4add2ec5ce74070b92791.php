<?php if(isset($Grants)): ?>
<?php $__currentLoopData = $Grants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade"  id="View<?php echo e($data->id); ?>">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">View description for the selected grant
                        <span class="text-danger font-weight-bold">
                            <?php echo e($data->GrantName); ?>

                        </span>
                    </h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">


                        <div class="mb-10 col-md-12">
                            <label for="exampleFormControlInput1" class="required form-label">Detailed Notes</label>
                            <textarea name="Desc">
                                <?php echo $data->DetailedNotes; ?>

                            </textarea>
                        </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark shadow-lg" data-bs-dismiss="modal">Close</button>


                </div>

            </div>
        </div>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/africhild.mis/proj/grants/Desc.blade.php ENDPATH**/ ?>