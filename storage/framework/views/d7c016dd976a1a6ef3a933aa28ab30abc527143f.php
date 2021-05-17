<div class="dropdown-item">
    <div class="form-check h-auto w-100 d-flex align-items-center ps-0">
        <input type="checkbox"
               checked
               class="custom-control-input"
               id="<?php echo e($slug); ?>"
               form="table-columns-select"
               data-action="table#toggleColumn"
               data-default-hidden="<?php echo e($defaultHidden); ?>"
               data-column="<?php echo e($slug); ?>"
        >
        <label class="form-check-label d-block w-100 cursor ms-2" for="<?php echo e($slug); ?>">
            <?php echo e($title); ?>

        </label>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ec2-manager\vendor\orchid\platform\resources\views/partials/layouts/selectedTd.blade.php ENDPATH**/ ?>