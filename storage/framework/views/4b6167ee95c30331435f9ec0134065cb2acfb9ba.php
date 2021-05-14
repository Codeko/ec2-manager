<div class="form-group">
    <?php if(isset($title)): ?>
        <label for="<?php echo e($id); ?>" class="form-label"><?php echo e($title); ?>

            <?php if(isset($attributes['required']) && $attributes['required']): ?>
                <sup class="text-danger">*</sup>
            <?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Screen\Components\Popover::class, ['content' => $popover ?? '']); ?>
<?php $component->withName('orchid-popover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c)): ?>
<?php $component = $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c; ?>
<?php unset($__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
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

<?php if(isset($hr)): ?>
    <div class="line line-dashed border-bottom my-3"></div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/partials/fields/vertical.blade.php ENDPATH**/ ?>