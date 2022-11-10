<?php $__env->startComponent('mail::message'); ?>
    <?php echo e($details['Title']); ?>

    Your message body.

    <?php echo e($details['body']); ?>

    Thanks,<br>
    <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/africhild.mis/views/mail/Verify.blade.php ENDPATH**/ ?>