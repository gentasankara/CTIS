
<?php $__env->startSection('content'); ?>
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                            <a href="testData/newTest" class="btn btn-primary">Add new record</a>
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
                                            <th>Username</th>
                                            <th>Patient Type</th>
                                            <th>Symptoms</th>
                                            <th>Result</th>
                                            <th>Status</th>
                                            <th>Created at</th>
                                            <th>Update at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data_test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($test->id); ?></td>
                                            <td><?php echo e(App\User::find($test->user_id)->username); ?></td>
                                            <td><?php echo e($test->patient_type); ?></td>
                                            <td><?php echo e($test->symptoms); ?></td>
                                            <td><?php echo e($test->result); ?></td>
                                            <td><?php echo e($test->status); ?></td>
                                            <td><?php echo e($test->created_at); ?></td>
                                            <?php if($test->updated_at==null): ?>
                                                <td class="text">-</td>
                                            <?php else: ?>
                                                <td><?php echo e($test->updated_at); ?></td>
                                            <?php endif; ?>
                                            <td><a href="/testData/<?php echo e($test->id); ?>/edit" class="btn btn-success btn-sm">Update</a>
                                            <a href="/testData/<?php echo e($test->id); ?>/delete" class="btn btn-danger btn-sm" onClick="return confirm('Do you want to delete this data ?')">Delete</a></td>
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
    <!-- Modal
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Record New Data</h5>
        </div>
            <div class="modal-body">
                <form action="/testKit/create" method="POST">
                <?php echo e(csrf_field()); ?>

                    <div class="mb-3">
                        <label for="kitName" class="form-label">Kit Name</label>
                        <input type="text" name="kitName" class="form-control" id="kitName">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" name="stock" class="form-control" id="stock" min="1">
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\CTIS\resources\views/testData/index.blade.php ENDPATH**/ ?>