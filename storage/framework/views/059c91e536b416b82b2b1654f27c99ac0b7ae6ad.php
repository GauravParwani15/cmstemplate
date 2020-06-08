<?php $__env->startSection('page_heading','Student Attendance'); ?>
<?php $__env->startSection('section'); ?>


<div class="col-md-offset-5 col-xs-offset-5 onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" onclick="changeall()">
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>


<?php echo Form::open(['action' => 'StudentAttendanceController@addnewRecord','method'=>'post']); ?>

    <div class="page-container">
        <?php if(count($data)>0): ?>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="Date" value="<?php echo e($request->Date); ?>">
            <input type="hidden" name="SubAllotId" value="<?php echo e($request->SubAllotId); ?>">
            <input type="hidden" name="TermID" value="<?php echo e($request->TermID); ?>">
            <input type="hidden" name="Division" value="<?php echo e($request->Division); ?>">
            <input type="hidden" name="ContactHead" value="<?php echo e($request->ContactHead); ?>">
            <input type="hidden" name="chmi" value="<?php echo e($request->contact_head_meeting_index); ?>">
            <div class="row">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" id="<?php echo e($dataa->roll_no); ?>"  class="attendance-card col-xs-2 col-sm-2 col-md-1 btn-success" onclick="toggle(<?php echo e($dataa->roll_no); ?>)" >
                        <span id="info<?php echo e($dataa->roll_no); ?>" class="state">P</span>
                        <div class="roll-no text-center"><?php echo e($dataa->roll_no); ?></div>
                        <div class="text-center name"><?php echo e(strtolower($dataa->first_name)); ?></div>

                        <input type="hidden" name="UIDs[]" value="<?php echo e($dataa->uid); ?>">
                        <input type="hidden" class="attendancegg" id="attendance<?php echo e($dataa->roll_no); ?>" name="attendanceVal[]" value="1">
                    </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-md-4 col-xs-4 col-md-offset-4 col-xs-offset-4">
        <div class="row">
            <input class="btn btn-info btn-lg btn-block" type="submit" value="Save" name="submit"> 
        </div>
    </div>
<?php echo Form::close(); ?>



<script>
    function changeall(){
        /*
        var state = document.getElementsByClassName("attendancegg").value;
        if(state == "1"){
            state = "0";
            document.getElementsByClassName("state").innerHTML = A;
            document.getElementsByClassName("attendancegg").value = state;
        }else if(state == "0"){
            state = "1";
            document.getElementsByClassName("state").innerHTML = P;
            document.getElementByClassName("attendancegg").value = state;
        }*/
        var attendancegg = document.getElementsByClassName("attendancegg");
        var state = document.getElementsByClassName("state");
        var myonoffswitch = document.getElementById('myonoffswitch');
        var temp;

        for(var i = 0; i < attendancegg.length; i++){
            if(myonoffswitch.checked){
                attendancegg[i].value = "0";
                state[i].innerHTML = "A";
                state[i].parentElement.setAttribute("class","attendance-card col-xs-2 col-sm-2 col-md-1 btn-danger");
                //document.getElementsByClassName("state").innerHTML = A;
                //document.getElementsByClassName("attendancegg").value = state;
         }else{
                attendancegg[i].value = "1";
                state[i].innerHTML = "P";
                state[i].parentElement.setAttribute("class","attendance-card col-xs-2 col-sm-2 col-md-1 btn-success");
                //document.getElementsByClassName("state").innerHTML = P;
                //attendance.innerHTML = P;
                //document.getElementByClassName("attendancegg").value = state;
            }
        }
        //myonoffswitch.checked = temp;
        
    }
    function toggle(roll_no){
        
        var status = document.getElementById('attendance'+roll_no).value;
        if(status=="1"){
            status="0";
            att_status = "A";
            document.getElementById('info'+roll_no).innerHTML = att_status;
            document.getElementById('attendance'+roll_no).value = status;
            document.getElementById(roll_no).setAttribute("class","attendance-card col-xs-2 col-sm-2 col-md-1 btn-danger");
        }else if(status=="0"){
            status="1";
            att_status = "P";
            document.getElementById('info'+roll_no).innerHTML = att_status;
            document.getElementById('attendance'+roll_no).value = status;
            document.getElementById(roll_no).setAttribute("class","attendance-card col-xs-2 col-sm-2 col-md-1 btn-success");
        }
    }

    $("form").submit(function() {
    $(this).submit(function() {
        return false;
    });
    return true;
});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>