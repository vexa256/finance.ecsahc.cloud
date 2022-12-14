<!--begin::Card body-->
<div class="card-body pt-3 bg-light table-responsive">
</div>
<div class="card-body shadow-lg pt-3 bg-light table-responsive">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo e(route('LeaveSelected')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3 col-md-12  py-5   my-5">
                    <label id="label" for="" class="px-5   my-5 required form-label">Select Staff Member (Leave Assignment)</label>
                    <select required name="id" class="form-select  py-5   my-5 form-select-solid" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        <?php if(isset($Employees)): ?>

                        <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->StaffName); ?></option>
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


</div>
<?php /**PATH /var/www/html/africhild.mis/hr/leave/SelectStaff.blade.php ENDPATH**/ ?>