<!--begin::Card body-->
<div class="card-body pt-3 bg-light table-responsive">
</div>
<div class="card-body shadow-lg pt-3 bg-light table-responsive">
    <form action="<?php echo e(route('BVASelected')); ?>" method="POST">
    <div class="row">
        <div class="col-md-6">

                <?php echo csrf_field(); ?>
                <div class="mb-3 col-md-12  py-5   my-5">
                    <label id="label" for="" class="px-5   my-5 required form-label">Select year to attach BVA report to (Grant BVA)</label>
                    <select required name="Year" class="form-select  py-5   my-5 form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        <?php if(isset($Activities)): ?>

                        <?php $__currentLoopData = $Activities->unique('Year'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->Year); ?>"><?php echo e($data->Year); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>

                </div>


        </div>
        <div class="col-md-6">

                <?php echo csrf_field(); ?>
                <div class="mb-3 col-md-12  py-5   my-5">
                <label id="label" for="" class="px-5   my-5 required form-label">Select Grant (Annual Grant BVA)</label>
                    <select required name="id" class="form-select  py-5   my-5 form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        <?php if(isset($Grants)): ?>

                        <?php $__currentLoopData = $Grants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->GrantName); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>

                </div>
                <div class="float-end my-3">
                    <button class="btn btn-danger btn-sm shadow-lg" type="submit">
                      Next
                    </button>
                </div>



        </div>



    </div>

    </form>

</div>
<?php /**PATH /var/www/html/africhild.mis/proj/analytics/Select.blade.php ENDPATH**/ ?>