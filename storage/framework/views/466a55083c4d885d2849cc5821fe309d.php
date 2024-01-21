<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
    
</head>
<body>
    <a class="regbtn" href="<?php echo e(route ('login')); ?>">Login</a>
    <h2 class="text">Create an account</h2>

    <form action="<?php echo e(route ('registration')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="name" required />
        <input type="password" name="password" placeholder="password" required/>
        <input type="email" name="email" placeholder="email" required  />

        <button type="submit" class="btn">Sign up</button>
    </form>
    
</body>
</html><?php /**PATH C:\Users\USER\Documents\Laravels\e-commerce\resources\views/register.blade.php ENDPATH**/ ?>