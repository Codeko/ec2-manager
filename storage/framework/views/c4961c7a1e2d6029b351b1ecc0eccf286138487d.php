<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" data-controller="html-load">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php echo $__env->yieldContent('title', config('app.name')); ?>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            - <?php echo e(config('app.name')); ?>

        <?php endif; ?>
    </title>
    <meta name="csrf_token" content="<?php echo e(csrf_token()); ?>" id="csrf_token">
    <meta name="auth" content="<?php echo e(Auth::check()); ?>" id="auth">

    <?php if(file_exists(public_path('/css/orchid/orchid.css'))): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(mix('/css/orchid/orchid.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(orchid_mix('/css/orchid.css','orchid')); ?>">
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('head'); ?>

    <meta name="turbo-root" content="<?php echo e(Dashboard::prefix()); ?>">
    <meta name="dashboard-prefix" content="<?php echo e(Dashboard::prefix()); ?>">

    <?php if(!config('platform.turbo.cache', false)): ?>
        <meta name="turbo-cache-control" content="no-cache">
    <?php endif; ?>

    <script src="<?php echo e(orchid_mix('/js/manifest.js','orchid')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(orchid_mix('/js/vendor.js','orchid')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(orchid_mix('/js/orchid.js','orchid')); ?>" type="text/javascript"></script>

    <?php $__currentLoopData = Dashboard::getResource('stylesheets'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stylesheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" href="<?php echo e($stylesheet); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->yieldPushContent('stylesheets'); ?>

    <?php $__currentLoopData = Dashboard::getResource('scripts'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scripts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script src="<?php echo e($scripts); ?>" defer type="text/javascript"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</head>

<body>


<div class="container-fluid" data-controller="<?php echo $__env->yieldContent('controller'); ?>" <?php echo $__env->yieldContent('controller-data'); ?>>

    <div class="row">
        <?php echo $__env->yieldContent('body-left'); ?>

        <div class="col min-vh-100 overflow-hidden">
            <div class="d-flex flex-column-fluid">
                <div class="container-md h-full px-0 px-md-5">
                    <?php echo $__env->yieldContent('body-right'); ?>
                </div>
            </div>
        </div>
    </div>


    <?php echo $__env->make('platform::partials.toast', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php echo $__env->yieldPushContent('scripts'); ?>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/app.blade.php ENDPATH**/ ?>