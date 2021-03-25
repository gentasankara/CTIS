

<?php $__env->startSection('content'); ?>
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <a href="users/newTester" class="btn btn-primary">Record New Tester</a><br>
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-check-circle"></i> <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="panel">
                            <div class="panel-heading ">
                                <h2 class="panel-title text-center">Test Records</h2>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Test Centre</th>
                                            <th>Created at</th>
                                            <th>Update at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($user->id); ?></td>
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->username); ?></td>
                                            <td><?php echo e($user->role); ?></td>
                                            <td><?php echo e(\App\TestCentre::find($user->test_centre_id)->name); ?></td>
                                            <td><?php echo e($user->created_at); ?></td>
                                            <?php if($user->updated_at==null): ?>
                                                <td>-</td>
                                            <?php else: ?>
                                                <td class="text-left"><?php echo e($user->updated_at); ?></td>
                                            <?php endif; ?>
                                            <?php if($user->role == 'manager'): ?>
                                            <td></td>
                                            <?php elseif($user->role == 'patient' || $user->role == 'tester'): ?>
                                            <td><a href="/users/<?php echo e($user->id); ?>/delete" class="btn btn-danger btn-sm" onClick="return confirm('Do you want to delete this data ?')">Delete</a></td>
                                            <?php endif; ?>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SE\CTI\CTIS\resources\views/users/index.blade.php ENDPATH**/ ?>