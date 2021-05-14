


<?php $__env->startSection('body-right'); ?>


    <div class="form-signin container h-full p-0 px-sm-5 py-5 my-sm-5">

        <a class="d-flex justify-content-center mb-4" href="<?php echo e(Dashboard::prefix()); ?>">
            <?php echo $__env->first([config('platform.template.header'), 'platform::header'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </a>

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">

                <div class="bg-white p-4 p-sm-5 rounded shadow-sm">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>

                <div class="mt-4 text-center">
                    <?php echo $__env->first([config('platform.template.footer'), 'platform::footer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('platform::app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/auth.blade.php ENDPATH**/ ?>