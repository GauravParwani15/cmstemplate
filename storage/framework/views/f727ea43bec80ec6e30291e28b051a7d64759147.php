<?php $__env->startSection('body'); ?>

<?php echo $__env->make('faculty.layouts.cms_roles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(url ('/staff/home')); ?>">
                    <img src="<?php echo e(URL::to('images/cms-brand.png')); ?>" alt="brand logo">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- To be added later when notifications are enabled -->
                

                <!-- /.dropdown -->
                

                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-adjust fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="/theme/red">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Red
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/theme/blue">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Blue
                                </div>
                            </a>
                        </li>
                    </ul>
                </li> -->


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a><big><i class="fa fa-user fa-fw"></i> <?php echo e(session('first_name')); ?> <?php echo e(session('last_name')); ?></big></a>
                            <a>&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i><small> EID - <?php echo e(session('e_id')); ?></small></a>
                            <a>&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i><small> <?php echo e(session('email')); ?></small></a>
                        </li> 
                        <li data-toggle="modal" data-target="#myModal">
                            <a><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                        <?php echo e(Form::open(['action' => ['FacultyController@searchStudent'], 'method' => 'GET'])); ?>

                            <div class="input-group custom-search-form">
                            
                                <input type="text" class="form-control" placeholder="Search Student.." name="q" id="q">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="Search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            
                            </div>
                            <?php echo e(Form::close()); ?>

                            <!-- /input-group -->
                        </li>
                        
                                
                        
                        <li <?php echo e((Request::is('/staff/home') ? 'class="active"' : '')); ?>>
                            <a href="<?php echo e(url ('/staff/home')); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li >
                            <a href="#"><i class="fa  fa-user fa-fw "></i> Personal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li <?php echo e((Request::is('/staff/profile') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/profile')); ?>"><i class="fa  fa-user-plus fa-fw"></i> Profile</a>
                                </li>
                                <li <?php echo e((Request::is('/staff/attendance/faculty') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/attendance/faculty' )); ?>"><i class="fa fa-pencil-square-o"></i> My Attendance</a>
                                </li>
                                <li <?php echo e((Request::is('/staff/remarks') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/remarks' )); ?>"><i class="fa fa-comment"></i> My Remarks</a>
                                </li>
                                <?php $__currentLoopData = session('types'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($type == STAFF): ?>
                                        <li <?php echo e((Request::is('/staff/courses') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/courses')); ?>"><i class="fa fa-book fa-fw"></i> Courses Taught</a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <?php $__currentLoopData = session('types'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($type == STAFF): ?>

                                <li <?php echo e((Request::is('/staff/StudentAttendance') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/StudentAttendance')); ?>"><i class="fa fa-pencil-square-o"></i>Student Attendance</a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                        

                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 1): ?>
                                <li <?php echo e((Request::is('/staff/principal/report') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/principal/report')); ?>"><i class="fa  fa-list-alt fa-fw"></i> Reports</a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 2): ?>
                                <li <?php echo e((Request::is('/staff/hod/report') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/hod/report')); ?>"><i class="fa  fa-list-alt fa-fw"></i> Reports</a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 4): ?>
                                <li <?php echo e((Request::is('/staff/syllabus') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/syllabus')); ?>"><i class="fa  fa-book fa-fw"></i> Update Syllabus Schema</a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 9): ?>
                                <li <?php echo e((Request::is('/staff/course/assign') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/course/assign')); ?>"><i class="fa  fa-refresh fa-fw"></i> Assign Staff</a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 303): ?>
                                <li >
                                    <a href="#"><i class="fa fa-clipboard"></i> Exam Department<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li <?php echo e((Request::is('/staff/exam/update/student') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/exam/update/student')); ?>">Update Student List</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 306): ?>
                                <li >
                                    <a href="#"><i class="fa fa-list-ul"></i> Exam Department<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li <?php echo e((Request::is('/staff/exam/update/result') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/exam/update/result' )); ?>">Update Results</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                        
                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 304): ?>
                                <li >
                                    <a href="#"><i class="fa  fa-user-circle"></i> Clerk<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li <?php echo e((Request::is('/staff/update_student') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/update_student')); ?>"><i class="fa fa-pencil-square-o"></i> Update Student Data </a>
                                        </li>
                                        <li <?php echo e((Request::is('/staff/update_staff') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/update_staff' )); ?>"><i class="fa fa-pencil-square-o"></i> Update Staff Data</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 305): ?>
                                <li >
                                    <a href="#"><i class="fa fa-edit"></i> Approve Applications<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li <?php echo e((Request::is('/staff/approve-clearance') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/approve-clearance')); ?>"><i class="fa fa-calendar fa-fw"></i> Clearance </a>
                                        </li>
                                        <li <?php echo e((Request::is('/staff/approve-bonafide') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/approve-bonafide' )); ?>"><i class="fa fa-calendar fa-fw"></i> Bonafide </a>
                                        </li>
                                        <li <?php echo e((Request::is('/staff/approve-transcript') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/approve-transcript' )); ?>"><i class="fa fa-calendar fa-fw"></i> Transcript </a>
                                        </li>
                                        <li <?php echo e((Request::is('/staff/approve-lc') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/approve-lc' )); ?>"><i class="fa fa-calendar fa-fw"></i> Leaving Certificate </a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 7): ?>
                                <li >
                                    <a href="#"><i class="fa fa-user-secret"></i>Class Councellor<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                    <li <?php echo e((Request::is('/staff/defaulterList') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/defaulterList' )); ?>"><i class="fa fa-check-square-o"></i>Defaulter List</a>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                
                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 6): ?>
                                <li >
                                    <a href="#"><i class="fa fa-user-secret"></i> Class Teacher<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li <?php echo e((Request::is('/staff/assign_uid') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/assign_uid')); ?>"><i class="fa fa-bookmark-o"></i>  Assign UIDs to Batches </a>
                                        </li>
                                        <li <?php echo e((Request::is('/staff/assign_roll') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/assign_roll' )); ?>"><i class="fa fa-bookmark-o"></i>  Assign Roll no </a>
                                        </li>
                                        <li <?php echo e((Request::is('/staff/attendance_report') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('/staff/attendance_report')); ?>"><i class="fa fa-bookmark-o"></i>  Generate Attendance Report </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 8): ?>
                                <li >
                                    <li <?php echo e((Request::is('/staff/assign/CTCC') ? 'class="active"' : '')); ?>>
                                        <a href="<?php echo e(url ('/staff/assign/CTCC')); ?>"><i class="fa fa-bookmark-o"></i>  Assign Class Teacher</a>
                                    </li>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php $__currentLoopData = session('roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($role == 0): ?>
                                <li >
                                    <li <?php echo e((Request::is('/staff/admin') ? 'class="active"' : '')); ?>>
                                        <a href="<?php echo e(url ('/staff/admin')); ?>"><i class="fa fa-users fa-fw"></i>  Assign Roles</a>
                                    </li>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Logout Confirmation</h4>
                </div>
                <div class="modal-body">
                    <a
                        class="btn btn-primary"
                        onclick='document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://cms.dev/logout";'>
                        <i class="fa fa-sign-out fa-fw"></i>
                        Logout from Google and CMS
                    </a>
                    <a
                        class="btn btn-primary"
                        href="/logout">
                        <i class="fa fa-sign-out fa-fw"></i>
                        Logout from CMS
                    </a>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
             
            </div>
        </div>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                   
                    <div id="page-heading"></div>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">
                   
				<?php echo $__env->yieldContent('section'); ?>

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>