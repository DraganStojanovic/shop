<?php $__env->startSection('title', 'Dashboard page'); ?>

    <?php $__env->startSection( 'content' ); ?>
        <div class="container pt-3">
                <div class="row mb-3">
                    <h1>Dashboard page</h1>
                </div>
                <div class="row mb-3">
                    <div class="bg-light p-5 rounded-lg m-3">
                        <h3 class="display-4">Trenutno vreme je:</h3>
                        <h5 class="display-2"><?php echo e(gmdate("H:i:s", time() - 3600)); ?></h5>
                    </div>
                </div>
            </div>
        <div class="card pb-5">
            <h1 class="text-center pt-3 pb-3">Products</h1>
            <div class="card-body">
                <div class="row">
                    <?php $__currentLoopData = $newProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-3">
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <img src="<?php echo e(asset('storage/images/'.$newProduct->image)); ?>" class="card-img-top" alt="Slike">
                                    <h1 class="card-title">Product: <?php echo e($newProduct->name); ?></h1>
                                    <h3 class="card-text">Model: <?php echo e($newProduct->description); ?></h3>
                                    <h4 class="card-text">Amount: <?php echo e($newProduct->amount); ?></h4>
                                    <h5 class="card-text">Price: <?php echo e($newProduct->price); ?></h5>
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


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/welcome.blade.php ENDPATH**/ ?>