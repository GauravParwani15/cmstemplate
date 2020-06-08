<?php $__env->startSection('page_heading','Student Attendance'); ?>
<?php $__env->startSection('section'); ?>
<div class="col-sm-10 col-sm-offset-1">
    <div class="panel panel-default" style="text-align:center">
        <div class="panel-heading">
            <h3>You have conducted <?php echo e($query->contact_head_meeting_index); ?> lecture(s) on <?php echo e($request->Date); ?></h3>
        </div>
        
        <div class="panel-body">
            <?php echo e(Form::open(array('action' => 'StudentAttendanceController@addnew'))); ?>

            <div class="col-xs-6">
                <input type="hidden" name="contact_head_meeting_index" value="<?php echo e($query->contact_head_meeting_index); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="Date" value="<?php echo e($request->Date); ?>">
                <input type="hidden" name="SubAllotId" value="<?php echo e($request->SubAllotId); ?>">
                <input type="hidden" name="TermID" value="<?php echo e($request->TermID); ?>">
                <input type="hidden" name="Division" value="<?php echo e($request->Division); ?>">
                <input type="hidden" name="ContactHead" value="<?php echo e($request->ContactHead); ?>">
                <button type="submit" class="btn btn-success" value="yes" name="btn" >Add New Attendance</button>
            </div>
            <?php echo e(Form::close()); ?>

            <?php echo e(Form::open(['action' => 'StudentAttendanceController@update','method'=>'get'])); ?>

            <div class="col-sm-6">
                <input type="hidden" name="contact_head_meeting_index" value="<?php echo e($query->contact_head_meeting_index); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="Date" value="<?php echo e($request->Date); ?>">
                <input type="hidden" name="SubAllotId" value="<?php echo e($request->SubAllotId); ?>">
                <input type="hidden" name="TermID" value="<?php echo e($request->TermID); ?>">
                <input type="hidden" name="Division" value="<?php echo e($request->Division); ?>">
                <input type="hidden" name="ContactHead" value="<?php echo e($request->ContactHead); ?>">
                <button type="submit" class="btn btn-danger" value="no" name="btn">Update</button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>