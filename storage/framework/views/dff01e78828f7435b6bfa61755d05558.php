<?php $__env->startSection('title', 'Products'); ?>

<?php $__env->startSection( 'content' ); ?>

    <div class="container pt-5">
        <h1>Admin Products List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
            <div class="col-md-6 offset-md-3 d-grid">
                <a href="/admin/all-product" class="btn btn-info">Add New Product</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Price</th>
                <th width="30%">Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$key); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td><?php echo e($product->amount); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td>
                        <?php if( $product->image): ?>
                            <img src="<?php echo e(asset('storage/images/' . $product->image)); ?>" style="height:50px; width:100px;"
                                 alt="slika">
                        <?php else: ?>
                            <span>No image found!</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('obrisiProizvod', ['product' => $product->id])); ?>" class="btn btn-danger">Delete</a>
                        <a href="<?php echo e(route('product.single', ['id' => $product->id ])); ?>" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/all-products.blade.php ENDPATH**/ ?>
