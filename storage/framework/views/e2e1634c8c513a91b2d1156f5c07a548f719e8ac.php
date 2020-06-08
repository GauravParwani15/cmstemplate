<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<link rel="shortcut icon" type="image/png" href="<?php echo e(URL::to('images/favicon.png')); ?>"/>
	<meta charset="utf-8"/>
	<title>VESIT CMS</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link rel="stylesheet" href="<?php echo e(URL::to('css/styles.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(URL::to('css/app2.css')); ?>" />

	<?php if(session('red')): ?>
		<link rel="stylesheet" href="<?php echo e(URL::to('css/red.css')); ?>" />
	<?php elseif(session('blue')): ?>
		<link rel="stylesheet" href="<?php echo e(URL::to('css/blue.css')); ?>" />
	<?php endif; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/attendance.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(URL::to('css/classteacher.css')); ?>" />

	<script src="<?php echo e(URL::to('js/frontend.js')); ?>" type="text/javascript"></script>
	
	
</head>
<body>
	<?php echo $__env->make('layouts.validation_msgs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('body'); ?>
	
</body>


</html>