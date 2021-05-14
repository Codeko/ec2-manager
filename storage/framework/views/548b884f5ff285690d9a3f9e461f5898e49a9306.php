<?php if(isset($title)): ?>
    <li class="nav-item mt-3 mb-1">
        <div class="text-muted ms-4 w-100 user-select-none"><?php echo e(__($title)); ?></div>
    </li>
<?php endif; ?>

<li class="nav-item <?php echo e(active($active)); ?>">
    <a data-turbo="<?php echo e(var_export($turbo)); ?>"
        <?php echo e($attributes); ?>

    >
        <?php if(isset($icon)): ?>
            <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => $icon,'class' => ''.e(empty($name) ?: 'me-2').'']); ?>
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
        <?php endif; ?>

        <?php echo e($name ?? ''); ?>


        <?php if(isset($badge)): ?>
            <b class="badge bg-<?php echo e($badge['class']); ?> col-auto ms-auto"><?php echo e($badge['data']()); ?></b>
        <?php endif; ?>
    </a>
</li>

<?php if(!empty($list)): ?>
    <div class="nav collapse sub-menu ps-2 <?php echo e(active($active, 'show')); ?>"
         id="menu-<?php echo e($slug); ?>"
         data-bs-parent="#headerMenuCollapse">
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $item->build($source); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php if($divider): ?>
    <li class="divider my-2"></li>
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/actions/menu.blade.php ENDPATH**/ ?>