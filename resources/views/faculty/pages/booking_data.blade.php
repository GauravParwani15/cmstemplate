@extends('faculty.layouts.dashboard')
@section('page_heading','Booking Data')
@section('section')
                 



<head>
    <title>Booking Data</title>
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
    <div class = "">
        <table class="table" id="table">
        <thead>
            <th> <h1>Booking Data</h1> </th>
        </thead>
            <tbody>
                <tr>
                    <td colspan="3">Event Name:-{{$data[0]->event_name}}</td>
                    <td colspan="3">Resource:-{{$data[0]->resource->name}}</td>
                </tr>
                <tr>
                    <td colspan="3">Date: {{$data[0]->event_date}}</td>
                    <td colspan="3">Time: {{$data[0]->start_time}}-{{$data[0]->end_time}}</td>
                </tr>
                <tr>
                    <td colspan="3">For class: {{$data[0]->for_crowd}}</td>
                    <td colspan="3">Expected guests/speaker/company name: {{$data[0]->guest}}</td>
                </tr>
                <tr>
                    <td colspan="3">Expected crowd: {{$data[0]->expected_crowd}}</td>
                    <td colspan="3">User Mail: {{$data[0]->user_email}}</td>
                </tr>
                <tr class="text-center">
                     <td colspan="6"><button type="button" class="btn btn-danger" onclick="window.location='{{route('canceluser',['id'=>$data[0]->booking_id])}}'">Cancel Booking</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url ('/staff/booking') }}"><button class="btn btn-primary">Back</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>    
</body>



@stop