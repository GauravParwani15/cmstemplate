<?php $__env->startSection('page_heading','Application for Clearance'); ?>
<?php $__env->startSection('section'); ?>



<div class="col-sm-1"></div>
<div class="col-sm-10">
    <div class="jumbotron text-center">
        <div class="container-fluid bg-3 text-center">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <!--THIS IS FORM-->   

                <?php echo Form::open(['method'=>'POST','id' => 'validateform']); ?>

                <div class="form-group">
                        Passing date : <?php echo e(Form::text('passingdate','',['class' => 'form-control','placeholder'=>'Enter Passing Date','onfocus' => '(this.type="date")', 'onfocusout' => '(this.type="text")','required' ])); ?>

                </div>

                <div class="form-group">
                        Name : <?php echo e(Form::text('stuname',$students->first_name.' '.$students->last_name,['id' => 'name' ,'class' => 'form-control','placeholder'=>'Student Name','required','disabled' ])); ?>

                </div>

                <div class="form-group">
                        Mobile No. : <?php echo e(Form::text('phoneno',$students->mobile_no,['class' => 'form-control','placeholder'=>'Mobile Number','required','pattern' => '[0-9]{10}','disabled'])); ?>

                </div>

                <div class="form-group">
                        Permanant Address : <?php echo e(Form::textarea('PermanantAddress',$students->permanent_address,['class' => 'form-control','placeholder'=>'Permanent Address','rows' => '2','required','disabled'])); ?>

                </div>

                <div class="form-group">
                        Branch : <?php echo e(Form::text('branch',$students->branch,['class' => 'form-control','placeholder'=>'Branch','required','disabled'])); ?>

                </div>

                <div class="form-group">
                        Email : <?php echo e(Form::email('emaild', $students->email_id ,['class' => 'form-control', 'placeholder' => 'VES EmailID' ,'required','disabled'])); ?>

                </div>

                <div class="form-group">
                        Future Instititue Name : <?php echo e(Form::text('future','',['class' => 'form-control','placeholder'=>'Enter details of Future Institute or JOB Information','required' ])); ?>

                </div>

                <div class="form-group">
                        Exam Details : <?php echo e(Form::textarea('exams','',['class' => 'form-control','rows' => '3','placeholder'=>'Enter Details of GRE / TOEFL / CAT / GMAT Exams attempted','required' ])); ?>

                </div> 

                <br>
                <div class="form-group">
                        <?php echo e(Form::submit('APPLY',['class'=>'btn btn-success btn-block'])); ?>

                </div>
                        <?php echo Form::close(); ?>

                        
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('student.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>