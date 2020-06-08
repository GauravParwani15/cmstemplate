<?php $__env->startSection('page_heading','Enroll Students'); ?>
<?php $__env->startSection('submit'); ?>
<?php echo e(Form::open(['action' => 'ExamDeptController@show_update_student', 'method'=>'GET'])); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('exam'); ?>

    <?php if(isset($term_id)): ?>
        <div class="page-container">
            
            <h3>Enrolled in Term ID: <?php echo e($term_id); ?></h3><br><br>
            <?php if(isset($array)): ?>
                <div class="col-sm-12">
                    <div class="table-responsive col-sm-11">
                        <?php echo e(Form::open(['action' => 'ExamDeptController@enrollStudents', 'method'=>'POST'])); ?>

                        <table class="table col-sm-10 text-center" id="studList">
                            <tr>
                                <th>Select</th>            
                                <th class="text-center">UID</th>            
                                <th class="text-center">Student Name</th>            
                            </tr>
                                <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uid => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo Form::checkbox('selected[]', $uid, 'true', ['class' => 'checkbox']); ?></td>
                                    <td><?php echo e($uid); ?></td>
                                    <td><?php echo e($name); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo e(Form:: hidden('term_id',$term_id)); ?>

                        <?php echo e(Form:: hidden('division',$division)); ?>

                        <button type="submit" class="btn btn-success pull-right">Enroll these Students</button>
                        
                        <?php echo e(Form::close()); ?>

                    </div>
            </div>
            <?php else: ?>
                <p>No Student</p>
            <?php endif; ?>
            
            
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" name="uid" id="uid" class="form-control" placeholder="UID">
                        <div class="input-group-btn">
                            <input type="submit" name="addStudent" id="addStudent" class="btn btn-secondary" onclick="addToTable()" value="Add this Student" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<script>

function addToTable()
{
    $uid = $("#uid").val();
    
    $.ajax({
        type:'post',
        url:'<?php echo URL::to("staff/exam/update/student/addStudent"); ?>',
        data:{"uid": $uid,
              "_token":"<?php echo e(csrf_token()); ?>"},
        success:function(name)
        {
            console.log('success4');
            console.log(name);
            $name = name;
            $("#studList").append(
                '<tr><td><input type="checkbox" checked class="checkbox" name="selected[]" value='+$uid+'></td>'+'<td>'+$uid+'</td>'+'<td>'+$name+'</td>'+'</tr>');
        },
        error:function(response)
        {
            alert(response);
            console.log('failed');
        }
    });
}

</script>
<?php echo $__env->make('faculty.exam.layouts.filters', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>