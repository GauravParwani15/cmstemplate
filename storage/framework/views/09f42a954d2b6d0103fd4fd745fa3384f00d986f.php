<?php $__env->startSection('page_heading','Attendance'); ?>
<?php $__env->startSection('section'); ?>

    <div>
        <div>
            <?php if(count($data1)==1): ?>
                <h4>Change date of attendance<h4>
                <?php echo Form::open(['action' => 'StudentAttendanceController@update_date','method'=>'post']); ?>

                    <div class="col-sm-3 col-sm-offset-3"><input type="date" name="date1" class="form-control" required="true"></div>
                    <input type="hidden" value="<?php echo e($date_old); ?>" name="date_old">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" value="<?php echo e($index); ?>" name="index">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="hidden" value="<?php echo e($student->sub_allotment_id); ?>" name="sub">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    <div class="row">
                        <br>  
                        <div class="col-md-4 col-xs-4">
                        </div>         
                        <div class="col-sm-2"><input type="submit" class="btn btn-success" name="Submit"></div>
                    </div>
                <?php echo Form::close(); ?>       
                <br><br>
                <hr>
                <h4>Change attendance of student<h4><br>
                <div class="row">
                <?php echo Form::open(['action' => 'StudentAttendanceController@update_att', 'id' => 'attendance']); ?>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" value="<?php echo e($index); ?>" name="index">

                    

 
                    <div class="page-container" >
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button type="button" id="<?php echo e($student->roll_no); ?>"  class="attendance-card col-xs-2 col-sm-2 col-md-1 btn 
                        <?php 
                            $value = $student->attendance;
                            if($value == "0"){
                                echo "btn-danger";
                            }
                            elseif($value == "3"){
                                echo "";
                            }
                            elseif($value == "2"){
                                echo "btn-warning";
                            }
                            elseif($value == "1"){
                                echo "btn-success";
                            }
                         ?>
                        " onclick="toggle(<?php echo e($student->roll_no); ?>)"  >
                            <span id="info<?php echo e($student->roll_no); ?>" class="state">
                            <?php 
                                $value = $student->attendance;
                                if($value == "0"){
                                    echo "A";
                                }
                                elseif($value == "1"){
                                    echo "P";
                                }
                                elseif($value == "2"){
                                    echo "L";
                                }
                                elseif($value == "3"){
                                    echo "E";
                                }
                             ?>                                        
                            </span>
                            <div class="roll-no text-center"><?php echo e($student->roll_no); ?></div>
                            <div class="text-center name"><?php echo e(strtolower($student->first_name)); ?></div>

                            <input type="hidden" name="UIDs[]" id="UID<?php echo e($student->roll_no); ?>" value="<?php echo e($student->uid); ?>">
                            <input type="hidden" class="attendancegg" id="attendance<?php echo e($student->roll_no); ?>" name="attendanceVal[]" value="<?php echo e($student->attendance); ?>">
                        </button>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                    </div>
                    <div class="col-md-4 col-xs-4">
                    </div>
                    <div class="row">
                        <div class="col-sm-7 col-sm-offset-5"><input type="submit" class="btn btn-primary btn-lg" name="Submit_att"></div>
                    </div>
                <?php echo Form::close(); ?>  
                </div>   
            <?php else: ?>
                <div class="col-sm-10 col-sm-offset-1">
                    <form method="POST" action="updateconfirm">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">  
                        <input type="hidden" value="1" name="u/r">    
                        <div class="panel panel-default" style="text-align:center">
                            <div class="panel-heading">
                                <h3>Select Meeting number for the date "<?php echo e($date_old); ?>" to update:</h3> <br>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-4 col-sm-offset-2 col-xs-9">
                                    <select name="index" class="form-control">
                                        <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($d->contact_head_meeting_index); ?>">Meeting Number: <?php echo e($d->contact_head_meeting_index); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" value="yes" name="ans" class="btn btn-success">Update</button><br><br>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
                
        </div>
        <script>
        //document.forms.attendance.elements['UIDs[]'] = []
        
        document.forms.attendance.elements['UIDs'] = [];
        document.forms.attendance.elements['attendanceVal'] = [];
        
         
            function toggle(roll_no){
               
                var status = document.getElementById('attendance'+roll_no).value;
                if(status=="1"){
                    status="0";
                    att_status = "A";
                    document.getElementById('info'+roll_no).innerHTML = att_status;
                    document.getElementById('attendance'+roll_no).value = status;
                    document.getElementById(roll_no).setAttribute("class","attendance-card col-xs-2 col-sm-2 col-md-1 btn btn-danger");
                }else if(status=="0"){
                    status="2";
                    att_status = "L";
                    document.getElementById('info'+roll_no).innerHTML = att_status;
                    document.getElementById('attendance'+roll_no).value = status;
                    document.getElementById(roll_no).setAttribute("class","attendance-card col-xs-2 col-sm-2 col-md-1 btn btn-warning");
                }else if(status=="2"){
                    status="3";
                    att_status = "E";
                    document.getElementById('info'+roll_no).innerHTML = att_status;
                    document.getElementById('attendance'+roll_no).value = status;
                    document.getElementById(roll_no).setAttribute("class","attendance-card col-xs-2 col-sm-2 col-md-1 btn");
                }else if(status=="3"){
                    status="1";
                    att_status = "P";
                    document.getElementById('info'+roll_no).innerHTML = att_status;
                    document.getElementById('attendance'+roll_no).value = status;
                    document.getElementById(roll_no).setAttribute("class","attendance-card col-xs-2 col-sm-2 col-md-1 btn btn-success");
                }
                if(document.forms.attendance.elements['UIDs'].indexOf(document.getElementById("UID" + roll_no)) === -1){
                    document.forms.attendance.elements['UIDs'].push(document.getElementById("UID" + roll_no));
                    document.forms.attendance.elements['attendanceVal'].push(document.getElementById("attendance" + roll_no));
                }
                
                //console.log(document.forms.attendance.elements['UIDs']);
                //console.log(document.forms.attendance.elements['attendanceVal']);


            }
        </script>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>