<a href="<?php echo e($url); ?>">
    <div class="d-sm-flex flex-row flex-wrap align-items-center">
        <?php if(empty(!$image)): ?>
            <span class="thumb-sm avatar me-sm-3 ms-md-0 me-xl-3 d-none d-md-inline-block">
              <img src="<?php echo e($image); ?>" class="bg-light">
            </span>
        <?php endif; ?>
        <div class="mt-2 mt-sm-0 mt-md-2 mt-xl-0">
            <p class="mb-0"><?php echo e($title); ?></p>
            <small class="text-muted"><?php echo e($subTitle); ?></small>
        </div>
    </div>
</a>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/layouts/persona.blade.php ENDPATH**/ ?>