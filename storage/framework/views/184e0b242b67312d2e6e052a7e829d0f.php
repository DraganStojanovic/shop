 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand <?php echo e(Request::path() ==  '/' ? 'active' : ''); ?>" href="<?php echo e(url('/')); ?>" href="/">SHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::path() ==  '/' ? 'active' : ''); ?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::path() ==  'about' ? 'active' : ''); ?>" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::path() ==  'shop' ? 'active' : ''); ?>" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(Request::path() ==  'contact' ? 'active' : ''); ?>" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php /**PATH C:\xampp\htdocs\shop\resources\views/includes/navigation.blade.php ENDPATH**/ ?>