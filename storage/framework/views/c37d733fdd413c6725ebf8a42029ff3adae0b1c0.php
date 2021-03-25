<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>">
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
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?php echo e(asset('img/logo.png')); ?>" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="/postlogin" method="POST">
                            <?php echo e(csrf_field()); ?>

								<div class="form-group">
									<label for="username" class="control-label sr-only">Username</label>
									<input name="username" type="text" class="form-control" id="username" value="" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control" id="password" value="" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Covid Testing Information System</h1>
							<p>by KrisTa (KrisnaGenta)</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
<?php /**PATH D:\SE\CTI\CTIS\resources\views/auths/login.blade.php ENDPATH**/ ?>