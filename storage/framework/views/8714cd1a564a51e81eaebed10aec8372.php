<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>sidebarAll</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/fontawesome-free-6.5.1-web/css/all.css')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="fa fa"></i>
        <div class="logo_name">CodingLab</div>
        <i class="fa fa-bars" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <i class="fa fa-search"></i>
          <input id="input-search" type="text" placeholder="Search" />
          <span class="tooltip">Search</span>
        </li>
        <li>
          <a href="<?php echo e(url ('/admin')); ?>">
            <i class="fa fa-border-all"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="<?php echo e(url ('/admin/customer-list')); ?>">
            <i class="fa fa-user"></i>
            <span class="links_name">User</span>
          </a>
          <span class="tooltip">User</span>
        </li>
        <li>
          <a href="<?php echo e(url('product')); ?>">
            <i class="fa fa-cart-shopping"></i>
            <span class="links_name">Products</span>
          </a>
          <span class="tooltip">Products</span>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-chart-pie"></i>
            <span class="links_name">Analytics</span>
          </a>
          <span class="tooltip">Analytics</span>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span class="links_name">File Manager</span>
          </a>
          <span class="tooltip">Files</span>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-message"></i>
            <span class="links_name">Order</span>
          </a>
          <span class="tooltip">Order</span>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-heart"></i>
            <span class="links_name">Saved</span>
          </a>
          <span class="tooltip">Saved</span>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-gear"></i>
            <span class="links_name">Setting</span>
          </a>
          <span class="tooltip">Setting</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="<?php echo e(asset('assets/img/esaint.jpg')); ?>" alt="" />
            <div class="name_job">
              <div class="name">Esaint Mjay</div>
              <div class="job">Web dev</div>
            </div>
          </div>
          <i class="fa fa-right-from-bracket" id="log_out"></i>
        </li>
      </ul>
    </div>
    

    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
  </body>
</html>
<?php /**PATH C:\Users\USER\Documents\Laravels\esaint_products\resources\views/components/sidebarall.blade.php ENDPATH**/ ?>