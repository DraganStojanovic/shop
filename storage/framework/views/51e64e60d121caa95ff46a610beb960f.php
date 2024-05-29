<?php $__env->startSection('title', 'Admin All Contacts'); ?>

<?php $__env->startSection('content'); ?>
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
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(++$key); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->subject); ?></td>
                    <td><?php echo e($contact->message); ?></td>
                    <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-bs-target="#confirmDeleteModal<?php echo e($contact->id); ?>">Delete</button>
                    </td>
                    <td>
                        <a href="<?php echo e(route('contact.single', ['id' => $contact->id])); ?>" class="btn btn-primary">Edit</a>
                    </td>

                </tr>
                <!-- Modal -->
                <div class="modal fade" id="confirmDeleteModal<?php echo e($contact->id); ?>" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Potvrdi brisanje</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Da li ste sigurni da želite da obrišete ovaj kontakt?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Otkaži</button>
                                <a href="<?php echo e(route('obrisiContact', ['contact' => $contact->id])); ?>" class="btn btn-danger">Obriši</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shop\resources\views/all-contacts.blade.php ENDPATH**/ ?>