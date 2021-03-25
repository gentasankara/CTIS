
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
                                <form action="/test/<?php echo e($test->id); ?>/update" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                    <label for="kitName" class="form-label">Kit Name</label>
                                    <input type="text" value="<?php echo e($test->kitName); ?>" name="kitName" class="form-control" id="kitName"><br>
                                    <label for="stock" class="form-label">Stock</label>
                                    <input type="number" value="<?php echo e($test->stock); ?>"  name="stock" class="form-control" id="stock" min=1>
                                    <br>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SE\CTI\CTIS\resources\views/test/edit.blade.php ENDPATH**/ ?>