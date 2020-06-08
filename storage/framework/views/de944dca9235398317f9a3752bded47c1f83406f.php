<?php $__env->startSection('page_heading','Delete Attendance'); ?>
<?php $__env->startSection('section'); ?>
<form method="POST" action="deleteconfirm">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <input type="hidden" name="date" value="<?php echo e($request->Date); ?>">
    <input type="hidden" name="SubAllotId" value="<?php echo e($request->SubAllotId); ?>">
    <?php if(count($data)==1): ?>
    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel panel-default" style="text-align:center">
            <div class="panel-heading">
                <h3>Do you want to delete the attendance record of date "<?php echo e($request->Date); ?>"?</h3>
            </div>
            <div class="panel-body">
                <button type="submit" value="yes" name="ans" class="btn btn-success btn-lg">Yes</button>
                <button type="submit" value="no" name="ans" class="btn btn-danger btn-lg">No</button>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel panel-default" style="text-align:center">
            <div class="panel-heading">
                <h3>Select Meeting number for the date "<?php echo e($request->Date); ?>" to delete:</h3>
            </div>
            <div class="panel-body">
                <div class="col-sm-4 col-sm-offset-2 col-xs-9">
                    <select name="index" class="form-control">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($d->contact_head_meeting_index); ?>">Meeting Number: <?php echo e($d->contact_head_meeting_index); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <button type="submit" value="yes" name="ans" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>