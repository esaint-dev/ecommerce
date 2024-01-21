<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/product.css')); ?>">

</head>
<body>
    <?php echo $__env->make('components/sidebarall', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1>Product</h1>
    <div>
        <?php if(session()->has('success')): ?>
            <div>
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    </div>
    <div class="all_items">
        <div>
            <a id="create_product" href="<?php echo e(route('product.create')); ?>">Create a Product</a>
        </div>
        <table id="items" border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->qty); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td>
                        <a id="edit_btn" href="<?php echo e(route('product.edit', ['product' => $product])); ?>">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="<?php echo e(route('product.destroy', ['product' => $product])); ?>">
                            <?php echo csrf_field(); ?> 
                            <?php echo method_field('delete'); ?>
                            <input id="input_btn" type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Users\USER\Documents\Laravels\e-commerce\resources\views/products/index.blade.php ENDPATH**/ ?>