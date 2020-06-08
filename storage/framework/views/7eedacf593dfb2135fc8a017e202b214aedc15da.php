<?php $__env->startSection('page_heading','Student Attendance'); ?>
<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger text-center">
	<?php echo e($errors->first()); ?>

</div>
<?php endif; ?>
<?php $id = 0?>
<?php if(count($Subject)>0): ?>
<?php $__currentLoopData = $Subject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-offset-1 col-sm-10">
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($id); ?>" style="text-decoration: none;">
				<div class="row">
					<div class="panel-heading">
						
						<div class="col-lg-5 input-lg">
							<h3 class="panel-title"><i class="fa fa-caret-down" aria-hidden="true"></i> <?php echo e($Course[$id][2]); ?></h3>
						</div>
						<?php $count = 0; ?>
						<div class="col-lg-offset-1 col-lg-5 input-lg">
							<?php $__currentLoopData = $Class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($count == substr($Subject->term_id, -3, 1)): ?>
							<h4 class="panel-title">
							<?php echo e($class['courseName']); ?> / <?php echo e($class['branches'][substr($Subject->term_id, -2, 1) - 1]['name']); ?> / SEM-<?php echo e(substr($Subject->term_id, -1, 1)); ?> / DIV-<?php echo e($Subject->division); ?> / <?php echo e($Subject->contact_head); ?>

							</h4>
							<?php $count++; ?>
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>
				</div>
			</a>
			<div id="collapse<?php echo e($id++); ?>" class="panel-collapse collapse">
				<div class="panel-body text-center">
					<!-- <hr> -->
					<?php echo Form::open(['action'=>'StudentAttendanceController@date', 'method'=>'POST']); ?>

					<input type="hidden" name="SubAllotId" value="<?php echo e($Subject->sub_allotment_id); ?>">
					<input type="hidden" name="TermID" value="<?php echo e($Subject->term_id); ?>">
					<input type="hidden" name="Division" value="<?php echo e($Subject->division); ?>">
					<input type="hidden" name="ContactHead" value="<?php echo e($Subject->contact_head); ?>">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="btn-block btn-group ">
								<button type="submit" name="submit" class="btn btn-primary col-xs-3" value="Add">ADD</button>
								<button type="submit" name="submit" class="btn btn-success col-xs-3" value="Update">UPDATE</button>
								<button type="submit" name="submit" class="btn btn-info col-xs-3" value="View">VIEW</button>
								<button type="submit" name="submit" class="btn btn-danger col-xs-3" value="Delete">DELETE</button>
							</div>
						</div>
					</div>
					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
	<h3>No subjects are alloted to you! Please contact time table incharge.<h3>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.attendance', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>