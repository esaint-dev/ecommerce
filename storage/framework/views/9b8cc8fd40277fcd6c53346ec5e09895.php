<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nav.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fontawesome-free-6.5.1-web/css/all.css')); ?>" />

</head>
<body>
    <nav class="navbar">
        <div class="brand-title">
            <a href="#">
               Esaint Movies
            </a>
        </div>

        <div class="dropdown">
            <i class="fa fa-user" class="dropbtn"></i>
            <div class="dropdown-content">
                <a href="<?php echo e(route ('register')); ?>">Sign Up</a>
                <a href="<?php echo e(route ('login')); ?>">Login In</a>       
                <a href="<?php echo e(route ('logout')); ?>">Logout</a>       
                   
            </div>
        </div>


        <div class="toggle-button">
            <i class="fa fa-bars"></i>
        </div>
        <div class="navbar-links">
        <ul>
            <li><a href="<?php echo e(route ('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route ('product.index')); ?>">Products</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

  

</nav>

    <div class="username">
        <h2>Welcome <?php echo e(Auth::user()->name); ?></h2>
    </div>

    




<script src="<?php echo e(asset('assets/js/navbar.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Laravels\e-commerce\resources\views/dashboard.blade.php ENDPATH**/ ?>