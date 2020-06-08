<?php $__env->startSection('page_heading','Select Date'); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
<?php echo Form::open(['action'=>'StudentAttendanceController@control', 'method'=>'POST']); ?>

	<div class="col-sm-offset-4 col-sm-4">
		<div class="form-group ">
			<?php if(strtotime($Date['end_date']) > time()): ?>
				<input class="form-control text-center input-lg" id="date" name="Date" max="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" min="<?php echo e($Date['start_date']); ?>" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="ENTER DATE" value="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" required/>
			<?php else: ?>
				<input class="form-control text-center input-lg" id="date" name="Date" max="<?php echo e($Date['end_date']); ?>" min="<?php echo e($Date['start_date']); ?>" onfocus="(this.type='date')" onblur="(this.type='text')"  placeholder="ENTER DATE" value="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" required/>
			<?php endif; ?>
		</div>
		<input type="hidden" name="SubAllotId" value="<?php echo e($request->SubAllotId); ?>">
		<input type="hidden" name="TermID" value="<?php echo e($request->TermID); ?>">
		<input type="hidden" name="Division" value="<?php echo e($request->Division); ?>">
		<input type="hidden" name="ContactHead" value="<?php echo e($request->ContactHead); ?>">
		<input type="hidden" name="submit" value="<?php echo e($request->submit); ?>">

	</div>
	<div class="col-sm-2">
		<button type="submit" name="next" class="btn btn-danger btn-lg" value="submit">Next</button>
	</div>
</div>
	
<?php echo Form::close(); ?>

<?php if($request->submit == 'View'): ?>
	<hr>
	<h3>Download Class report</h3>
	<div class="row">
	<?php echo Form::open(['action'=>'StudentAttendanceController@retrieveexcel', 'method'=>'POST']); ?>

		<div class="col-sm-10 col-sm-offset-1">
			<div class="col-sm-4 col-sm-offset 1">
				<div class="form-group">
					<?php if(strtotime($Date['end_date']) > time()): ?>
						<input class="form-control text-center  input-lg" id="date" name="SDate" max="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" min="<?php echo e($Date['start_date']); ?>" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="ENTER DATE" value="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" required/>
					<?php else: ?>
						<input class="form-control text-center" id="date" name="SDate" max="<?php echo e($Date['end_date']); ?>" min="<?php echo e($Date['start_date']); ?>" onfocus="(this.type='date')" onblur="(this.type='text')"  placeholder="ENTER DATE" value="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" required/>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<?php if(strtotime($Date['end_date']) > time()): ?>
						<input class="form-control text-center  input-lg" id="date" name="EDate" max="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" min="<?php echo e($Date['start_date']); ?>" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="ENTER DATE" value="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" required/>
					<?php else: ?>
						<input class="form-control text-center  input-lg" id="date" name="EDate" max="<?php echo e($Date['end_date']); ?>" min="<?php echo e($Date['start_date']); ?>" onfocus="(this.type='date')" onblur="(this.type='text')"  placeholder="ENTER DATE" value="<?php echo e(date("Y")); ?>-<?php echo e(date("m")); ?>-<?php echo e(date("d")); ?>" required/>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-2">
				<button type="submit" name="next" class="btn btn-danger btn-lg" value="submit">Next</button>
			</div>
		</div>
		<input type="hidden" name="SubAllotId" value="<?php echo e($request->SubAllotId); ?>">
	<?php echo Form::close(); ?>

	</div> 
<?php endif; ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.attendance', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>