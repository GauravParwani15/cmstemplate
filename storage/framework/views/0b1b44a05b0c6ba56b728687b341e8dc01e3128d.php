<?php $__env->startSection('page_heading','Dashboard'); ?>
<?php $__env->startSection('section'); ?>




    <div class="col-md-10 col-sm-10">
    <!--     <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=ves.ac.in_bql0ajrt7acnqvafac8di9e1nc%40group.calendar.google.com&amp;color=%23A32929&amp;src=ves.ac.in_1h06mbn2nhd98nj3747afssvac%40group.calendar.google.com&amp;color=%235229A3&amp;ctz=Asia%2FCalcutta" style="border-radius: 0px 0px 15px 15px" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
    </div> -->

    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=<?php echo e(session('email')); ?>&ctz=Asia%2FCalcutta" style="border-radius: 0px 0px 15px 15px" width="100%" height="500" frameborder="0" scrolling="no"></iframe>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>