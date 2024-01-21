<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/product.css')); ?>">

</head>
<body>
    <h1>Edit a Product</h1>
    <div id="error_display">
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>


        <?php endif; ?>
    </div>
    <form id="update_form" method="post" action="<?php echo e(route('product.update', ['product' => $product])); ?>">
        <?php echo csrf_field(); ?> 
        <?php echo method_field('put'); ?>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="<?php echo e($product->name); ?>" />

            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="<?php echo e($product->qty); ?>" />

            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="<?php echo e($product->price); ?>" />

            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo e($product->description); ?>" />

            <input id="update" type="submit" value="Update" />

    </form>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Laravels\e-commerce\resources\views/products/edit.blade.php ENDPATH**/ ?>