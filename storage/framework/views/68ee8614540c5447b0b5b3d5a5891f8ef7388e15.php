

<?php $__env->startSection('body-left'); ?>

    <div class="aside col-xs-12 col-md-2 bg-dark">
        <div class="d-md-flex align-items-start flex-column d-sm-block h-full">

            <header class="d-sm-flex d-md-block p-3 mt-md-4 w-100 d-flex align-items-center">
                <a href="#" class="header-toggler d-md-none me-auto order-first d-flex align-items-center"
                   data-bs-toggle="collapse"
                   data-bs-target="#headerMenuCollapse">
                    <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'menu','class' => 'icon-menu']); ?>
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

                    <span class="ms-2"><?php echo $__env->yieldContent('title'); ?></span>
                </a>

                <a class="header-brand order-last" href="<?php echo e(route('platform.index')); ?>">
                    <?php echo $__env->first([config('platform.template.header'), 'platform::header'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </a>
            </header>

            <nav class="collapse d-md-block w-100 mb-md-3" id="headerMenuCollapse">

                <?php echo $__env->make('platform::partials.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->renderWhen(Auth::check(), 'platform::partials.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

                <ul class="nav flex-column mb-1">
                    <?php echo Dashboard::renderMenu('Main'); ?>

                </ul>

            </nav>

            <div class="h-100 w-100 position-relative to-top cursor d-none d-md-block mt-md-5 divider"
                 data-action="click->html-load#goToTop"
                 title="<?php echo e(__('Scroll to top')); ?>">
                <div class="bottom-left w-100 mb-2 ps-3">
                    <small>
                        <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'arrow-up','class' => 'me-2']); ?>
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

                        <?php echo e(__('Scroll to top')); ?>

                    </small>
                </div>
            </div>

            <footer class="p-3 mb-2 m-t d-none d-lg-block w-100">
                <?php echo $__env->first([config('platform.template.footer'), 'platform::footer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </footer>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body-right'); ?>

    <div class="mt-3 mt-md-4">

        <?php if(Breadcrumbs::has()): ?>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb px-4 mb-2">
                    <?php if (isset($component)) { $__componentOriginal05bda9ae2323706d3fc909827d8b643125e48537 = $component; } ?>
<?php $component = $__env->getContainer()->make(Tabuna\Breadcrumbs\BreadcrumbsComponent::class, ['class' => 'breadcrumb-item','active' => 'active']); ?>
<?php $component->withName('tabuna-breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal05bda9ae2323706d3fc909827d8b643125e48537)): ?>
<?php $component = $__componentOriginal05bda9ae2323706d3fc909827d8b643125e48537; ?>
<?php unset($__componentOriginal05bda9ae2323706d3fc909827d8b643125e48537); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </ol>
            </nav>
        <?php endif; ?>

        <div class="<?php if (! empty(trim($__env->yieldContent('navbar')))): ?> <?php else: ?> d-none d-md-block <?php endif; ?> layout v-md-center">
            <header class="d-none d-md-block col-xs-12 col-md p-0">
                <h1 class="m-0 fw-light h3 text-black"><?php echo $__env->yieldContent('title'); ?></h1>
                <small class="text-muted" title="<?php echo $__env->yieldContent('description'); ?>"><?php echo $__env->yieldContent('description'); ?></small>
            </header>
            <nav class="col-xs-12 col-md-auto ms-auto p-0">
                <ul class="nav command-bar justify-content-sm-end justify-content-start d-flex align-items-center">
                    <?php echo $__env->yieldContent('navbar'); ?>
                </ul>
            </nav>
        </div>

        <?php echo $__env->make('platform::partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('platform::app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/dashboard.blade.php ENDPATH**/ ?>