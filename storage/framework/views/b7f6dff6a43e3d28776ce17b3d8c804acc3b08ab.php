<footer class="pb-3 w-100 v-md-center px-4 d-flex flex-wrap">
        <div class="col-auto me-auto">
            <?php if(isset($columns) && \Orchid\Screen\TD::isShowVisibleColumns($columns)): ?>
                <div class="btn-group dropup d-inline-block">
                    <button type="button"
                            class="btn btn-sm btn-link dropdown-toggle p-0 m-0"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            data-bs-boundary="viewport"
                            aria-expanded="false">
                        <?php echo e(__('Configure columns')); ?>

                    </button>
                    <div class="dropdown-menu dropdown-column-menu dropdown-scrollable">
                        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $column->buildItemMenu(); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($paginator instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator): ?>
                <small class="text-muted d-block">
                    <?php echo e(__('Displayed records: :from-:to of :total',[
                        'from' => ($paginator->currentPage() -1 ) * $paginator->perPage() + 1,
                        'to' => ($paginator->currentPage() -1 ) * $paginator->perPage() + count($paginator->items()),
                        'total' => $paginator->total(),
                    ])); ?>

                </small>
            <?php endif; ?>

        </div>
        <div class="col-auto overflow-auto flex-shrink-1 mt-3 mt-sm-0">
            <?php echo $paginator->appends(request()
                    ->except(['page','_token']))
                    ->onEachSide($onEachSide ?? 3)
                    ->links('platform::partials.pagination'); ?>

        </div>
</footer>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/layouts/pagination.blade.php ENDPATH**/ ?>