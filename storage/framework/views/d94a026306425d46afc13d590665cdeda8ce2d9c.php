<?php $__env->startSection('page_heading','Generate Report'); ?>
<?php $__env->startSection('section'); ?>
<?php echo $__env->make('faculty.layouts.validation_msgs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="row">
        <?php echo e(Form::open(['action' => 'FacultyController@generate_report', 'method'=>'GET'])); ?>

            <div class="col-sm-2">
                <div class="form-group">
                    <select name="department" class="form-control">
                        <option value="-1">All</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Electronics">Electronics</option>
                        <option value="EXTC">EXTC</option>
                        <option value="Intrumentation">Intrumentation</option>
                        <option value="MCA">MCA</option>
                        <option value="H and S">H and S</option>
                    </select>

                        
                         

                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select name="staffType" class="form-control">
                        <option value="-1">All</option>
                        <option value="1">Teaching</option>
                        <option value="50">Non-Teaching</option>
                    </select>
                </div>
            </div>
            
            <div class="col-sm-2">
                <div class="form-group">
                    <select name="contractType" class="form-control">
                        <option value="-1">All</option>
                        <option value="1">Permanent</option>
                        <option value="0">Adhoc</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <?php echo e(Form::number('year', '', ['class'=> 'form-control', 'placeholder'=>'N years'])); ?>

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
                        <th>#</th>
                        <th>E_id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Department</th>
                        <th>Staff Type</th>
                        <th>E-Mail</th>
                        <th>Contract Type</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    <?php endif; ?>

    <hr>
    <div>  
      <h4> Search staff information according to Date of Joining (RID : 13)</h4>        
      <a href = "<?php echo e(url('/staff/report/report_rid_13')); ?>" > <button type="button" class="btn btn-success">Click Here</button></a>
      </div> 
      <hr>
    <div>
      <h3>Get all staff details</h3>
      <?php echo link_to_route('admin.staff.excel', 
      'Export to Excel', null, 
      ['class' => 'btn btn-info']); ?>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>