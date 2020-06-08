<?php $__env->startSection('page_heading','View Comments'); ?>
<?php $__env->startSection('section'); ?>

    <div class="page-container">
        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($students[$index]->uid); ?></p>
            <h3><?php echo e($students[$index]->first_name); ?> <?php echo e($students[$index]->last_name); ?></h3>
            <p class="lead-details"><?php echo e($comment->comment); ?></p>
            <p class="details"><?php echo e($comment->created_at); ?></p>
            
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>