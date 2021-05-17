<?php $__env->startComponent($typeForm, get_defined_vars()); ?>
    <div data-controller="select">
        <select <?php echo e($attributes); ?>>
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>"
                        <?php if(isset($value)): ?>
                        <?php if(is_array($value) && in_array($key, $value, true)): ?> selected
                        <?php elseif(isset($value[$key]) && $value[$key] == $option): ?> selected
                        <?php elseif($key === $value): ?> selected
                        <?php endif; ?>
                        <?php endif; ?>
                ><?php echo e($option); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
<?php if (isset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d)): ?>
<?php $component = $__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d; ?>
<?php unset($__componentOriginal022c3adc7a3ddf487615f02d89190e3aa95e3b2d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/fields/select.blade.php ENDPATH**/ ?>