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
            <a href="{{ url ('/staff/check_availability') }}"><button class="btn btn-primary">Back</button></a>
        </li>
         <!-- <li {{ (Request::is('/staff/check_availability') ? 'class="active"' : '') }}>
            <a href="{{ url ('/staff/check_availability') }}"><button class="btn btn-primary">Check Availability</button></a>
        </li> -->
    </ul>

    <div class="container">
        <div class="pt-5" style="background-color:white;">
            <div class="card" style="border: none;">
                <h2>Check Availability</h2>
                <div class="card-body">
                    <table class="">
                        <th></th>
                                <th></th>
                                <th></th>      
                        </tr>
                    </table>
            </div>
            <!-- end of header options -->
            <!-- Table of approved applications -->

             <table class="table bg-light">
                <thead>
                    @if(count($booking_list)==0)
                        <h4> {{$filterresource}} is available for Date {{$date}} (Date format: yyyy-mm-dd)</h4>
                    @else
                            <tr>
                                <th scope="col">Resource name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Booked for</th> 
                                
                                <!-- //Todo HH::MM -->
                                <!-- Month should be used in words -->
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
                        </tbody>
                    @endif
            </table>
        </div>
    </div>
@stop