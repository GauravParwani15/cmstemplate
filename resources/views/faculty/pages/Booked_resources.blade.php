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
                                            @foreach($resource_list as $resource)
                                            <option value="{{ $resource->name}}">{{ $resource->name }}</option>
                                            @endforeach  
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


