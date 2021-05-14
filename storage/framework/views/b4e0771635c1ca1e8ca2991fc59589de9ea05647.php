<?php $__env->startComponent($typeForm, get_defined_vars()); ?>
    <div data-controller="picture"
         data-picture-value="<?php echo e($attributes['value']); ?>"
         data-picture-storage="<?php echo e($storage ?? 'public'); ?>"
         data-picture-target="<?php echo e($target); ?>"
         data-picture-url="<?php echo e($url); ?>"
         data-picture-max-file-size="<?php echo e($maxFileSize); ?>"
         data-picture-groups="<?php echo e($attributes['groups'] ?? ''); ?>"
    >
        <div class="border-dashed text-end p-3 picture-actions">

            <div class="fields-picture-container">
                <img src="#" class="picture-preview img-fluid img-full mb-2 border" alt="">
            </div>

            <span class="mt-1 float-start"><?php echo e(__('Upload image from your computer:')); ?></span>

            <div class="btn-group">
                <label class="btn btn-default m-0">
                    <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'cloud-upload','class' => 'me-2']); ?>
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

                    <?php echo e(__('Browse')); ?>

                    <input type="file"
                           accept="image/*"
                           data-target="picture.upload"
                           data-action="change->picture#upload"
                           class="d-none">
                </label>

                <button type="button" class="btn btn-outline-danger picture-remove"
                        data-action="picture#clear"><?php echo e(__('Remove')); ?></button>
            </div>

            <input type="file"
                   accept="image/*"
                   class="d-none">
        </div>

        <input class="picture-path d-none"
               type="text"
               data-target="picture.source"
               <?php echo e($attributes); ?>

        >
    </div>
<?php if (isset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d)): ?>
<?php $component = $__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d; ?>
<?php unset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/fields/picture.blade.php ENDPATH**/ ?>