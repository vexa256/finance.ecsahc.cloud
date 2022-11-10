<?php if(isset($Grants)): ?>
    <?php $__currentLoopData = $Grants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="modal fade" id="UpdateGrant<?php echo e($data->id); ?>">
            <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <h5 class="modal-title">Update the grant record labelled

                            <small class="text-danger">
                                <?php echo e($data->GrantName); ?>

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

                        <form action="<?php echo e(route('UpdateGrant')); ?>" class="row" method="POST"
                            enctype=multipart/form-data>

                            <?php echo csrf_field(); ?>


                            <div class="row">
                                <div class="mb-3 mt-3 col-md-4">
                                    <label id="label" for="exampleFormControlInput1" class="required form-label">Grant
                                        Category</label>
                                    <select name="GrantCategory" required class="form-select form-control-sm  form-control"
                                        data-control="select2" data-placeholder="Select an option">
                                        <option value="<?php echo e($data->GrantCategory); ?>">
                                            <?php echo e($data->GrantCategory); ?>

                                        </option>


                                        <option value="Institutional Grant">Institutional Grant</option>
                                        <option value="Research Grant">Research Grant</option>
                                        <option value="Consultancy">Consultancy </option>
                                        <option value="Supplementary Grant">Supplementary Grant</option>

                                        <option value="Other">Other (Specifics in the description)</option>


                                    </select>

                                </div>
                                <div class="mb-3 mt-3 col-md-4">
                                    <label id="label" for="exampleFormControlInput1"
                                        class="required form-label">Donor</label>
                                    <select name="Donor" required class="form-select form-control-sm  form-control"
                                        data-control="select2" data-placeholder="Select an option">
                                        <option value="<?php echo e($data->Donor); ?>"><?php echo e($data->Donor); ?></option>
                                        <?php if(isset($Donors)): ?>

                                            <?php $__currentLoopData = $Donors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <option value="<?php echo e($datas->Name); ?>"><?php echo e($datas->Name); ?></option>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>

                                </div>

                                <div class="mb-3 mt-3 col-md-4">
                                    <label id="label" for="exampleFormControlInput1" class="required form-label">Original
                                        Currency</label>
                                    <select name="OriginalCurrency" required
                                        class="form-select form-control-sm  form-control" data-control="select2"
                                        data-placeholder="Select an option">
                                        <option value="<?php echo e($data->OriginalCurrency); ?>"><?php echo e($data->OriginalCurrency); ?>

                                        </option>
                                        <?php if(isset($Currencies)): ?>

                                            <?php $__currentLoopData = $Currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <option value="<?php echo e($dataz->name); ?>"><?php echo e($dataz->langEN); ?></option>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>

                                </div>


                                <?php echo e(UpdateString($name = 'GrantName', $label = ' Grant Name', $value = $data->GrantName)); ?>


                                <?php echo e(UpdateInteger($name = 'GrantAmountAlreadySpentInUgx', $label = ' Grant Amount Already Spent In Ugx ', $value = $data->GrantAmountAlreadySpentInUgx)); ?>




                                <?php echo e(UpdateInteger($name = 'OriginalAmount', $label = ' Original Amount', $value = $data->OriginalAmount)); ?>


                                <?php echo e(UpdateDate($name = 'GrantExpiry', $label = ' Grant Expiry', $value = $data->GrantExpiry)); ?>


                                <?php echo e(UpdateDate($name = 'GrantStartDate', $label = ' Grant Start Date', $value = $data->GrantStartDate)); ?>




                                <?php echo e(UpdateString($name = 'OriginalExchangeRate', $label = ' Original ExchangeRate', $value = $data->OriginalExchangeRate)); ?>





                                <?php echo e(UpdateString($name = 'GrantNumber', $label = ' Grant Number', $value = $data->GrantNumber)); ?>






                            </div>

                            <div class="row">


                                <div class="col-md-12 mb-3 mt-3 ">
                                    <div class="mb-3  ">
                                        <label class="required form-label">
                                            Applicable Information</label>
                                        <textarea name="DetailedNotes" class="form-control">
                                                                                                                                    <?php echo e($data->DetailedNotes); ?>

                                                                                                                                </textarea>
                                    </div>
                                </div>

                            </div>

                            <input type="hidden" value="<?php echo e($data->id); ?>" name="id">







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
<?php /**PATH /var/www/html/africhild.mis/proj/grants/Update.blade.php ENDPATH**/ ?>