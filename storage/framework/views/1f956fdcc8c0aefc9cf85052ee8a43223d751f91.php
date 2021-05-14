<div class="dropdown d-inline-block" data-controller="filter">
    <button class="btn btn-sm btn-link dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            data-bs-boundary="viewport"
            aria-expanded="false">
        <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'filter']); ?>
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
    </button>
    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
        <div class="py-2 px-3">
            <div class="form-group mb-2">
                <input type="text"
                       autofocus
                       name="filter[<?php echo e($column); ?>]"
                       value="<?php echo e(get_filter_string($column)); ?>"
                       maxlength="255"
                       class="form-control form-control-sm"
                       form="filters"
                       placeholder="<?php echo e(__('Filter')); ?>">
            </div>
            <div class="line line-dashed border-bottom my-3"></div>
            <button type="submit" form="filters" class="btn btn-default btn-sm w-100"><?php echo e(__('Apply')); ?></button>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/partials/filters/text.blade.php ENDPATH**/ ?>