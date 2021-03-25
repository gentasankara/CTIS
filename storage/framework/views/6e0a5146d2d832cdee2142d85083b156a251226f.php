
<?php $__env->startSection('content'); ?>
    <div class="main">
        <div class="main-content">
            <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <i class="fa fa-check-circle"></i> <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                            <button type="button" class="btn btn-primary float-right my-5" data-toggle="modal" data-target="#exampleModal">
                            Register Test Centre
                            </button>
                        </div>
                        <div class="panel">
                            <div class="panel-heading ">
                                <!-- Button trigger modal -->
                                <h2 class="panel-title text-center">Test Records</h2>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr  class="text-center">
                                            <th>ID</th>
                                            <th>Test Centre Name</th>
                                            <th>Address</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data_test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($test->id); ?></td>
                                            <td><?php echo e($test->name); ?></td>
                                            <td><?php echo e($test->address); ?></td>
                                            <td><?php echo e($test->created_at); ?></td>
                                            <td><?php echo e($test->updated_at); ?> </td>
                                            <td><a href="/testCentre/<?php echo e($test->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/testCentre/<?php echo e($test->id); ?>/delete" class="btn btn-danger btn-sm" onClick="return confirm('Do you want to delete this data ?')">Delete</a></td>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Register test centre</h5>
        </div>
            <div class="modal-body">
                <form action="/testCentre/create" method="POST">
                <?php echo e(csrf_field()); ?>

                    <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                        <label for="name" class="form-label">Test Centre Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name')); ?>" required>
                        <?php if($errors->has('name')): ?>
                            <span class="help-block"> <?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" min="1" value="<?php echo e(old('address')); ?>" required>
                        <?php if($errors->has('address')): ?>
                            <span class="help-block"> <?php echo e($errors->first('address')); ?></span>
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SE\CTI\CTIS\resources\views/testCentre/index.blade.php ENDPATH**/ ?>