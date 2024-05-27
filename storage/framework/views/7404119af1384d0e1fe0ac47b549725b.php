<?php $__env->startSection('title', 'Shop'); ?>

    <?php $__env->startSection( 'content' ); ?>

<div class="card">
    <h1 class="text-center pt-5 pb-5">Products</h1>
    <div class="card-body">
        <div class="row mb-3">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <img src="<?php echo e(asset('storage/images/'.$product->image)); ?>" class="card-img-top" alt="Slike">
                        <h1 class="card-title">Product: <?php echo e($product->name); ?></h1>
                        <h3 class="card-text">Model: <?php echo e($product->description); ?></h3>
                        <h4 class="card-text">Amount: <?php echo e($product->amount); ?></h4>
                        <h5 class="card-text">Price: <?php echo e($product->price); ?></h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link text-white">More</a>
                        <a href="#" class="card-link text-white">Compare</a>
                    </div>
                </div><br>



            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/shop.blade.php ENDPATH**/ ?>