<?php $__env->startComponent($typeForm, get_defined_vars()); ?>
    <div data-controller="quill"
         data-quill-toolbar='<?php echo json_encode($toolbar, 15, 512) ?>'
         data-quill-value='<?php echo json_encode($value, 15, 512) ?>'
         data-theme="<?php echo e($theme ?? 'inlite'); ?>"
    >
        <div id="toolbar"></div>
        <div class="quill p-3 position-relative" id="quill-wrapper-<?php echo e($id); ?>"
             style="min-height: <?php echo e($attributes['height']); ?>">
        </div>
        <input class="d-none" <?php echo e($attributes); ?>>
    </div>
<?php if (isset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d)): ?>
<?php $component = $__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d; ?>
<?php unset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/fields/quill.blade.php ENDPATH**/ ?>