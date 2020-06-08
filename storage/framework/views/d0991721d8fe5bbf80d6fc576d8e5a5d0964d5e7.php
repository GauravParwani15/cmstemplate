<?php $__env->startSection('page_heading','Syllabus Schema'); ?>
<?php $__env->startSection('section'); ?>
    <div class="page-container">
         <h4 class="text-success">Enter Term Details</h4> 
        <?php echo e(Form::open(['action' => 'SyllabusController@check', 'method'=>'POST'])); ?>

            <div class="col-sm-2">
                <div class="form-group">
                    <select name="year" class="form-control" onclick=if()>
                        <?php echo e($maxdate = date('Y')); ?>

                            <option value="-1" disabled selected>Select Year</option>
                            <?php for($date = $maxdate; $date > 2010; $date--): ?>
                                <option value=<?php echo e($date); ?>-<?php echo e($date+1); ?>><?php echo e($date); ?>-<?php echo e($date+1); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>

            
            <div class="col-sm-2">
                <div class="form-group">
                    <select name="course" class="form-control" id="course">
                        <option value="-1" disabled selected>Select Course</option>
                        <?php $__currentLoopData = $json['course']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($course['courseIndex']); ?>><?php echo e($course['courseName']); ?></option>
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

            <div class="col-sm-3">
                <div class="form-group">
                    <input type="submit" value="Add or Search Schema" name ="submit" class="btn btn-success form-control" />
                </div>
            </div>
        <?php echo e(Form::close()); ?>

    </div>
    <?php if(Session::has('noData')): ?>
        <div class="alert alert-danger alert-dismissible text-center animated fadeInDown">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('noData')); ?>

        </div>
    <?php endif; ?>
    <?php if(Session::has('noTerm')): ?>
        <div class="alert alert-danger alert-dismissible text-center animated fadeInDown">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo e(Session::get('noTerm')); ?>

        </div>
    <?php endif; ?>
    
    <?php if(Session::has('noData') || Session::has('noTerm')): ?>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <a href="<?php echo e(action("SyllabusController@createTerm")); ?>" class="btn btn-success form-control">Create New Schema</a>
            </div>
        </div>
    <?php endif; ?>

    <?php if(isset($present)): ?>  
        <hr> 
        <div class="container-fluid">
            <h4 class="text-success">Exam Head Schema</h4>
            <div class="table-responsive">          
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Exam Head Code</th>
                            <th class="text-center">Course Code</th>
                            <th class="text-center">Course Name</th>
                            <th class="text-center">Exam Head Description</th>
                            <th class="text-center">Maximum Marks</th>
                            <th class="text-center">Passing Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $schemas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($schema->exam_head_code); ?></td>
                                <td><?php echo e($schema->course_code); ?></td>
                                <td><?php echo e($schema->course_name); ?></td>
                                <td>
                                    <?php $__currentLoopData = $exam_head; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $head['value'] == $schema->exam_description): ?>
                                            <?php echo e($head['name']); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td><?php echo e($schema->max_marks); ?></td>
                                <td><?php echo e($schema->min_marks); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <hr> 
            <h4 class="text-success">Exam Course Map</h4>
            <div class="table-responsive">          
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Term ID</th>
                            <th class="text-center">Course Code</th>
                            <th class="text-center">Course Name</th>
                            <th class="text-center">Schema Name</th>
                            <th class="text-center">Theory Hours</th>
                            <th class="text-center">Practical Hours</th>
                            <th class="text-center">Tutorial Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $course_map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($course->term_id); ?></td>
                                <td><?php echo e($course->course_code); ?></td>
                                <td><?php echo e($course->course_name); ?></td>
                                <td><?php echo e($course->schema_name); ?></td>
                                <td><?php echo e($course->th_hrs==NULL?'---':$course->th_hrs); ?></td>
                                <td><?php echo e($course->pr_hrs==NULL?'---':$course->pr_hrs); ?></td>
                                <td><?php echo e($course->tut_hrs==NULL?'---':$course->tut_hrs); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1>
                        <a href="<?php echo e(action("SyllabusController@discard")); ?>" class="btn btn-primary form-control" onclick="return confirm('Are you sure you would like to delete this schema?');">Discard And Create New</a>    
                    </h1>
                </div>
            </div>
        </div>
    <?php endif; ?>









<script type="text/javascript">
    $(document).ready(function(){
        //on change in course dropdown
        $(document).on('change','#course', function(){
            
            //fetch value in that select
            var course_id = $(this).val();

            //parent = start div tag
            var div = $('#branch').parent();
            //string to append html code for
            var op = "";
            $.ajax({
                type:'get',
                url:'<?php echo URL::to('staff/branch'); ?>', //route to work on
                data:{'id': course_id}, //pass data
                success:function(data){
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
            var  o = "";

            $.ajax({
                type:'get',
                url:'<?php echo URL::to('staff/sem'); ?>',
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
    });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>