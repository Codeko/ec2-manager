<?php $__env->startComponent($typeForm, get_defined_vars()); ?>
    <div data-controller="cropper"
         data-cropper-value="<?php echo e($attributes['value']); ?>"
         data-cropper-storage="<?php echo e($storage ?? 'public'); ?>"
         data-cropper-width="<?php echo e($width); ?>"
         data-cropper-height="<?php echo e($height); ?>"
         data-cropper-min-width="<?php echo e($minWidth); ?>"
         data-cropper-min-height="<?php echo e($minHeight); ?>"
         data-cropper-max-width="<?php echo e($maxWidth); ?>"
         data-cropper-max-height="<?php echo e($maxHeight); ?>"
         data-cropper-target="<?php echo e($target); ?>"
         data-cropper-url="<?php echo e($url); ?>"
         data-cropper-max-file-size="<?php echo e($maxFileSize); ?>"
    >
        <div class="border-dashed text-end p-3 cropper-actions">

            <div class="fields-cropper-container">
                <img src="#" class="cropper-preview img-fluid img-full mb-2 border" alt="">
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
                           data-target="cropper.upload"
                           data-action="change->cropper#upload click->cropper#openModal"
                           class="d-none">
                </label>

                <button type="button" class="btn btn-outline-danger cropper-remove"
                        data-action="cropper#clear"><?php echo e(__('Remove')); ?></button>
            </div>

            <input type="file"
                   accept="image/*"
                   class="d-none">
        </div>

        <input class="cropper-path d-none"
               type="text"
               data-target="cropper.source"
            <?php echo e($attributes); ?>

        >

        <div class="modal" role="dialog" <?php echo e($staticBackdrop ? "data-backdrop=static" : ''); ?>>
            <div class="modal-dialog modal-lg">
                <div class="modal-content-wrapper">
                    <div class="modal-content">
                        <div class="position-relative">
                            <img class="upload-panel">
                        </div>

                        <div class="modal-footer">

                            <button type="button"
                                    class="btn btn-link"
                                    data-dismiss="modal">
                                <?php echo e(__('Close')); ?>

                            </button>

                            <button type="button"
                                    class="btn btn-default"
                                    data-action="cropper#crop">
                                <?php echo e(__('Crop')); ?>

                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php if (isset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d)): ?>
<?php $component = $__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d; ?>
<?php unset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/fields/cropper.blade.php ENDPATH**/ ?>