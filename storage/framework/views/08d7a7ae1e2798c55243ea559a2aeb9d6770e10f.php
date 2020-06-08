<?php $__env->startSection('page_heading','View Attendance'); ?>
<?php $__env->startSection('section'); ?>

<div>
    <div>
        <div>
            <?php if(count($data1)==1): ?>                                
            <div class="page-container">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" value="<?php echo e($index); ?>" name="index">
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
                        " onclick="" >
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
            <div class="col-xs-12">
                <div class="col-sm-7 col-sm-offset-5 col-xs-offset-2 ">
                <a href="<?php echo e(url('/staff/StudentAttendance')); ?>" style="text-decoration: none; color:#ffffff;"><button class="btn btn-success">Go to Studence attendance</a></button>
                </div>
            </div>
                    
                     
            <?php else: ?>
            <div class="col-sm-10 col-sm-offset-1">
                    <form method="POST" action="updateconfirm">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">  
                        <input type="hidden" value="0" name="u/r">    
                        <div class="panel panel-default" style="text-align:center">
                            <div class="panel-heading">
                                <h3>Select Meeting number for the date "<?php echo e($date_old); ?>" to view:</h3> <br>
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
                                    <button type="submit" value="yes" name="ans" class="btn btn-success">View</button><br><br>
                                    
                                </div>
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
            
            var status = document.getElementById('info'+roll_no).innerHTML
            if(status=="1"){
                status="0";
            
                document.getElementById('info'+roll_no).innerHTML = status;
                document.getElementById('attendance'+roll_no).value = status;
                document.getElementById(roll_no).setAttribute("class","btn btn-danger btn-xs btn-block");
            }else if(status=="0"){
                status="2";
                
                document.getElementById('info'+roll_no).innerHTML = status;
                document.getElementById('attendance'+roll_no).value = status;
                document.getElementById(roll_no).setAttribute("class","btn btn-warning btn-xs btn-block");
            }else if(status=="2"){
                status="3";
            
                document.getElementById('info'+roll_no).innerHTML = status;
                document.getElementById('attendance'+roll_no).value = status;
                document.getElementById(roll_no).setAttribute("class","btn btn-primary btn-xs btn-block");
            }else if(status=="3"){
                status="1";
            
                document.getElementById('info'+roll_no).innerHTML = status;
                document.getElementById('attendance'+roll_no).value = status;
                document.getElementById(roll_no).setAttribute("class","btn btn-success btn-xs btn-block");
            }
        </script>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>