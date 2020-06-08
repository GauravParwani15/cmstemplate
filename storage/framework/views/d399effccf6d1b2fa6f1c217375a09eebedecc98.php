<?php $__env->startSection('page_heading','Courses Taught'); ?>
<?php $__env->startSection('section'); ?>
    <?php echo e($url); ?>

    <img src="<?php echo e($url); ?>" class="img-rounded">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>