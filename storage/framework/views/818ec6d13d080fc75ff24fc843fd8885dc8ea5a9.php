<?php if(count($errors) > 0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class= "alert alert-danger">
            <?php echo e($error); ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible text-center animated fadeInDown" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible text-center animated fadeInDown" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<script>
	$(document).ready(function(){
	    setTimeout(function(){
			if ($('.alert').length > 0) {
				$('.alert').addClass("fadeOutUp");
			}
		}, 4000);
	});
</script>