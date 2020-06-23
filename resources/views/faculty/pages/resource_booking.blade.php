@extends('faculty.layouts.dashboard')
@section('page_heading','Resource Booking')
@section('section')
                 



<head>
    <title>Booking status</title>

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
    <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
    </div> -->


    <!-- Details modal end -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <ul class="list-group list-group-horizontal">
        <li >
            <a href="{{ url ('/staff/new_booking') }}"><button class="btn btn-primary">Book a new Resource</button></a>
             <a href="{{ url ('/staff/check_availability') }}"><button class="btn btn-primary float-right">Check Availability</button></a>
        </li>
         <!-- <li {{ (Request::is('/staff/check_availability') ? 'class="active"' : '') }}>
            <a href="{{ url ('/staff/check_availability') }}"><button class="btn btn-primary">Check Availability</button></a>
        </li> -->
    </ul>

    <div class="container">
        <div class="pt-5" style="background-color:white;">
            <div class="" style="border: none;">
                <h1>Booking Status</h1><br>
                <div class="">
                    <table class="">
                         <tr>
                        <!-- <div class="container">
                            {!! Form::open(['id'=>'searchform', 'action' => 'FacultyController@searchnewapplications', 'method'=>'POST']) !!}
                            <th><div class="input-group col-s-8"><input type="text" class="form-control input-sm" name="search" placeholder="search by title"/> 
                                <div class="input-group-btn"><button type="submit" form="searchform" class="btn btn-default input-sm action-button" value="Submit"><i class="glyphicon glyphicon-search"></button></td>
                                </div></div></th>
                            {!! Form::close() !!}
                            </div> -->
                            
                                <th>
                                    {!! Form::open(['style'=>'display:flex; flex-direction:row;','class'=>'form-inline','id'=>'filterform', 'action' => 'FacultyController@filter', 'method'=>'POST']) !!}
                                   <td> <label for="filterdate" style="display:block; font-size:20px;font-weight: lighter;" class="fieldlabels">Show from:</label></td>
                                    <td> <input style ="display:block;" type="date" class="col-xs-1 form-control input-sm" id="filterdate" name="filterdate" placeholder="Date" /> </td>
                                   <td> <label style="font-size:20px;font-weight: lighter;">&nbsp;Show Resource:</label>  </td>
                                   <div class="dropdown ">
                                   <td> <select class='form-control' id="filterresource" name="filterresource">
                                            <option value="all">All</option>
                                            @foreach($resource_list as $resource)
                                            <option value="{{ $resource->name}}">{{ $resource->name }}</option>
                                            @endforeach  
                                        </select>
                                    </div> 
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success pl-5">Apply</button>  </td>
                                    {!! Form::close() !!}
                                </th>
                    </tr> 
                </table>
            </div>
            <!-- end of header options -->
            <!-- Table of approved applications -->

            <table class="table bg-light">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Resource</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr  class="text-left">
                        <td>{{$booking->event_name}}</td>
                        <td>{{$booking->resource->name}}</td>
                        <td>{{$booking->event_date}}</td>
                        <td>{{$booking->start_time}}</td>
                        <td>{{$booking->end_time}}</td>
                        <td><a href= "{{route('booking_data',['id'=>$booking->booking_id])}}"><button class="btn btn-info">Details</button></a></td>
                        @if($booking->status == 0)
                            <td class = "bg-warning">Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        @elseif($booking->status == 1)
                            <td class = "bg-success">Accepted &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        @elseif($booking->status == 2)
                            <td class = "bg-danger">Rejected &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        @elseif($booking->status == 4)
                            <td class = "bg-danger">Cancelled &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        @elseif($booking->status == 9)
                            <td class = "bg-secondary">Resource unavialable</td>
                        @endif 
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
    // previous date limiter 
    var todayDate = new Date();
    todayDate = todayDate.getFullYear() + '-0' + (todayDate.getMonth() + 1) + '-' + todayDate.getDate();
    $('#filterdate').attr('min', todayDate);
</script>

            <!-- history table -->


        @if(!($bookings_hist==""))
            <div class="container">
                <div class="pt-5" style="background-color:white;">
                    <div class="" style="border:none;">
                        <h1>History</h1><br>
                    <table class="table text-light">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Resource</th>
                                <th scope="col">Date</th>
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings_hist as $booking_hist)
                                <tr  class="text-left">
                                    <td>{{$booking_hist->event_name}}</td>
                                    <td>{{$booking_hist->resource->name}}</td>
                                    <td>{{$booking_hist->event_date}}</td>
                                    <td>{{$booking_hist->start_time}}</td>
                                    <td>{{$booking_hist->end_time}}</td>
                                    <td><a href= "{{route('history_data',['id'=>$booking_hist->booking_id])}}"><button class="btn btn-info">Details</button></a></td>
                                    @if($booking_hist->status == 0)
                                        <td class = "bg-warning">Pending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    @elseif($booking_hist->status == 1)
                                        <td class = "bg-success">Accepted &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    @elseif($booking_hist->status == 2)
                                        <td class = "bg-danger">Rejected &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    @elseif($booking_hist->status == 4)
                                        <td class = "bg-danger">Cancelled &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    @elseif($booking_hist->status == 9)
                                        <td class = "bg-secondary">Resource unavailable</td>
                                    @endif 
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif


</body>



@stop