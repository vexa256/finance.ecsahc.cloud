

<!-- Modal -->
<div class="modal fade" id="UpStatus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen"> role="document">
        <div class="modal-content">

            <form novalidate action="<?php echo e(route('CMSUpdate')); ?>" class="" method="POST"
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
                <h5 class="modal-title">Alter and add comments on the activities you supervisor

                </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="row">

                <div class="mb-3 pt-3 col-md-12 ">
                    <label id="label" for="" class="required form-label">Supervisor Comment</label>
                    <input required class="form-control" type="text" name="SupervisorComment" placeholder="Enter the supervisor comment">
                </div>
                <div class="mb-3 pt-3 col-md-6 ">
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

                <div class="mb-3 pt-3 col-md-6 ">
                    <label id="label" for="" class="required form-label">Select Activity</label>
                    <select required name="id" class="form-select form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        <?php if(isset($MyActs)): ?>

                        <?php $__currentLoopData = $MyActs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($dataz->id); ?>"><?php echo e($dataz->Activity); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>


                    <input type="hidden" name="TableName" value="trackings">

                </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submite" class="btn btn-danger">Save Changes</button>
            </div>

        </form>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/africhild.mis/tracker/Track/UpStatus.blade.php ENDPATH**/ ?>