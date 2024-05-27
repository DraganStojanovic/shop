<?php $__env->startSection('title', 'Add Product'); ?>

<?php $__env->startSection( 'content' ); ?>
    <div class="container pt-3">
        <div class="row text-center">
            <h1>Product Page</h1>
        </div>
        <div class="px-4 py-5 my-5 text-center">
            
            <h1 class="display-5 fw-bold text-body-emphasis">Product us</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Lorem ipsum dolor sit amet</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-primary btn-lg px-4" href="<?php echo e(url('/shop')); ?>" role="button">Get back to Shop</a>
                    <a class="btn btn-info btn-lg px-4" href="<?php echo e(url('/about')); ?>" role="button">About Us</a>
                </div>
            </div>
        </div>


        <!-- Wrapper container -->
        <div class="container py-4 pb-5">
            <div class="d-flex p-2 bd-highlight mb-3">
                <div class="col-md-6 offset-md-3 d-grid">
                    <a href="/admin/all-products" class="btn btn-info">Watch All Products</a>
                </div>
            </div>
            <!-- Bootstrap 5 starter form -->
            <form method="POST" action="<?php echo e(route('saveProduct')); ?>" id="contactForm" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div>
                    <?php if( $errors->any()): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h3 class="text-danger text-center">Greska: <?php echo e($error); ?></h3>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>


                <!-- Email address input -->
                <div class="col-md-6 offset-md-3 p-3">
                    <label class="form-label" for="emailAddress">Name of product</label>
                    <input class="form-control" id="emailAddress" name="name" placeholder="Name of product" value="<?php echo e(old('name')); ?>" />
                </div>
                <!-- Name input -->
                <div class="col-md-6 offset-md-3 p-3">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description" style="height: 10rem; " value="<?php echo e(old("description")); ?>"></textarea>
                </div>
                <!-- Name input -->
                <div class="col-md-6 offset-md-3 p-3">
                    <label class="form-label" for="amount">Amount</label>
                    <input class="form-control" id="amount" name="amount" type="text" placeholder="Amount" value="<?php echo e(old("amount")); ?>"/>
                </div>
                <!-- Message input -->
                <div class="col-md-6 offset-md-3 p-3">
                    <label class="form-label" for="price">Price</label>
                    <input class="form-control" id="price" name="price" type="text" placeholder="Price" value="<?php echo e(old("price")); ?>"/>
                </div>
                <!-- Message input -->
                <div class="col-md-6 offset-md-3 p-3">
                    <label for="formFileLg" class="form-label">Insert image of Product</label>
                    <input class="form-control form-control-lg" id="formFileLg" name="image" type="file" placeholder="Insert image of Product" value="<?php echo e(old("image")); ?>">
                </div>


                <!-- Form submit button -->
                <div class="col-md-6 offset-md-3 d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </div>

            </form>

        </div>
    </div>

    <div class="container-fluid px-0 pt-5">
        <div class="row col-12 g-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.2456886591676!2d20.184314076019966!3d44.65333177107229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a1463f770ac03%3A0xeadc1683a5c2076e!2zVm9qdm9kZSBNacWhacSHYQ!5e0!3m2!1sen!2srs!4v1687976386392!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/add-product.blade.php ENDPATH**/ ?>