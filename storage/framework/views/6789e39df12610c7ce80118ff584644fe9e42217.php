<?php $__env->startSection('page_heading','Search Student'); ?>
<?php $__env->startSection('section'); ?>

    <div class="page-container">
        <?php if(count($students) > 0): ?>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row student-row">
                    <div class="col-sm-9">
                        <p class="details">UID #<?php echo e($student->uid); ?></p>     
                        <p class="lead-details"><?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?></p>
                        <p class="details"><?php echo e($student->email_id); ?></p>
                        <strong>Branch : </strong> <?php echo e($student->branch); ?></p>
                        <p class="details"></p>
                        <div id="commentform">
                        <?php echo e(Form::open(['action' => ['CommentController@store'], 'method' => 'POST' ])); ?>

                            <?php echo e(Form::label('comment', 'Enter your remark here')); ?>

                            <?php echo e(Form::textarea('comment', '', ['class' => 'form-control article-ckediter'])); ?>

                            <?php echo e(Form::hidden('UID', $student->uid)); ?>

                            <br>
                            <?php echo e(Form::submit('Submit', array('class' => 'btn btn-primary'))); ?>

                            <br><br>
                        <?php echo e(Form::close()); ?>

                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <button class="btn btn-success commentbtn">Make a Remark</button>
                    </div>
                </div>
                <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <h3>No student found</h3>
        <?php endif; ?>
    </div>

<script>
$(document).ready(function() {
    $(".student-row .commentbtn").click(function(){
        console.log("clicked");
        $(this).parent().parent().find("#commentform").slideToggle();
    });
});
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>