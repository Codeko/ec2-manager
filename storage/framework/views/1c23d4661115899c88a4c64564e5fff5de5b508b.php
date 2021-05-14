<div class="mb-3">

    <label class="form-label">
        <?php echo e(__('Email address')); ?>

    </label>

    <?php echo \Orchid\Screen\Fields\Input::make('email')
        ->type('email')
        ->required()
        ->tabindex(1)
        ->autofocus()
        ->placeholder(__('Enter your email')); ?>

</div>

<div class="mb-3">
    <label class="form-label w-100">
        <?php echo e(__('Password')); ?>

    </label>

    <?php echo \Orchid\Screen\Fields\Password::make('password')
        ->required()
        ->tabindex(2)
        ->placeholder(__('Enter your password')); ?>

</div>

<div class="row align-items-center">
    <div class="mb-3 col-md-6 col-xs-12">
        <label class="form-check">
            <input type="hidden" name="remember">
            <input type="checkbox" name="remember" value="true"
                   class="form-check-input" <?php echo e(!old('remember') || old('remember') === 'true'  ? 'checked' : ''); ?>>
            <span class="form-check-label"> <?php echo e(__('Remember Me')); ?></span>
        </label>
    </div>
    <div class="mb-3 col-md-6 col-xs-12">
        <button id="button-login" type="submit" class="btn btn-default btn-block" tabindex="3">
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
<?php endif; ?>
            <?php echo e(__('Login')); ?>

        </button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/auth/signin.blade.php ENDPATH**/ ?>