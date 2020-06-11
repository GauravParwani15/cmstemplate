@extends('faculty.layouts.dashboard')
@section('page_heading','Booked Resources')
@section('section')




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



    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <ul class="list-group list-group-horizontal">
        <li >
            <a href="{{ url ('/staff/booking') }}"><button class="btn btn-primary">Back</button></a>
        </li>
         <!-- <li {{ (Request::is('/staff/check_availability') ? 'class="active"' : '') }}>
            <a href="{{ url ('/staff/check_availability') }}"><button class="btn btn-primary">Check Availability</button></a>
        </li> -->
    </ul>

    <div class="container">
        <div class="pt-5" style="background-color:white;">
            <div class="card" style="border: none;">
                <h2>Booked Resources</h2><br><br>
                <div class="card-body">
                    <table class="">
                        <th></th>
                                <th></th>
                                <th></th>
                                    <th>
                                        {!! Form::open(['style'=>'display:flex; flex-direction:row;','class'=>'form-inline','id'=>'filterform', 'action' => 'FacultyController@filterbookedresources', 'method'=>'POST']) !!}
                                        <label for="filterdate" style="display:block; font-size:20px;font-weight: lighter;" class="fieldlabels">Filter By Date:</label>
                                        <input style ="display:block;" type="date" class="col-xs-1 form-control input-sm" id="filterdate" name="filterdate" placeholder="Date" />
                                         <td>
                                    <label style="font-size:25px;font-weight: lighter;">Filter Resource:</label>  </td>
                                   <div class="dropdown ">
                                   <td> <select class='form-control' id="filterresource" name="filterresource">
                                            @foreach($resource_list as $resource)
                                            <option value="{{ $resource->name}}">{{ $resource->name }}</option>
                                            @endforeach  
                                        </select>
                                    </div> 
                                    </td>
                                       <th class="pl-5"> <td><button class="btn btn-success pl-5">Apply</button>  </td> </th>
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
                        <th scope="col">Resource name</th>
                        <th scope="col">Date</th>
                        <th scope="col">time-slot</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($booking_list as $booking)
                        <tr class="text-left" >
                                <td>{{$booking->resource->name}}</td>
                                <td>{{ $booking->event_date }}</td>
                                <td>{{ $booking->start_time }} - {{ $booking->end_time }}</td>
                        </tr>
                    @endforeach
                    <!-- <tr  class="text-left" data-toggle="modal" data-target="#exampleModalCenter">
                        <td>Smart Classroom 515</td>
                        <td>22/05/20</td>
                        <td>9am-2pm</td>

                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
@stop


