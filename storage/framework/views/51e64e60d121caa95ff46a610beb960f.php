<?php $__env->startSection('title', 'Admin All Contacts'); ?>

<?php $__env->startSection( 'content' ); ?>

    <div class="container pt-5">
        <h1 class="text-center">Admin Contacts List</h1>
        <div class="d-flex p-2 bd-highlight mb-3">
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$key); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->subject); ?></td>
                    <td><?php echo e($contact->message); ?></td>
                    <td>
                        <a href="<?php echo e(route('obrisiContact', ['contact'=> $contact->id])); ?>" class="btn btn-danger mb-1">Delete</a>
                        <a href="<?php echo e(route('contact.single', ['id'=> $contact->id])); ?>" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/all-contacts.blade.php ENDPATH**/ ?>