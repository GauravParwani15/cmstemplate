<?php $__env->startSection('page_heading','Search Results'); ?>
<?php $__env->startSection('section'); ?>
   <div class="page-container">
    <div class="row ">
        <div class="col-sm-5">
            <h3>Student_ ID: #069</h3>
            <h2>Sagar Ganiga</h2>
            <p class="details">sagar.ganiga@ves.ac.in</p>
            <p class="details">9869264468</p>
            <p class="lead-details">E-cell Deputy Head</p>
            <p class="details">Information Technology</p>
        </div>
        <div class="col-sm-7">
            <img src="http://via.placeholder.com/150x150">
        </div>
    </div> 
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h4 class="subtitle">Education</h4>
        </div>
        <div class="col-sm-8">
            <p class="lead-details">Pursuing Bachelor of Engineering</p>
            <p class="details">Vivekanand Education Society Institute of Technology</p>
            <p class="details">Year of Completion: 2019</p>

            
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h4 class="subtitle">Jobs</h4>
        </div>
        <div class="col-sm-8">
            <p class="lead-details">Dancer at Narasopara</p>
            <p class="details">2017-present</p>

            <p class="lead-details">System Analyst at CMS</p>
            <p class="details">2017 - Present</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h4 class="subtitle">Additional Details</h4>
        </div>
        <div class="col-sm-8">
            <p class="lead-details">Research Papers</p>
            <p class="details">Natural Language Processing</p>
            <p class="details">2012 - Present</p>
        </div>
    </div>

</div>

               
<?php $__env->stopSection(); ?>

<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>