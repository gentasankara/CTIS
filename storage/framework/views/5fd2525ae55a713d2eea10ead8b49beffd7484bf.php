
<?php $__env->startSection('content'); ?>
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Data</h3>
                                <?php if(session('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="panel-body">
                                <form action="/testCentre/<?php echo e($test->id); ?>/update" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                        <label for="name" class="form-label">Kit Name</label>
                                        <input type="text" value="<?php echo e($test->name); ?>" name="name" class="form-control" id="name">
                                        <?php if($errors->has('name')): ?>
                                            <span class="help-block"> <?php echo e($errors->first('name')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                                        <label for="address" class="form-label">Stock</label>
                                        <input type="text" value="<?php echo e($test->address); ?>"  name="address" class="form-control" id="address" min=1>
                                        <?php if($errors->has('address')): ?>
                                            <span class="help-block"> <?php echo e($errors->first('address')); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <p class="demo-button ml-5"><button type="submit" class="btn btn-warning">Update</button></p>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
							
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SE\CTI\CTIS\resources\views/testCentre/edit.blade.php ENDPATH**/ ?>