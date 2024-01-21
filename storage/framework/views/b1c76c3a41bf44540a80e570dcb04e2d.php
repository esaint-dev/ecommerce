<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/product.css')); ?>">
</head>
<body>
    <h1>Create a Product</h1>
    <div class="error_display">
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>


        <?php endif; ?>
    </div>
    <form id="create_form" method="post" action="<?php echo e(route('product.store')); ?>">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('post'); ?>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />

            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" />

            <label>Price</label>
            <input type="text" name="price" placeholder="Price" />

            <label>Description</label>
            <input type="text" name="description" placeholder="Description" />
            
            <input id="submit" type="submit" value="Save a New Product" />
            <a id="return_product" href="<?php echo e(route ('product.index')); ?>">Go back</a>

    </form>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Laravels\esaint_products\resources\views/products/create.blade.php ENDPATH**/ ?>