<div class="mb-3 d-flex align-items-center">
    <span class="thumb-sm avatar me-3">
        <img src="<?php echo e($lockUser->presenter()->image()); ?>" class="b bg-light" alt="test">
    </span>
    <span style="width:125px;font-size: 0.85em;">
        <span class="text-ellipsis"><?php echo e($lockUser->presenter()->title()); ?></span>
        <span class="text-muted d-block text-ellipsis"><?php echo e($lockUser->presenter()->subTitle()); ?></span>
    </span>
    <input type="hidden" name="email" required value="<?php echo e($lockUser->email); ?>">
</div>

<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="d-block invalid-feedback text-danger">
            <?php echo e($errors->first('email')); ?>

    </span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<div class="mb-3">
    <input type="hidden" name="remember" value="true">

    <?php echo \Orchid\Screen\Fields\Password::make('password')
            ->required()
            ->tabindex(1)
            ->autofocus()
            ->placeholder(__('Enter your password')); ?>

</div>

<div class="row">
    <div class="mb-3 col-md-6 col-xs-12">
        <a href="<?php echo e(route('platform.login.lock')); ?>" class="small">
            <?php echo e(__('Sign in with another user.')); ?>

        </a>
    </div>
    <div class="mb-3 col-md-6 col-xs-12">
        <button id="button-login" type="submit" class="btn btn-default btn-block" tabindex="2">
            <?php if (isset($component)) { $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc = $component; } ?>
<?php $component = $__env->getContainer()->make(Orchid\Icons\IconComponent::class, ['path' => 'login','class' => 'small me-2']); ?>
<?php $component->withName('orchid-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc)): ?>
<?php $component = $__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc; ?>
<?php unset($__componentOriginald36eae2be856e5ea3de02a2f65da5a3c27957ebc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> <?php echo e(__('Login')); ?>

        </button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/auth/lockme.blade.php ENDPATH**/ ?>