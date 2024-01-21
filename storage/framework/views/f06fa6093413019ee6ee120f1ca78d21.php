<!DOCTYPE html>
      <!-- Website - www.codingnepalweb.com -->
      <html lang="en" dir="ltr">
        <head>
          <meta charset="UTF-8" />
          <title>customer-list</title>
          <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />
          <link rel="stylesheet" href="<?php echo e(asset('assets/css/userlist.css')); ?>" />
          <link rel="stylesheet" href="<?php echo e(asset('assets/fontawesome-free-6.5.1-web/css/all.css')); ?>" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        </head>
        <body>

            <?php echo $__env->make('components/sidebarall', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
                <h1>User List</h1>
                <?php if(isset($users)): ?>
                <?php endif; ?>
            
            <table id="userlist" border="1">
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
              </tr>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                      <td><?php echo e($user->id); ?></td>
                      <td><?php echo e($user->name); ?></td>
                      <td><?php echo e($user->email); ?></td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
         
        </section>
      
          <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
        </body>
      </html>
      <?php /**PATH C:\Users\USER\Documents\Laravels\e-commerce\resources\views//admin/customer-list.blade.php ENDPATH**/ ?>