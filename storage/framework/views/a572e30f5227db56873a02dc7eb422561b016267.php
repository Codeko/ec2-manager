<?php $__env->startComponent($typeForm, get_defined_vars()); ?>
    <div data-controller="datetime"
         class="input-group"
        <?php echo e($dataAttributes); ?>>
        <input type="text"
               placeholder="<?php echo e($placeholder ?? ''); ?>"
               <?php echo e($attributes); ?>

               autocomplete="off"
               data-datetime-target="instance"
        >

        <?php if(true === $allowEmpty): ?>
            <div class="input-group-append bg-white">
                <a class="input-group-text bg-transparent"
                   title="clear"
                   data-action="click->datetime#clear">
                        <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'cross']); ?>
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
                    </a>
                </div>
            <?php endif; ?>
        </div>
<?php if (isset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d)): ?>
<?php $component = $__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d; ?>
<?php unset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>




<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/fields/datetime.blade.php ENDPATH**/ ?>