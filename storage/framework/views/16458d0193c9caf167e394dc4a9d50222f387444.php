<?php $__env->startPush('modals-container'); ?>
    <div class="modal fade center-scale <?php echo e($type); ?>"
         id="screen-modal-<?php echo e($key); ?>"
         role="dialog"
         aria-labelledby="screen-modal-<?php echo e($key); ?>"
         data-controller="modal"
         data-modal-slug="<?php echo e($templateSlug); ?>"
         data-modal-async-enable="<?php echo e($asyncEnable); ?>"
         data-modal-async-route="<?php echo e($asyncRoute); ?>"
         data-modal-open="<?php echo e($open); ?>"
         <?php echo e($staticBackdrop ? "data-backdrop=static" : ''); ?>

    >
        <div class="modal-dialog <?php echo e($size); ?>" role="document" id="screen-modal-type-<?php echo e($key); ?>">
            <form class="modal-content"
                  id="screen-modal-form-<?php echo e($key); ?>"
                  method="post"
                  enctype="multipart/form-data"
                  data-controller="form"
                  data-action="form#submit"
                  data-form-button-animate="#submit-modal-<?php echo e($key); ?>"
                  data-form-button-text="<?php echo e(__('Loading...')); ?>"
            >
                <div class="modal-header">
                    <h4 class="modal-title text-black fw-light" data-target="modal.title"><?php echo e($title); ?></h4>
                    <button type="button" class="btn-close" title="Close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body layout-wrapper">
                    <div data-async>
                        <?php $__currentLoopData = $manyForms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formKey => $modal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $modal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $item ?? ''; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <?php echo csrf_field(); ?>
                </div>
                <div class="modal-footer">

                    <?php if(!$withoutCloseButton): ?>
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">
                            <?php echo e($close); ?>

                        </button>
                    <?php endif; ?>

                    <?php if(empty($commandBar)): ?>
                        <?php if(!$withoutApplyButton): ?>
                            <button type="submit"
                                    id="submit-modal-<?php echo e($key); ?>"
                                    data-turbo="<?php echo e(var_export($turbo)); ?>"
                                    class="btn btn-default">
                                <?php echo e($apply); ?>

                            </button>
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo $commandBar; ?>

                    <?php endif; ?>

                </div>
            </form>
        </div>
    </div>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/layouts/modal.blade.php ENDPATH**/ ?>