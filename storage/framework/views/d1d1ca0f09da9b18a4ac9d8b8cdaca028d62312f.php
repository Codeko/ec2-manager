<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Shared Url</title>
</head>
<body>
    <section>
    
        <div>
            <div>
                <h1>Listado de Shared Url</h1>
                <?php $__currentLoopData = $sharedUrls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sharedUrl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <ul>
                    <li><a href="<?php echo e($sharedUrl->id); ?>"><?php echo e($sharedUrl->url); ?></a></li>
                </ul>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
</body>
</html><?php /**PATH C:\xampp\htdocs\ec2-manager\resources\views/listado.blade.php ENDPATH**/ ?>