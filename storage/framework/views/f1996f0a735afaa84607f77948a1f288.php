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
    
    <div class="desktop">
        <h1>Lets build from here</h1>
        <p>The worlds leading AI-powered developer platform. </p>

        <input type="text" name="email" id="email" placeholder="Email address">
        <button id="signbtn"><a id="" href="">Sign for Esaint</a></button>
        <span id="line"></span>
        <input type="button" name="email" id="free_trail" value="Start a free trial" />

    </div>
   

<img id="bg_image" src="<?php echo e(asset('assets/img/hero-dezktop.png')); ?>" alt="">




<script src="<?php echo e(asset('assets/js/navbar.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Laravels\esaint_products\resources\views/dashboard.blade.php ENDPATH**/ ?>