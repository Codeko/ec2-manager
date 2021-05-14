<?php if(auth()->guard()->guest()): ?>
    <p>Crafted with <span class="me-1">❤️</span> by Alexandr Chernyaev</p>
<?php else: ?>

    <div class="text-center user-select-none">
        <p class="small m-0">
            <?php echo e(__('The application code is published under the MIT license.')); ?> 2016 - <?php echo e(date('Y')); ?><br>
            <a href="http://orchid.software" target="_blank" rel="noopener">
                <?php echo e(__('Currently')); ?> v<?php echo e(\Orchid\Platform\Dashboard::VERSION); ?>

            </a>
        </p>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/footer.blade.php ENDPATH**/ ?>