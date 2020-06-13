@extends('faculty.layouts.dashboard')
@section('page_heading','Booking Data')
@section('section')
                 



<head>
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
    <!-- <h1>Application Data</h1> -->
    <div class = "">
        <table class="table" id="table">
            <thead>
            <th> <h1>Application Data</h1> </th>
            </thead>
            <tbody>
                <tr>
                    <td >Event Name:   {{$data[0]->event_name}}</td>
                    <td >Resource:   {{$data[0]->resource->name}}</td>
                </tr>
                <tr>
                    <td> Date {{$data[0]->event_date}}</td>
                    <td >Time {{$data[0]->start_time}}-{{$data[0]->end_time}}</td>
                </tr>
                <tr>
                    <td >For class: {{$data[0]->for_crowd}}</td>
                    <td >Expected guests/speaker/company name: {{$data[0]->guest}}</td>
                </tr>
                <tr>
                    <td >Expected crowd: {{$data[0]->expected_crowd}}</td>
                    <td >User Mail: {{$data[0]->user_email}}</td>
                </tr>
                <tr class="text-center">
                    <td colspan="6"><button type="button" class="btn btn-danger" onclick="window.location='{{route('cancel',['id'=>$data[0]->booking_id])}}'">Cancel Booking</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url ('/staff/approved_application') }}"><button class="btn btn-primary">Back</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>    
</body>



@stop