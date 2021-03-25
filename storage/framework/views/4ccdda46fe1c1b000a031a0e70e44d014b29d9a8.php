

<?php $__env->startSection('content'); ?>
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                            <button type="button" class="btn btn-primary float-right my-5" data-toggle="modal" data-target="#exampleModal">
                            Add new test kit
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
                                            <th>Kit ID</th>
                                            <th>Test Kit Name</th>
                                            <th>Stock</th>
                                            <th>Created at</th>
                                            <th>Update at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data_test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($test->id); ?></td>
                                            <td><?php echo e($test->kitName); ?></td>
                                            <td><?php echo e($test->stock); ?></td>
                                            <td><?php echo e($test->created_at); ?></td>
                                            <?php if($test->updated_at==null): ?>
                                                <td class="text">-</td>
                                            <?php else: ?>
                                                <td><?php echo e($test->updated_at); ?></td>
                                            <?php endif; ?>
                                            <td><a href="/test/<?php echo e($test->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/test/<?php echo e($test->id); ?>/delete" class="btn btn-danger btn-sm" onClick="return confirm('Do you want to delete this data ?')">Delete</a></td>
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
            <h5 class="modal-title" id="exampleModalLabel">Record New Data</h5>
        </div>
            <div class="modal-body">
                <form action="/test/create" method="POST">
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SE\CTI\CTIS\resources\views/test/index.blade.php ENDPATH**/ ?>