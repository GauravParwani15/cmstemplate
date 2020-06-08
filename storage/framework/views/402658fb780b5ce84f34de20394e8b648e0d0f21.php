<?php $__env->startSection('page_heading','Update Student'); ?>
<?php $__env->startSection('section'); ?>

<div class="col-sm-8">
    <div class="input-group custom-search-form" >

        
            <input type="text" class="form-control" placeholder="Search Student">

            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
                </button>
            </span> 
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>