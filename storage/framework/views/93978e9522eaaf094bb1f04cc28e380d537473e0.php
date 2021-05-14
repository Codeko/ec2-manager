<?php if(empty(!$title)): ?>
    <fieldset>
            <div class="col p-0 px-3">
                <legend class="text-black">
                    <?php echo e($title); ?>

                </legend>
            </div>
    </fieldset>
<?php endif; ?>

<div class="bg-white rounded shadow-sm mb-3"
     data-controller="table"
     data-table-slug="<?php echo e($slug); ?>"
>

    <div class="table-responsive">
        <table class="table
            <?php if($striped): ?> table-striped <?php endif; ?>
            <?php if($bordered): ?> table-bordered <?php endif; ?>
            <?php if($hoverable): ?> table-hover <?php endif; ?>
        ">
            <thead>
                <tr>
                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $column->buildTh(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </thead>
            <tbody>

            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $column->buildTd($source); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($total->isNotEmpty()): ?>
                <tr>
                    <?php $__currentLoopData = $total; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $column->buildTd($repository); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            <?php endif; ?>

            </tbody>
        </table>
    </div>

    <?php if($rows instanceof \Illuminate\Contracts\Pagination\Paginator && $rows->isEmpty()): ?>
        <div class="text-center py-5 w-100">
            <h3 class="fw-light">
                <?php if(isset($iconNotFound)): ?>
                    <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => $iconNotFound,'class' => 'block m-b']); ?>
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


                <?php echo $textNotFound; ?>

            </h3>

            <?php echo $subNotFound; ?>

        </div>
    <?php endif; ?>

    <?php echo $__env->renderWhen($rows instanceof \Illuminate\Contracts\Pagination\Paginator && $rows->isNotEmpty(),
        'platform::layouts.pagination',[
            'paginator' => $rows,
            'columns' => $columns,
            'onEachSide' => $onEachSide,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
</div>


<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/layouts/table.blade.php ENDPATH**/ ?>