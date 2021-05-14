<?php $__env->startPush('head'); ?>
    <meta name="robots" content="noindex" />
    <link
          href="<?php echo e(route('platform.resource', ['orchid', 'favicon.svg'])); ?>"
          sizes="any"
          type="image/svg+xml"
          id="favicon"
          rel="icon"
    >
<?php $__env->stopPush(); ?>

<p class="h2 n-m fw-light d-flex align-items-center">
   <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'orchid','width' => '1.2em','height' => '1.2em']); ?>
<?php $component->withName('orchid-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc)): ?>
<?php $component = $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc; ?>
<?php unset($__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <span class="ms-3 d-none d-sm-block">
        ORCHID
    <small class="align-top opacity">Platform</small>
    </span>
</p>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/header.blade.php ENDPATH**/ ?>