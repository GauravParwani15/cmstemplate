<?php $__env->startSection('page_heading','Booked Resources'); ?>
<?php $__env->startSection('section'); ?>




<style>
@media  screen and (min-width: 800px) {
  table {
  width: 90%;}
}

/* if the browser window is at least 1000px-s wide: */


@media  screen and (max-width: 500px) {
  table {
  width: 30%;}
}

</style>



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <ul class="list-group list-group-horizontal">
        <li >
            <a href="<?php echo e(url ('/staff/booking')); ?>"><button class="btn btn-primary">Back</button></a>
        </li>
         <!-- <li <?php echo e((Request::is('/staff/check_availability') ? 'class="active"' : '')); ?>>
            <a href="<?php echo e(url ('/staff/check_availability')); ?>"><button class="btn btn-primary">Check Availability</button></a>
        </li> -->
    </ul>

    <div class="container">
        <div class="pt-5" style="background-color:white;">
            <div class="card" style="border: none;">
                <h3>Booked Resources</h3>
                <div class="card-body">
                    <table class="">
                        <tr>
                            <th><input type="text" class="<div class="" name=" search" placeholder="search by title"
                                    autocomplete="off"></th>
                            <th></th>
                            <th></th>   
                            <div class="">
                                <th class="pl-5">
                                    <p style="font-size:25px;font-weight: lighter;">Filter by:</p>
                                </th>
                                <th class="pl-0">
                                    <div class="dropdown ">
                                    <label class="fieldlabels">resource</label><br>
                                        <select class='form-control' name='resource' id='resource'>
                                            <?php $__currentLoopData = $resource_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($resource->name); ?>"><?php echo e($resource->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                        </select>
                                    </div> 
                                    <!-- <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Resources
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                             <ul>
                                        <li class=" dropdown-item" ><a>Auditorium</a></li>
                                        <li class=" dropdown-item"><a>Smart Classroom (505)</a></li>   
                                    </ul>
                                        </div>
                                </th>
                            </div> -->
                </div>
                <th class="pl-5"><button class="btn btn-light pl-5">Apply</button></th>
                <!-- <a href="./newapplicaion.html"><button type="button" class="btn btn-info float-right">New
                        Applications</button>
                </a> -->
                </tr>
                </table>
            </div>
            <!-- end of header options -->
            <!-- Table of approved applications -->

             <table class="table bg-light">
                <thead>
                    <tr>
                        <th scope="col">Resource name</th>
                        <th scope="col">Date</th>
                        <th scope="col">time-slot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $booking_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-left" >
                                <td><?php echo e($booking->resource->name); ?></td>
                                <td><?php echo e($booking->event_date); ?></td>
                                <td><?php echo e($booking->start_time); ?> - <?php echo e($booking->end_time); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- <tr  class="text-left" data-toggle="modal" data-target="#exampleModalCenter">
                        <td>Smart Classroom 515</td>
                        <td>22/05/20</td>
                        <td>9am-2pm</td>

                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>