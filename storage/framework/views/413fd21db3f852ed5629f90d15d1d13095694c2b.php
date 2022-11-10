<?php if(isset($Donors)): ?>
	            <?php $__currentLoopData = $Donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade"  id="Details<?php echo e($data->id); ?>">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header bg-gray">
                    <h5 class="modal-title">View  details for the donor labeled
                        <span class="text-danger font-weight-bold">
                            <?php echo e($data->Name); ?>

                        </span>
                    </h5>

                    <!--begin::Close-->
                    <a href="#MgtTaxes"  type="button" class="btn btn-info"  class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                     <i class="fas fa-2x fa-times" aria-hidden="true"></i>
                    </a>
                    <!--end::Close-->
                </div>

                <div class="modal-body ">

                    <textarea>
                        <?php echo e($data->Description); ?>

                    </textarea>

                </div>

                <div class="modal-footer">
                    <a type="button" class="btn btn-info" data-bs-dismiss="modal">Close</a>


                </div>

            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/africhild.mis/proj/donors/Details.blade.php ENDPATH**/ ?>