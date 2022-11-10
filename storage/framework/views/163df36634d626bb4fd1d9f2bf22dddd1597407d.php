<!--begin::Card body-->
<div class="card-body pt-3 bg-light table-responsive">
</div>
<div class="card-body shadow-lg pt-3 bg-light table-responsive">
    <div class="row">

            <form class="row" action="<?php echo e(route('MonthlyPayReport')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3 col-md-6  py-5   my-5">
                    <label id="label" for="" class="px-5   my-5 required form-label">Select Month to attach payroll report to </label>
                    <select required name="Month" class="form-select  py-5   my-5 form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        <?php if(isset($Months)): ?>

                        <?php $__currentLoopData = $Months->unique('Month'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->Month); ?>"><?php echo e($data->Month); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>

                </div>
                <div class="mb-3 col-md-6  py-5   my-5">
                    <label id="label" for="" class="px-5   my-5 required form-label">Select Year to attach payroll report to </label>
                    <select required name="Year" class="form-select  py-5   my-5 form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        <?php if(isset($Years)): ?>

                        <?php $__currentLoopData = $Years->unique('Year'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->Year); ?>"><?php echo e($data->Year); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>

                </div>
                <div class="float-end my-3">
                    <button class="btn btn-danger btn-sm shadow-lg" type="submit">
                      Next
                    </button>
                </div>
            </form>


        </div>






</div>
<?php /**PATH /var/www/html/finance.ecsa/hr/payroll/SelectMonth.blade.php ENDPATH**/ ?>