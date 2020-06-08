<?php $__env->startSection('page_heading','Generate Attendance Report'); ?>
<?php $__env->startSection('section'); ?>


    <div class="page-container">
        <?php echo Form::open(['action'=>'ClassTeacherController@generate_attendance_report', 'method'=>'POST']); ?>

            <div class="row">
                
                <div class="col-sm-2 col-sm-offset-3">
                    <div class="form-group">
                        <label for="course_code"><h3>Start Date:</h3></label>
                        <input type="date" class="form-control" name="course_code" required />
                    </div>             
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="course_code"><h3>End Date:</h3></label>
                        <input type="date" class="form-control" name="course_code" required />
                    </div>                  
                </div>
            </div>
        <?php echo Form::close(); ?>


        <hr>
        
        <div class="table-responsive">          
            <table class="table table-bordered">
            <caption><h3>Term ID 1</h3></caption>
                <thead>
                    <tr>
                        <th class="text-center" rowspan="2">UID</th>
                        
                        <th class="text-center" colspan="3">Subject Name 1</th>
                    </tr>
                    <tr>
                        <th class="text-center">Present</th>
                        <th class="text-center">Absent</th>
                        <th class="text-center">Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $StudentList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $List): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($List->student_allotment_uid); ?></td>
                        <td><?php echo e($List->term_id); ?></td>
                        <td><?php echo e($List->division); ?></td>
                        <td><?php echo e($List->UID); ?></td>
                        <td><?php echo e($List->roll_no); ?></td>
                        <td><?php echo e($List->batch); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>