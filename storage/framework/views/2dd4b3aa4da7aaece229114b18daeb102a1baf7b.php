<?php $__env->startComponent($typeForm, get_defined_vars()); ?>
    <div data-controller="relation"
         data-relation-id="<?php echo e($id); ?>"
         data-relation-placeholder="<?php echo e($attributes['placeholder'] ?? ''); ?>"
         data-relation-value="<?php echo e($value); ?>"
         data-relation-model="<?php echo e($relationModel); ?>"
         data-relation-name="<?php echo e($relationName); ?>"
         data-relation-key="<?php echo e($relationKey); ?>"
         data-relation-scope="<?php echo e($relationScope); ?>"
         data-relation-search-columns="<?php echo e($relationSearchColumns); ?>"
         data-relation-append="<?php echo e($relationAppend); ?>"
         data-relation-route="<?php echo e(route('platform.systems.relation')); ?>"
    >
        <select id="<?php echo e($id); ?>" data-relation-target="select" <?php echo e($attributes); ?>>
        </select>
    </div>
<?php if (isset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d)): ?>
<?php $component = $__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d; ?>
<?php unset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/fields/relation.blade.php ENDPATH**/ ?>