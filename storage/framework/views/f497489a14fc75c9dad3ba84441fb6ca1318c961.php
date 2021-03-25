<!doctype html>
<html lang="en">

<head>
	<title><?php echo e($title); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendor/linearicons/style.css')); ?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/main.css')); ?>">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/demo.css')); ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('admin/assets/img/apple-icon.png')); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('admin/assets/img/favicon.png')); ?>">
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php echo $__env->make('layouts.includes._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<?php echo $__env->make('layouts.includes._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<?php echo $__env->yieldContent('content'); ?>;
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2021 KrisTa.  All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?php echo e(asset('admin/assets/vendor/jquery/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
	<script src="<?php echo e(asset('admin/assets/scripts/klorofil-common.js')); ?>"></script>
</body>

</html>
<?php /**PATH E:\CTIS\resources\views/layouts/master.blade.php ENDPATH**/ ?>