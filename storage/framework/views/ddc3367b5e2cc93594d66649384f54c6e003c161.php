<?php if(empty(!Dashboard::getSearch()->all())): ?>
    <div class="p-3">
        <div class="dropdown position-relative" data-controller="search">
            <div class="input-icon">
                <input
                    data-action="keyup->search#query blur->search#blur focus->search#focus"
                    data-target="search.query"
                    type="text"
                    value="<?php echo $__env->yieldContent('search'); ?>"
                       class="form-control input-sm padder bg-dark text-white"
                       placeholder="<?php echo e(__('What to search...')); ?>"
                >
                <div class="input-icon-addon">
                    <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'magnifier']); ?>
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
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow bg-white w-100"
                 x-placement="start-left" id="search-result">
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/partials/search.blade.php ENDPATH**/ ?>