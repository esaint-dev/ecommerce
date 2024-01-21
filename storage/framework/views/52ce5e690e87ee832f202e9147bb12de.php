<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
    <!-- <link rel="stylesheet" href="resources/css/app.css"> -->
</head>
<body>
    <a class="regbtn" href="<?php echo e(route ('register')); ?>">Register</a>
    <h2 class="text">Login Here</h2>


   


    <form action="<?php echo e(route ('logging')); ?>" method="post">

        <?php if($errors->any()): ?>
        <div class="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

    <?php endif; ?>
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="name" required />
        <input type="password" name="password" placeholder="password" required/>

        <button type="submit" class="btn">Login</button> 
    </form>
    
    
</body>
</html><?php /**PATH C:\Users\USER\Documents\Laravels\e-commerce\resources\views/login.blade.php ENDPATH**/ ?>