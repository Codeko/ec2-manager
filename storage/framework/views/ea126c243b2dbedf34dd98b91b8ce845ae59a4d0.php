<?php $__env->startSection('title'); ?>
    <?php echo e(__($name)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    <?php echo e(__($description)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('controller'); ?>
    base
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php $__currentLoopData = $commandBar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $command): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo $command; ?>

        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form id="post-form"
          class="mb-md-4"
          method="post"
          enctype="multipart/form-data"
          data-controller="form"
          data-action="keypress->form#disableKey
                           form#submit"
          data-form-validation="<?php echo e($formValidateMessage); ?>"
          novalidate
    >
        <?php echo $layouts; ?>

        <?php echo csrf_field(); ?>
        <?php echo $__env->make('platform::partials.confirm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
    <div id="modals-container">
        <?php echo $__env->yieldPushContent('modals-container'); ?>
    </div>
    <div data-controller="filter">
        <form id="filters" autocomplete="off" data-action="filter#submit"></form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('platform::dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/layouts/base.blade.php ENDPATH**/ ?>