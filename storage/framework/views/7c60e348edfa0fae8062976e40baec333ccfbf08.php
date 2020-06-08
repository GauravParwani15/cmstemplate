<?php $__env->startSection('page_heading','Assign Staff'); ?>
<?php $__env->startSection('submit'); ?>
<?php echo e(Form::open(['action' => 'FacultyController@courseassign', 'method'=>'GET'])); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('exam'); ?>

<div class="page-container">
    <?php if(isset($div)): ?>
    <?php echo e(Form::open(['action' => 'FacultyController@submitCourse', 'method'=>'POST'])); ?>   
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                    <h3><?php echo e($course->course_code); ?> &nbsp;&nbsp;&nbsp <?php echo e($course->course_name); ?></h3>
            </div>

            <section>
                <?php if($course->th_hrs > 0): ?>
                    <p class="lead-details">Theory</p>
                    <?php for($i=0; $i < $course->th_hrs; $i++): ?> 
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="ith_<?php echo e(str_replace(' ', '', $course->course_code)); ?>" class="details">Hour <?php echo e($i+1); ?> Assigned to: 
                                    <span class="match"></span>
                                </label>
                                <input type="hidden" name="hth_<?php echo e(str_replace(' ', '', $course->course_code)); ?>" class="hidden-input">
                                <input type="text" name="ith_<?php echo e(str_replace(' ', '', $course->course_code)); ?>" class="form-control <?php echo e($i); ?> staff-input" required>
                            </div>
                        </div>
                    <?php endfor; ?>
                    
                <?php endif; ?>
            </section>
            
            <section>
                <?php if($course->pr_hrs > 0): ?>
                    <?php
                        $batches = array_map('intval', explode(',',$course->pr_batches));
                        $batchCount = $batches[$div-1];
                    ?>
                    <p class="lead-details">Practical</p>
                    <?php for($j=0; $j<$batchCount; $j++): ?>
                        <p class="lead-details">Batch <?php echo e(chr($j+65)); ?></p>
                        <section>
                        <?php for($i=0; $i < $course->pr_hrs; $i++): ?> 
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="iph_<?php echo e($course->course_code); ?>" class="details">Hour <?php echo e($i+1); ?> Assigned to: 
                                        <span class="match"></span>
                                    </label>
                                    <input type="hidden" name="hph_<?php echo e(str_replace(' ', '', $course->course_code)); ?>_<?php echo e(chr($j+65)); ?>" class="hidden-input">
                                    <input type="text" name="iph_<?php echo e($course->course_code); ?>_<?php echo e(chr($j+65)); ?>" class="form-control <?php echo e($i); ?> staff-input" required>
                                </div>
                            </div>
                        <?php endfor; ?>
                        </section>
                    <?php endfor; ?>
                <?php endif; ?>
            </section>
        
            <section>
                <?php if($course->tut_hrs > 0): ?>
                    <?php
                        $batches = array_map('intval', explode(',',$course->tut_batches));
                        $batchCount = $batches[$div-1];
                    ?>
                    <p class="lead-details">Tutorial</p>
                    <?php for($j=0; $j<$batchCount; $j++): ?>
                        <p class="lead-details">Batch <?php echo e(chr($j+65)); ?></p>
                        <section>
                        <?php for($i=0; $i < $course->tut_hrs; $i++): ?> 
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="iuh_<?php echo e($course->course_code); ?>" class="details">Hour <?php echo e($i+1); ?> Assigned to: 
                                        <span class="match" name="ouh_<?php echo e($course->course_code); ?>"></span>
                                    </label>
                                    <input type="hidden" name="huh_<?php echo e(str_replace(' ', '', $course->course_code)); ?>_<?php echo e(chr($j+65)); ?>" class="hidden-input">
                                    <input type="text" name="iuh_<?php echo e($course->course_code); ?>_<?php echo e(chr($j+65)); ?>" class="form-control <?php echo e($i); ?> staff-input" required>
                                </div>
                            </div>
                        <?php endfor; ?>
                        </section>
                    <?php endfor; ?>
            <?php endif; ?>
            </section>
            
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <input type="submit" value="Submit" class="btn btn-success">
        <?php echo e(Form::close()); ?>

    <?php else: ?>
        <p class="lead-details">Please enter a valid class</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(mix('js/app.js')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.staff-input', function(){
            var staff_name = $(this).val();
            var staff_input = $(this);
            var row = $(this).parent();
            // var div = row.find('.match').html(staff_name);
            var op = "";
            $.ajax({
                type:'get',
                url:'<?php echo URL::to('staff/faculty/match'); ?>',
                data:{'term': staff_name},
                success:function(match){
                    console.log(match);
                    row.find('.match').html(match['first_name']+' '+match['last_name']);
                    row.find('.staff-input').val(match['first_name']+' '+match['last_name']);
                    row.find('.hidden-input').val(match['e_id']);
                    console.log(staff_input.hasClass('0'));
                    if(staff_input.hasClass('0')){
                        console.log("this is 0");
                        var parent_div = staff_input.parent().parent().parent();
                        parent_div.find('.match').html(match['first_name']+' '+match['last_name']);
                        parent_div.find('.staff-input').val(match['first_name']+' '+match['last_name']);
                        parent_div.find('.hidden-input').val(match['e_id']);
                    }
                },
                error:function(){
                    console.log("Error");
                }
            });
        });

    });
</script>
<?php echo $__env->make('faculty.exam.layouts.filters', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>