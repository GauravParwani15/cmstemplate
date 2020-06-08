<?php $__env->startSection('page_heading','Generate Report'); ?>
<?php $__env->startSection('section'); ?>
  
    <h4>Enter number of years for which staff is to be sorted according to date of joining (RID : 13)<h4><br>
    <div class="row">
        <?php echo e(Form::open(['action' => 'FacultyController@generate_list_with_doj', 'method'=>'GET'])); ?>

        <div class="col-sm-2">
            <div class="form-group">
                <?php echo e(Form::number('year_doj', '', ['class'=> 'form-control', 'placeholder'=>'N years_doj'])); ?>

            </div>
        </div>

        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-success'])); ?>

        <?php echo e(Form::close()); ?> 
    </div>
    <?php if(isset($data)): ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr.No</th>                        
                        <th>E_id</th>
                        <th>Name</th>
                        
                        <th>Date of Joining</th>

                    </tr>
                </thead>
                <?php $i=0 ?> 
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    
                <?php $i++ ?>
                    <tr>    
                        <td><?php echo e($i); ?></td>                   
                        <td><?php echo e($d->e_id); ?></td>
                        <td><?php echo e($d->first_name); ?> <?php echo e($d->last_name); ?></td>
                        <td><?php echo e($d->doj); ?></td>                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
            </table>           
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>