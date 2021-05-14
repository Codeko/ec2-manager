<?php if(session()->has(\Orchid\Alert\Alert::SESSION_MESSAGE)): ?>
    <div class="alert alert-<?php echo e(session(\Orchid\Alert\Alert::SESSION_LEVEL)); ?> rounded shadow-sm mb-3 p-3 d-flex">
        <?php echo session(\Orchid\Alert\Alert::SESSION_MESSAGE); ?>


        <?php echo $__env->yieldContent('flash_notification.sub_message'); ?>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if(empty(!$errors->count())): ?>
    <div class="alert alert-danger rounded shadow-sm mb-3 p-3" role="alert">
        <strong><?php echo e(__('Oh snap!')); ?></strong>
        <?php echo e(__('Change a few things up and try submitting again.')); ?>

        <ul class="m-t-xs">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/partials/alert.blade.php ENDPATH**/ ?>