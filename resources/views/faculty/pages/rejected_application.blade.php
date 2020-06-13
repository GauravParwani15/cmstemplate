@extends('faculty.layouts.dashboard')
@section('page_heading','Resource Booking')
@section('section')




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
@media screen and (min-width: 800px) {
  table {
  width: 90%;}
}
/* if the browser window is at least 1000px-s wide: */
@media screen and (max-width: 500px) {
  table {
  width: 30%;}
}
</style>
    <!-- Details Modal -->
    <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                <div class="modal-footer ">
                    <button class="btn btn-danger float-right">Reject</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
    
     -->
    <!-- Details modal end -->





<div class="container">
    <h1>Rejected Applications</h1>
    <ul class="list-group list-group-horizontal ">
        <li>
            <a href="{{ url ('/staff/manage_application') }}"><button type="button" class="btn btn-primary float-right" >New Applications</button></a>
            <a href="{{ url ('/staff/approved_application') }}"><button class="btn btn-primary float-right">Accepted Applications</button></a>
        </li>
    </ul>
    <div class="pt-5" style="background-color:white;">
        <div class="card" style="border: none;">
            <div class="card-body">
            <table class="text-center">
                <tr>
                        <th></th>
                        <th></th>
                            <th>
                                {!! Form::open(['style'=>'display:flex; flex-direction:row;','class'=>'form-inline','id'=>'filterform', 'action' => 'FacultyController@filterrejectedapplication', 'method'=>'POST']) !!}
                               <td> <label for="filterdate" style="display:block; font-size:20px;font-weight: lighter;" class="fieldlabels">Filter By Date:</label>  </td>
                               <td> <input style ="display:block;" type="date" class="col-xs-1 form-control input-sm" id="filterdate" name="filterdate" placeholder="Date" /> </td>
                               <td> <label for="filterresource" style="display:block; font-size:20px;font-weight: lighter;" class="fieldlabels">Filter By Resource:</label> </td>
                               <div class="dropdown ">
                                <td> <select class='form-control' id="filterresource" name="filterresource">
                                         @foreach($resource_list as $resource)
                                         <option value="{{ $resource->name}}">{{ $resource->name }}</option>
                                         @endforeach  
                                     </select>
                                 </div> 
                                 </td>
                               <td> <button type="submit" form="filterform" class="btn btn-success input-sm action-button" value="Submit">Apply</button> </td>
                                {!! Form::close() !!}
                            </th>
                </tr> 
            </table>
            </div>
            <!-- end of header options -->
            <!-- Table of approved applications -->

            <table class="table text-left table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Resource</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $application)
                    <tr>
                        <td>{{$application->event_name}}</td>
                        <td>{{$application->resource->name}}</td>
                        <td>{{$application->event_date}}</td>
                        <td>{{$application->start_time}}-{{$application->end_time}}</td>
                        <td><a href= "{{route('application_data',['id'=>$application->booking_id])}}"><button type="button" onclick="" type="button" class="btn btn-warning">Details</button></a></td>
                        <td><button type="button" class="btn btn-success" onclick="window.location='{{route('accept',['id'=>$application->booking_id])}}'">Re-approve Application</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

</body>

<script>
    // previous date limiter 
    var todayDate = new Date();
    todayDate = todayDate.getFullYear() + '-0' + (todayDate.getMonth() + 1) + '-' + todayDate.getDate();
    $('#filterdate').attr('min', todayDate);
</script>

@stop