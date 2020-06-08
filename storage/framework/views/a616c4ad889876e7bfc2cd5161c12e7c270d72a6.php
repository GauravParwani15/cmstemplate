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
                            <div class="input-group custom-search-form">
                            
                                <input type="text" class="form-control" placeholder="Search Student.." name="q" id="q">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="Search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li <?php echo e((Request::is('/staff/home') ? 'class="active"' : '')); ?>>
                            <a href="<?php echo e(url ('/staff/home')); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li >
                            <a href="#" data-toggle="collapse" data-target="#personal" aria-expanded="false"><i class="fa  fa-user fa-fw "></i> Personal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level" class="collapse" id="personal">
                                <li <?php echo e((Request::is('/staff/attendance/faculty') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('/staff/attendance/faculty' )); ?>"><i class="fa fa-pencil-square-o"></i> My Attendance</a>
                                </li>
                            </ul>
                            
                        </li>
                        
                        <li >
                            <a href="#"><i class="fa  fa-user fa-fw "></i><Placeholder>XYZ</Placeholder></span></a>
                        </li>

                        <!-- my changes -->

                        <?php if( (session('e_id') && session('type')==1) || (session('e_id') && session('type')==50 && session('cmsrole')==33 ) ): ?>
                            <li>
                            <a href="#" data-toggle="collapse" data-target="#services" aria-expanded="false"><i class="fa  fa-cogs fa-fw "></i>  Services<span class="fa arrow"></span></a>
                            <ul class=" nav nav-second-level" class="collapse" id="services">
                                <li <?php echo e((Request::is('/staff/booking') ? 'class="active"' : '')); ?>>
                                <a href="<?php echo e(url ('/staff/booking')); ?>" ><i class="fa  fa-users fa-fw "></i>  Resource Booking</a>
                                </li>
                            </ul>
                            </li>
                        <?php elseif( [session('e_id') && session('type')==50 && session('cmsrole')==32 ]  ): ?>
                            <li>
                            <a href="#" data-toggle="collapse" data-target="#services" aria-expanded="false"><i class="fa  fa-cogs fa-fw "></i>  Resource Booking<span class="fa arrow"></span></a>
                            <ul class=" nav nav-second-level" class="collapse" id="services">
                                <li>
                                <a href="<?php echo e(url ('/staff/manage_application')); ?>" ><i class="fa  fa-users fa-fw "></i>  Manage Applications</a>
                                <a href="<?php echo e(url ('/staff/booking')); ?>" ><i class="fa  fa-users fa-fw "></i>  Book a Resource</a>
                                <a href="<?php echo e(url ('/staff/reports')); ?>" ><i class="fa  fa-users fa-fw "></i>  Reports</a>
                                <a href="<?php echo e(url ('/staff/manage_users')); ?>" ><i class="fa  fa-users fa-fw "></i>  Manage Users</a>
                                <a href="<?php echo e(url ('/staff/manage_resources')); ?>" ><i class="fa  fa-users fa-fw "></i>  Manage Resources</a>
                                </li>
                            </ul>
                            
                            </li>

                        <?php endif; ?>
                        <!-- my changes -->

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
                        onclick='document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://cms.com/logout";'>
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
                <?php echo $__env->make('faculty.layouts.validation_msgs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
				<?php echo $__env->yieldContent('section'); ?>

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>