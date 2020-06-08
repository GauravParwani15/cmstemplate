<?php $__env->startSection('page_heading','Update Staff'); ?>
<?php $__env->startSection('section'); ?>

<div class="col-sm-8">
    <div class="col-sm-4">
        <input list="EIDs" id="EID" name="EID" class="form-control" placeholder="Enter Employee ID">
        <datalist id="EIDs">
        <?php
            for ($i=1; $i<=999; $i++)
            {
                ?>
                    <option value="<?php echo $i;?>" class="form-group"><?php echo $i;?></option>
                <?php
            }
        ?>
        </datalist>
        </input>
    </div>
    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-success'])); ?>

    <?php echo e(Form::close()); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>