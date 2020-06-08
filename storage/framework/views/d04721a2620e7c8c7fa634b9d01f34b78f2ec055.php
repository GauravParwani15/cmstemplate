<?php $__env->startSection('body'); ?>
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
                <a class="navbar-brand" href="<?php echo e(url ('')); ?>"><?php echo e(config('app.name','VESIT CSM')); ?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo e(session('uid')); ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li <?php echo e((Request::is('student') ? 'class="active"' : '')); ?>>
                            <a href="<?php echo e(url ('student/')); ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-user-plus fa-fw"></i> Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li <?php echo e((Request::is('student/personal') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/student/personal')); ?>">Personal</a>
                                </li>
                                <li <?php echo e((Request::is('student/academic') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/academic' )); ?>">Academic<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li <?php echo e((Request::is('student/current-academic') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('student/current-academic')); ?>">Current-Academic</a>
                                        </li>
                                        <li <?php echo e((Request::is('student/pre-academic') ? 'class="active"' : '')); ?>>
                                            <a href="<?php echo e(url ('student/pre-academic')); ?>">Pre-Academic</a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo e((Request::is('student/achievements') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/achievements' )); ?>">Achievements</a>
                                </li>
                                <li <?php echo e((Request::is('student/responsibilities') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/responsibilities' )); ?>">Roles & Responsibilities</a>
                                </li>
                                <li <?php echo e((Request::is('student/mentor') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/mentor' )); ?>">Mentor</a>
                                </li>
                                <li <?php echo e((Request::is('student/comments') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/comments' )); ?>">Comments</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        
                        <li <?php echo e((Request::is('student/attendance') ? 'class="active"' : '')); ?>>
                            <a href="<?php echo e(url ('student/attendance' )); ?>"><i class="fa  fa-check-square-o fa-fw "></i> Attendance</a>
                        </li>

                        <li <?php echo e((Request::is('student/applications') ? 'class="active"' : '')); ?>>
                            <a href="<?php echo e(url ('student/applications')); ?>"><i class="fa fa-edit fa-fw"></i> </i> Applications<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li <?php echo e((Request::is('student/apply-lc') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/apply-lc' )); ?>">Leaving Certificate</a>
                                </li>
                                <li <?php echo e((Request::is('student/apply-clearance') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/apply-clearance' )); ?>">Clearance</a>
                                </li>
                                <li <?php echo e((Request::is('student/apply-railway') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/apply-railway' )); ?>">Railway Concession</a>
                                </li>
                                <li <?php echo e((Request::is('student/apply-bonafide') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/apply-bonafide' )); ?>">Bonafide</a>
                                </li>
                                <li <?php echo e((Request::is('student/apply-transcript') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('student/apply-transcript' )); ?>">Transcript</a>
                                </li>
                            </ul>
                        </li>
                        <li <?php echo e((Request::is('student/report') ? 'class="active"' : '')); ?>>
                            <a href="<?php echo e(url ('student/report')); ?>"><i class="fa fa-exclamation"></i> Report Discrepancies</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        
        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <span id="page-heading"><?php echo $__env->yieldContent('page_heading'); ?></span>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row"> 
                <?php echo $__env->make('layouts.validation_msgs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
				<?php echo $__env->yieldContent('section'); ?>

            </div>
            
            <!-- /#page-wrapper -->
        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.plane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>