<?php $__env->startSection('page_heading','Profile'); ?>
<?php $__env->startSection('section'); ?>

<div class="page-container">
<div class="profile">
    <div class="row">
    <br>
        <div class="col-lg-12 col-xs-12 name" style="margin:5px">
            <div class="row">
                <div class="col-md-9">
                    <strong style="font-size:40px"><?php echo e($staff->first_name); ?> <?php echo e($staff->last_name); ?></strong>
                </div>
                <div class="col-md-3">
                    <br>
                    <p class="text-primary ">Last Seen: <?php echo e($staff->last_active); ?></p>
                </div>
                 
            </div>
            <div class="row">
                <div class="col-md-4">
                    <dt class="text-muted" style="font-size:20px">Employee Number</dt>
                    <p><?php echo e($staff->e_id); ?></p>
                    <dt class="text-muted" style="font-size:20px">Designation</dt>
                    <p><?php echo e($staff->designation); ?></p>
                    <dt class="text-muted" style="font-size:20px">Department</dt>
                    <p><?php echo e($department->dept_name); ?></p>
                </div>
                <div class="col-md-4">
                    <!-- <div class="col-lg-3 col-xs-12 name  pull-left"> -->
                            <dt class="text-muted" style="font-size:20px">Date Of Joining</dt>
                            <p><?php echo e($staff->doj); ?></p>
                            <?php if($staff->dol != '0000-00-00'): ?>
                                <dt class="text-muted" style="font-size:20px">Date Of Leaving</dt>
                                <p><?php echo e($staff->dol); ?></p>
                            <?php endif; ?>
                            <dt class="text-muted" style="font-size:20px">Probation Time</dt>
                            <p><?php echo e($staff->probation_start); ?> to <?php echo e($staff->probation_end); ?></p>
                            <dt class="text-muted" style="font-size:20px">VES Email</dt>
                            <p><?php echo e($staff->email); ?></p>
                    <!-- </div> -->
                </div>
                <div>
                    <div class="col-md-3  col-xs-12 profilepic pull-right"  style="margin:5px">
                        <?php if($pic !== NULL): ?>
                            <img class="img-circle" src="data:image/png;base64,<?php echo e(base64_encode($pic->image)); ?>" style="background-color:#e0e0e0;">
                        <?php else: ?>
                            <img src="http://zoom.trus.co.id/plugintracker/images/pp-default.jpg" style="background-color:#e0e0e0;">
                        <?php endif; ?>
                        <br>
                        <!-- Need a fix, can't center -->
                        <a class="btn col-md-9" href="<?php echo e(url ('/staff/uploadImage')); ?>">Edit Profile Picture</a>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>      <!--/.header-->
    <hr>
        <div class="row">
        <div class="col-lg-4  col-xs-12 name pull-left" >
            <strong class="text-danger" style="font-size:18px">Personal Details</strong></br></br>
            <dl>
                <dt>Mobile Number</dt>
                <dd><?php echo e($staff->mobile); ?></dd>
                <br>
                <dt>Address</dt>
                <dd><?php echo e($staff->address); ?> - <?php echo e($staff->pincode); ?></dd>
                <br>
                <?php if($staff->landline != NULL): ?>
                <dt>Landline Number</dt>
                <dd><?php echo e($staff->landline); ?></dd>
                <br>
                <?php endif; ?>
                <dt>Gender</dt>
                <?php if($staff->gender == 'M'): ?>
                <dd>MALE</dd>
                <?php elseif($staff->gender == 'F'): ?>
                <dd>FEMALE</dd>
                <?php endif; ?>
                <br>
            </dl>
        </div>
        <div class="col-lg-6 col-lg-offset-1 col-xs-12 name pull-left">
            <dl>
            <br>
            <br>
                <dt>Date Of Birth</dt>
                <dd><?php echo e(date('d-M-Y',strtotime($staff->dob))); ?></dd>
                <br>
                <dt>Concol Number</dt>
                <dd><?php echo e($staff->concol); ?></dd>
                <br>
                <dt>Aadhar Number</dt>
                <dd><?php echo e($staff->aadhaar_id); ?></dd>
                <br>
                <dt>PAN Number</dt>
                <dd><?php echo e($staff->pancard); ?></dd>
            </dl>
        </div>
    </div>      <!--/.details-->
    <hr>
    <div class="row">
        <div class="col-lg-6  col-xs-12 name  pull-left">
            <strong class="text-danger" style="font-size:18px">Education Details</strong></br></br>
            <dl>
                <dt>Qualifications</dt>
                <dd>Your Latest Qualification</dd>
                <dd>Vivekanand Education Society Institute of Technology</dd>
                <dd>Year of Completion: 2010</dd>
                <dd>Your Earlier Qualification</dd>
                <dd>Vivekanand Education Society Institute of Technology</dd>
                <dd>Year of Completion: 2008</dd>
                <br>
                <dt>Expertise</dt>
                <dd><?php echo e($staff->expertise); ?></dd>
                <br>
                <!-- <dt>No.of Research Papers</dt>
                <dd><?php echo e($staff->no_of_research_papers); ?></dd>  -->
            </dl>
        </div>
    </div>      <!--/.details-->

</div>  <!--/.profile-->

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>