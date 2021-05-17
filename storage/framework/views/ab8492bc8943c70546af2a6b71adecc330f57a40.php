
<?php $__env->startSection('title',__('Sign in to your account')); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="h4 text-black mb-4"><?php echo e(__('Sign in to your account')); ?></h1>

    <form class="m-t-md"
          role="form"
          method="POST"
          data-controller="form"
          data-action="form#submit"
          data-form-button-animate="#button-login"
          data-form-button-text="<?php echo e(__('Loading...')); ?>"
          action="<?php echo e(route('platform.login.auth')); ?>">
        <?php echo csrf_field(); ?>

        <?php echo $__env->renderWhen($isLockUser,'platform::auth.lockme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        <?php echo $__env->renderWhen(!$isLockUser,'platform::auth.signin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('platform::auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/auth/login.blade.php ENDPATH**/ ?>