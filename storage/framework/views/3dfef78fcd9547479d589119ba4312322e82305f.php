<?php $__env->startSection('section'); ?>
    <div class="row">
        <?php echo $__env->yieldContent('submit'); ?>
            <div class="col-sm-2">
                <div class="form-group">
                    <select name="year" class="form-control" id="year">
                        <option value="-1" disabled selected>Select Year</option>
                        <option selected><?php echo e($date = date('Y')); ?></option>
                        <?php for($i=$date-1;$i>=2010;$i--): ?>
                            <option><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select name="course" class="form-control" id="course">
                        <option value="-1">Select Course</option>   
                        <?php $__currentLoopData = $json['course']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($course['courseIndex']); ?>"><?php echo e($course['courseName']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <select name="branch" class="form-control" id="branch">
                        <option value="-1" disabled selected>Select Branch</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select name="sem" class="form-control" id="sem">
                        <option value="-1" disabled selected>Select Semester</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select name="division" class="form-control" id="division">
                        <option value="-1" disabled selected>Select Division</option>
                    </select>
                </div>
            </div>
             
            <?php echo e(Form::submit('Submit', ['class'=>'btn btn-success'])); ?>

        <?php echo e(Form::close()); ?>


    </div>
    
    <div class="row">
        <?php echo $__env->yieldContent('exam'); ?>
    </div>
    
<script type="text/javascript">
    $(document).ready(function(){
        var e;
        $(document).on('change','#course', function(){
            var course_id = $(this).val();
            e = course_id;

            var div = $('#branch').parent();
            var op = "";
            $.ajax({
                type:'get',
                url:'<?php echo URL::to('staff/exam-branch'); ?>',
                data:{'id': course_id},
                success:function(data){
                    console.log('success');
                    console.log(data);
                    console.log(data.length);
                    op+='<option value="-1" disabled selected>Select Branch</option>';
                    for(var i = 0;i<data.length;i++)
                    {
                        op+='<option value="'+data[i].branchindex+'">'+data[i].name+'</option>';
                    }

                    div.find('#branch').html("");
                    div.find('#branch').append(op);

                },
                error:function(){

                }
            });
            

            var d = $('#sem').parent();
            var o = "";

            $.ajax({
                type:'get',
                url:'<?php echo URL::to('staff/exam-sem'); ?>',
                data:{'id': course_id},
                success:function(semData){
                    console.log('success');
                    console.log(semData);
                    console.log(semData.length);
                    o+='<option value="-1" disabled selected>Select Semester</option>';
                    for(var i = 1;i<=semData.semesters;i++)
                    {
                        o+='<option value="'+i+'">'+i+'</option>';
                    }

                    d.find('#sem').html("");
                    d.find('#sem').append(o);

                },
                error:function(){

                }
            });
        
        });

        //Select Division
            
        $(document).on('change','#branch', function(){
            var branch_id = $(this).val()-1;    //-1 so that the index of json and branch match
            var div_division = $('#division').parent();
            var op_division = "";

            $.ajax({
                type:'get',
                url:'<?php echo URL::to('staff/exam-division'); ?>',
                data:{'id': branch_id,'e':e},
                success:function(branchData){
                    console.log('success3');
                    console.log(branchData);
                   /*
                        branchData is automatically converted to a js object from json
                        but we still have to parse the division which is still in string
                   */ 
                    var sum = branchData.reduce((prev, curr)=>{
                        return prev + parseInt(curr.divisions);
                    }, 0);
                    console.log(branchData.length);
                    console.log(sum);
                    op_division+='<option value="-1" disabled selected>Select Division</option>';
                    for(var i = 1;i<=sum;i++)
                    {
                        op_division+='<option value="'+i+'">'+String.fromCharCode(i+64)+'</option>';
                    }

                    div_division.find('#division').html("");
                    div_division.find('#division').append(op_division);

                },
                error:function(){

                }
            });
        });

    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>