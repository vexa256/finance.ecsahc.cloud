	<!--begin::Card body-->
    <div class="card-body pt-3 bg-light shadow-lg table-responsive">
        <?php echo e(HeaderBtn($Toggle="NewDoc", $Class="btn-danger", $Label="New Document", $Icon="fa-plus")); ?>

        <table class=" mytable table table-rounded table-bordered  border gy-3 gs-3">
            <thead>
                <tr class="fw-bold  text-gray-800 border-bottom border-gray-200">
                    <th>Grant Name</th>
                    <th>Document Category</th>
                    <th>Document Title</th>
                    <th>Description</th>
                    <th>Document</th>
                    <th>Delete</th>




                </tr>
            </thead>
            <tbody>
                <?php if(isset($Grants)): ?>
                <?php $__currentLoopData = $Grants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($data->GrantName); ?></td>
                    <td><?php echo e($data->DocumentCategory); ?></td>
                    <td><?php echo e($data->DocumentTitle); ?></td>
                    <td>
                        <a data-bs-toggle="modal" href="#ViewDesc<?php echo e($data->id); ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-binoculars" aria-hidden="true"></i>
                        </a>

                    </td>

                    <td>
                        <a data-doc="  <?php echo e($data->DocumentTitle); ?> (<?php echo e($E->GrantName); ?>)" data-source="<?php echo e(asset($data->DocURL)); ?>"  data-bs-toggle="modal" href="#PdfJS" class="btn btn-sm  PdfViewer btn-info"> <i class="fas fa-file-pdf" aria-hidden="true"></i> </a>
                      </td>




                    <td>
                        <a data-route="<?php echo e(route('DelGrantDoc', ['id'=>$data->id])); ?>" data-msg="You sure you want to delete this  document . This action  is not reversible"  class="btn btn-danger btn-sm  deleteConfirm" href="#">

                        <i class="fas fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>





                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>



            </tbody>
        </table>
    </div>
<?php echo $__env->make('grants.NewDoc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('grants.PDFJS', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo e(DescModal($Grants, $Title="View description of the documentation attached to the selected grant", $ModalID="ViewDesc")); ?>

<?php /**PATH /var/www/html/africhild.mis/proj/grants/Docs.blade.php ENDPATH**/ ?>