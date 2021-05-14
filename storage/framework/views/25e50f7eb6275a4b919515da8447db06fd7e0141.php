<div class="form-group mb-0">

    <?php if(isset($title)): ?>
        <label for="<?php echo e($id); ?>" class="form-label mb-0">
            <?php echo e($title); ?>

        </label>
    <?php endif; ?>

    <?php echo e($slot); ?>


    <?php if($errors->has($oldName)): ?>
        <div class="invalid-feedback d-block">
            <small><?php echo e($errors->first($oldName)); ?></small>
        </div>
    <?php elseif(isset($help)): ?>
        <small class="form-text text-muted"><?php echo $help; ?></small>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/partials/fields/clear.blade.php ENDPATH**/ ?>