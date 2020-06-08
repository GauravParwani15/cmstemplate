<?php $__env->startSection('page_heading','Resource Booking'); ?>
<?php $__env->startSection('section'); ?>
                 



<head>
    <title>Booking status</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body> 



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
   <!-- Details Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content" style="background-color: #e7e1e1;">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
               <table class="table" id="table">
                   <tbody>
                       <th scope="row"></th>
                       <tr>
                           <td colspan="3">Event Name:-Vivekananda Kendra</td>
                           <td colspan="3">Resource:-Mr.Sunny Nair</td>
                       </tr>
                       <tr>
                           <td colspan="3">date: 01/05/20</td>
                           <td colspan="3">Time: 2-4</td>
                       </tr>
                       <tr>
                           <td colspan="3">for class: B.E</td>
                           <td colspan="3">Expected guests/speaker/company name: Mr.XYZ</td>
                       </tr>
                       <tr>
                           <td colspan="3">Expected crowd: 200</td>
                           <td colspan="3">User Mail: abc@ves.ac.in</td>
                       </tr>
                   </tbody>
               </table>
           </div>
           <div class="modal-footer col-xs-1 center-block">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
           </div>
       </div>
   </div>
</div>


   <!-- Details modal end -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           
<div class="container">
    <h1>New Applications</h1>
    <ul class="list-group list-group-horizontal ">
        <li >
            <a href="<?php echo e(url ('/staff/approved_application')); ?>"><button class="btn btn-primary float-right">Approved Applications</button></a>
        </li>
    </ul>
    <div class="pt-5" style="background-color:white;">
           <div class="card" style="border: none;">
               <div class="card-body">
                <table class="">
                    <tr>
                        <div class="container">
                            <?php echo Form::open(['id'=>'searchform', 'action' => 'FacultyController@searchnewapplications', 'method'=>'POST']); ?>

                            <th><div class="input-group col-xs-8"><input type="text" class="form-control input-sm" name="search" placeholder="search by title" />
                                <div class="input-group-btn"><button type="submit" form="searchform" class="btn btn-default input-sm action-button" value="Submit"><i class="glyphicon glyphicon-search"></button></div></div></th>
                            <?php echo Form::close(); ?>

                            </div>
                            <th></th>
                            <th></th>
                                <th>
                                    <?php echo Form::open(['style'=>'display:flex; flex-direction:row;','class'=>'form-inline','id'=>'filterform', 'action' => 'FacultyController@filternewapplication', 'method'=>'POST']); ?>

                                    <label for="filterdate" style="display:block; font-size:20px;font-weight: lighter;" class="fieldlabels">Filter By Date:</label>
                                    <input style ="display:block;" type="date" class="col-xs-1 form-control input-sm" id="filterdate" name="filterdate" placeholder="Date" />
                                    <label for="filterresource" style="display:block; font-size:20px;font-weight: lighter;" class="fieldlabels">Filter By Resource:</label>
                                    <input style ="display:block;" type="text" class="col-xs-1 form-control input-sm" id="filterresource" name="filterresource" placeholder="Resource" />
                                    <button type="submit" form="filterform" class="btn btn-default input-sm action-button" value="Submit">Apply</button>
                                    <?php echo Form::close(); ?>

                                </th>
                    </tr> 
                </table>
                   <table class="table" id="table">
                       <thead class="thead-dark">
                           <tr>
                               <th scope="col">Event Name</th>
                               <th scope="col">Username</th>
                               <th scope="col">Date</th>
                               <th scope="col">Time Slot</th>
                               <th scope="col">Resource</th>
                               <th scope="col"> Action</th>
                               <th></th>
                               <th></th>
                           </tr>
                           </thead>

                       <tbody>
                        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                   <td><?php echo e($application->event_name); ?></td>
                                   <td><?php echo e($application->user_name); ?></td>
                                   <td><?php echo e($application->event_date); ?></td>
                                   <td><?php echo e($application->start_time); ?>-<?php echo e($application->end_time); ?></td>
                                   <td><?php echo e($application->resource->name); ?></td>
                                   <td><a href= "<?php echo e(route('application_data',['id'=>$application->booking_id])); ?>"><button type="button" onclick="" type="button" class="btn btn-warning">Details</button></a></td>
                                   <td><button type="button" class="btn btn-success" onclick="window.location='<?php echo e(route('accept',['id'=>$application->booking_id])); ?>'">Accept</button></td>
                                   <td><button type="button" class="btn btn-danger" onclick="window.location='<?php echo e(route('reject',['id'=>$application->booking_id])); ?>'">Decline</button></td>
                                </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                       </tbody>
                           
                   </table>
              
               </div>
           </div>
        </div>
</div>
           
       </div>
   </div>

</body>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('faculty.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>