<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shared Url</title>
</head>
<body>
    <section>
    
        <div>
            <div>

                <ul>
                    <li>Nombre: <?php echo e($sharedurl->title); ?></li>
                    <li>Texto: <?php echo e($sharedurl->text); ?></li>
                    <?php if($sharedurl->image): ?>
                        <li>Imágen: <img src="<?php echo e($sharedurl->image); ?>" width="150" height="150"></li>
                    <?php endif; ?>
                    
                </ul>

      
            </div>
        </div>
    </section>
</body>
</html><?php /**PATH C:\xampp\htdocs\ec2-manager\resources\views/sharedUrl.blade.php ENDPATH**/ ?>