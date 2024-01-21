<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Admin</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/fontawesome-free-6.5.1-web/css/all.css')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    
  <?php echo $__env->make('components/sidebarall', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="home-section">
      <div class="text">Dashboard</div>
    </section>
  </body>
</html>
<?php /**PATH C:\Users\USER\Documents\Laravels\esaint_products\resources\views/admin.blade.php ENDPATH**/ ?>