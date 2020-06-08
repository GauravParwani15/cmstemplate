<link rel="stylesheet" href="<?php echo e(URL::to('css/homepage.css')); ?>" />
<?php $__env->startSection('body'); ?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo e(url ('')); ?>">
            <img src="<?php echo e(URL::to('images/cms-brand.png')); ?>" alt="brand logo">
        </a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        
        <!-- /.dropdown -->
        <li class="dropdown">
             <a href="<?php echo e(url ('login')); ?>">Login <i class="fa fa-user fa-fw"></i></a>
        </li>
        
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
</nav>
<br>
<br>
<br>
<br>


<header class="logo-header" id="banner">

</header>

<nav class="navbar navbar-default navbar-static-bottom">

    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        
        <!-- /.dropdown -->
        <li class="dropdown">
             <a href="">Help</a>
        </li>
        <li class="dropdown">
             <a href="">Privacy</a>
        </li>
        <li class="dropdown">
             <a href="">Developers</a>
        </li>

        
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
</nav>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plane', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>