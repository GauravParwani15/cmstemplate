<?php $__env->startSection('page_heading','Student Attendance'); ?>
<?php $__env->startSection('section'); ?>


    <?php echo $__env->yieldContent('content'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>