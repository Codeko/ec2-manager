<div class="col-md-12" data-controller="filter">
    <div class="btn-group ps-4" role="group">
        <button class="btn btn-link dropdown-toggle ps-0"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
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
            <?php echo e(__('Filters')); ?>

        </button>

        <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow"
             aria-labelledby="navbarDropdownMenuLink"
             data-turbo-permanent
             data-action="click->filter#onMenuClick"
        >
            <?php if($filters->where('display', true)->count() >= 2): ?>
                <?php $__currentLoopData = $filters->where('display', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="dropdown-item dropdown-toggle" href="#" data-filter-index="<?php echo e($idx); ?>"
                       data-action="filter#onFilterClick">
                        <?php echo e($filter->name()); ?>

                    </a>
                    <div class="dropdown-menu" data-action="click->filter#onMenuClick"
                         data-target="filter.filterItem">
                        <div class="px-3 py-2 w-md">
                            <?php echo $filter->render(); ?>

                            <div class="dropdown-divider"></div>
                            <button type="submit"
                                    form="filters"
                                    class="btn btn-sm btn-default">
                                <?php echo e(__('Apply')); ?>

                            </button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="dropdown-toggle" data-action="click->filter#onMenuClick"
                     data-target="filter.filterItem">
                    <div class="px-3 py-2 w-md">
                        <?php echo $filters->where('display', true)->first()->render(); ?>

                        <div class="dropdown-divider"></div>
                        <button type="submit"
                                form="filters"
                                class="btn btn-sm btn-default"
                                data-action="click->filter#submit">
                            <?php echo e(__('Apply')); ?>

                        </button>
                    </div>
                </div>
            <?php endif; ?>


        </div>
    </div>
    <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($filter->display && $filter->isApply()): ?>
            <a href="<?php echo e($filter->resetLink()); ?>" class="badge bg-light border me-1 p-1">
                <?php echo e($filter->value()); ?>

            </a>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/layouts/selection.blade.php ENDPATH**/ ?>