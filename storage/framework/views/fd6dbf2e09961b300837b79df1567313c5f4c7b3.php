
<?php $__env->startSection('content'); ?>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Record Tester</h3>
                            <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="panel-body">
                            <form action="/users/addTester" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name')); ?>">
                                    <?php if($errors->has('name')): ?>
                                        <span class="help-block"> <?php echo e($errors->first('name')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <br>
                                <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="username" name="username" class="form-control" id="username" value="<?php echo e(old('username')); ?>">
                                    <?php if($errors->has('username')): ?>
                                        <span class="help-block"> <?php echo e($errors->first('username')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <br>
                                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                                    <label for="password" class="form-label">Password </label>
                                    <input type="password" name="password" class="form-control" id="password">
                                    <p class="text-danger">Minimal 5 character with at least 1 uppercase, 1 lowercase, and 1 number</p>
                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block"> <?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <br>
                                <div class="form-group <?php echo e($errors->has('test_centre_id') ? 'has-error' : ''); ?>">
                                    <label for="centre" class="form-label">Test Centre</label>
                                    <select id="test_centre_id" class="form-control" name="test_centre_id">
                                        <?php $__currentLoopData = $data_centre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $centre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($centre->id); ?>"><?php echo e($centre->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('test_centre_id')): ?>
                                        <span class="help-block"> <?php echo e($errors->first('test_centre_id')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <br>
                                <label for="position">Position</label>
                                <input type="text" disabled name="position" class="form-control" value="Tester">
                                <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>   
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SE\CTI\CTIS\resources\views/users/newTester.blade.php ENDPATH**/ ?>