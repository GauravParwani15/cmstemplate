<?php $__env->startSection('page_heading','Personal'); ?>
<?php $__env->startSection('section'); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <ul>
                
                    <h4><strong>UID:</strong> #<?php echo e($students->UID); ?></h4>
                    <h2><?php echo e($students->FirstName); ?> <?php echo e($students->MiddleName); ?> <?php echo e($students->LastName); ?></h2>
                    <p><strong>EmailId:</strong> <?php echo e($students->EmailId); ?></p>
                    <p><strong>PhoneNumber:</strong> <?php echo e($students->MobileNo); ?></p>
                    <p><strong>Class:</strong> <?php echo e($students->Class); ?>

                    [<?php echo e($students->Branch); ?>]
                    </p>
                    <p><strong>Admission Type:</strong> 
                    <?php if($students->TypeOfAdmission == 0): ?>
                        FE
                    <?php else: ?>
                        DSE    
                    <?php endif; ?>    
                    </p>
                </ul>
            </div>
            <div class="col-sm-4">
               <img src="<?php echo e($students->image); ?>" class="rounded" style=" width: 150px; height: 150px;">
               <?php echo e($students->Image); ?>

            </div>
        </div>
        <br><hr>
        <div class="row">
            <div class="col-sm-4">
                <h3>Personal details</h3>
            </div>
            
            <div class="col-sm-8"><br>
            
                <?php echo Form::open(['action' => 'StudentController@home']); ?>

                    <div class="form-group">
                        <?php echo e(Form::label('aadhar_no', 'Aadhar Card Number')); ?>

                        <?php echo e(Form::text('aadhar_no',$students->AadharCard,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        
                        <?php echo e(Form::label('gender', 'Gender')); ?>

                        <?php if($students->Gender == 0): ?>
                            <?php echo e(Form::text('gender','FEMALE',['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        <?php else: ?>
                            <?php echo e(Form::text('gender','MALE',['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        <?php endif; ?>

                        <?php echo e(Form::label('dob', 'Date Of Birth')); ?>

                        <?php echo e(Form::date('dob',$students->DOB,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        
                        <?php echo e(Form::label('p_address', 'Permanent Address')); ?>

                        <?php echo e(Form::textarea('p_address',$students->PermanentAddress,['class'=>'form-control', 'disabled'=>'true',  'rows' => 3])); ?><br>
                        
                        <?php if( !empty ($students->TempAddress)): ?>
                        <?php echo e(Form::label('t_address', 'Temporary Address')); ?>

                        <?php echo e(Form::textarea('t_address',$students->TempAddress,['class'=>'form-control', 'disabled'=>'true',  'rows' => 3])); ?><br>
                        <?php endif; ?>

                        <?php echo e(Form::label('blood_group', 'Blood Group')); ?>

                        <?php echo e(Form::text('blood_group',$students->BloodGroup,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        
                        <?php echo e(Form::label('sec_email', 'Secondary Email Address')); ?>

                        <?php echo e(Form::text('sec_email',$students->SecEmailId,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        
                        <?php echo e(Form::label('landline', 'Landline Number')); ?>

                        <?php echo e(Form::text('landline',$students->std_code.'-'.$students->LandlineNo,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        
                        <h4><strong>Father's Details:</strong></h4>
                        <?php echo e(Form::label('father_name', 'Father\'s Name')); ?>

                        <?php echo e(Form::text('father_name',$students->Fathers_Name.' '.$students->LastName,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        <?php echo e(Form::label('father_phone', 'Phone Number')); ?>

                        <?php echo e(Form::text('father_phone',$students->Fathers_No,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        <hr>
                        <h4><strong>Mother's Details</strong></h4>
                        <?php echo e(Form::label('mother_name', 'Mother\'s Name')); ?>

                        <?php echo e(Form::text('mother_name',$students->Mothers_Name.' '.$students->LastName,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        <?php echo e(Form::label('mother_phone', 'Phone Number')); ?>

                        <?php echo e(Form::text('mother_phone',$students->Mothers_No,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        <hr>
                        
                        <?php echo e(Form::label('category', 'Category')); ?>

                        <?php if( !empty ($student->AddCategory)): ?>
                            <?php echo e(Form::text('category',$students->Category.'/'.$students->AddCategory,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        <?php else: ?>
                            <?php echo e(Form::text('category',$students->Category,['class'=>'form-control', 'disabled'=>'true'])); ?><br>
                        <?php endif; ?>
                    </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>