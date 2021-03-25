
<?php $__env->startSection('content'); ?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Record new test</h3><br>
                            <div type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add new patient
                            </div>
                            <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="panel-body">
                            <form action="/testData/recordTest" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <label for="test_centre">Test Centre</label>
                                <input type="hidden" name="test_centre_id" class="form-control" value="<?php echo e($data_centre->id); ?>">
                                <input type="text" disabled="" name="name_centre" class="form-control" value="<?php echo e($data_centre->name); ?>"><br>
                                <div class="form-group <?php echo e($errors->has('user_id') ? 'has-error' : ''); ?>">
                                    <label for="name" class="form-label">Patient Name</label>
                                    <select id="patient" class="form-control" name="user_id">
                                        <?php $__currentLoopData = $data_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
                                    <?php if($errors->has('patient')): ?>
                                        <span class="help-block"> <?php echo e($errors->first('patient')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <br>
                                <div class="form-group <?php echo e($errors->has('patient_type') ? 'has-error' : ''); ?>">
                                    <label for="patient_type" class="form-label">Patient Type</label>
                                    <select class="form-control" name="patient_type">
										<option value="returnee">Returnee</option>
										<option value="quarantined">Quarantined</option>
										<option value="close contact">Close contact</option>
										<option value="infected">Infected</option>
										<option value="suspected">Suspected</option>
									</select>
                                    <?php if($errors->has('patient_type')): ?>
                                        <span class="help-block"> <?php echo e($errors->first('patient_type')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <br>
                                <div class="form-group <?php echo e($errors->has('symptoms') ? 'has-error' : ''); ?>">
                                    <label for="symptoms" class="form-label">Symptom</label>
                                    <input type="symptoms" name="symptoms" class="form-control" id="symptoms">
                                    <?php if($errors->has('symptoms')): ?>
                                        <span class="help-block"> <?php echo e($errors->first('symptoms')); ?></span>
                                    <?php endif; ?>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Add new patient</h5>
        </div>
        <div class="modal-body">
            <form action="/testData/createPatient" method="POST">
            <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" min="1">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                
                <div class="form-group">
                    <label for="username" class="form-label">Patient Type</label>
                    <select class="form-control" name="patient_type">
                        <option value="returnee">Returnee</option>
                        <option value="quarantined">Quarantined</option>
                        <option value="close_contact">Close contact</option>
                        <option value="infected">Infected</option>
                        <option value="suspected">Suspected</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="symptoms" class="form-label">Symptoms</label>
                    <input type="text" name="symptoms" class="form-control" id="symptoms">
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


<script>
$("#patient").select2( {
 placeholder: "Select Patient",
 allowClear: true,
 "language": {
       "noResults": function(){
           return "No Results Found <a href='#' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'> Add new patient</a>";
       }
   },
   escapeMarkup: function (markup) {
        return markup;
    }
 } );
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SE\CTI\CTIS\resources\views/testData/newTest.blade.php ENDPATH**/ ?>