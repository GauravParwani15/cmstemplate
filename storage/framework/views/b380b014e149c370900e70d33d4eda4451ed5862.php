<?php $__env->startSection('page_heading','Confirm Batches'); ?>
<?php $__env->startSection('section'); ?>

<div class = "col-sm-8 col-md-8">
    <?php if(count($data)>1): ?>
    <?php echo Form::open(['method'=>'POST','action' => 'ClassTeacherController@update_batches']); ?>

        <table class="table table-hover">
            <tr>
               
                <th>UID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Roll no.</th>
                <th>Batch</th>
            </tr>
            <?php for($i=0; $i<count($data); $i++): ?>
            <tr>
               
                <td><?php echo e($data[$i]->UID); ?></td>
                <td><?php echo e($data[$i]->first_name); ?></td>
                <td><?php echo e($data[$i]->last_name); ?></td>
                <td><?php echo e($data[$i]->roll_no); ?></td>
                <td classs="form-control" width=20%>
                    <?php echo e($batches[$i]); ?>

                </td>
            </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-4 col-sm-4 "></div>
        <div class="col-md-2 col-sm-2">
            <?php echo e(Form::submit('Submit',['class'=>'btn btn-success btn-lg'])); ?>

        </div>  
    </div>
    <?php echo Form::close(); ?>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>