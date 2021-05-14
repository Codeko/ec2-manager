<th <?php if(empty(!$width)): ?> width="<?php echo e($width); ?>" <?php endif; ?> class="text-<?php echo e($align); ?>" data-column="<?php echo e($slug); ?>">
    <div>
        <?php if($sort): ?>
            <a href="<?php echo e($sortUrl); ?>"
               class="<?php if(!is_sort($column)): ?> text-muted <?php endif; ?>">
                <?php echo e($title); ?>


                <?php if (isset($component)) { $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Screen\Components\Popover::class, ['content' => $popover]); ?>
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

                <?php if(is_sort($column)): ?>
                    <?php $sortIcon = 'sort-amount-'.get_sort($column) ?>
                    <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => $sortIcon]); ?>
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
            </a>
        <?php else: ?>
            <?php echo e($title); ?>


            <?php if (isset($component)) { $__componentOriginal371d9e64abbdc52313d8062ce66855b64d3b870c = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Screen\Components\Popover::class, ['content' => $popover]); ?>
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
        <?php endif; ?>


        <?php echo $__env->renderWhen(!is_null($filter), "platform::partials.filters.{$filter}", get_defined_vars(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
    </div>

    <?php if($filterString): ?>
        <div data-controller="filter">
            <a href="#"
               data-action="filter#clearFilter"
               data-filter="<?php echo e($column); ?>"
               class="badge badge-pill bg-light">
                <?php echo e($filterString); ?>

            </a>
        </div>
    <?php endif; ?>
</th>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/partials/layouts/th.blade.php ENDPATH**/ ?>