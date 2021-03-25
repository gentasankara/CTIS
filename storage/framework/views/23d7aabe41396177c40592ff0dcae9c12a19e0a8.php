
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
                        <div class="panel">
                            <div class="panel-heading ">
                                <!-- Button trigger modal -->
                                <h2 class="panel-title text-center">Testing History</h2>
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
                                            <th>Test Centre</th>
                                            <th>Created at</th>
                                            <th>Update at</th>
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
                                            <td><?php echo e(\App\TestCentre::find($test->test_centre_id)->name); ?></td>
                                            <td><?php echo e($test->created_at); ?></td>
                                            <?php if($test->updated_at==null): ?>
                                                <td class="text">-</td>
                                            <?php else: ?>
                                                <td><?php echo e($test->updated_at); ?></td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SE\CTI\CTIS\resources\views/patient/patientHistory.blade.php ENDPATH**/ ?>