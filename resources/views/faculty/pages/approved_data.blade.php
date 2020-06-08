@extends('faculty.layouts.dashboard')
@section('page_heading','Booking Data')
@section('section')
                 



<head>
    <title>Booking Data</title>
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
    <h1>Booking Data</h1>
    <div class = "well">
        <table class="table" id="table">
            <tbody>
                <tr>
                    <td colspan="3">Event Name:-{{$data[0]->event_name}}</td>
                    <td colspan="3">Resource:-{{$data[0]->resource->name}}</td>
                </tr>
                <tr>
                    <td colspan="3">date: {{$data[0]->event_date}}</td>
                    <td colspan="3">Time: {{$data[0]->start_time}}-{{$data[0]->end_time}}</td>
                </tr>
                <tr>
                    <td colspan="3">for class: {{$data[0]->for_crowd}}</td>
                    <td colspan="3">Expected guests/speaker/company name: {{$data[0]->guest}}</td>
                </tr>
                <tr>
                    <td colspan="3">Expected crowd: {{$data[0]->expected_crowd}}</td>
                    <td colspan="3">User Mail: {{$data[0]->user_email}}</td>
                </tr>
                <tr class="text-center">
                    <td colspan="6"><button type="button" class="btn btn-danger" onclick="window.location='{{route('cancel',['id'=>$data[0]->booking_id])}}'">Cancel Booking</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url ('/staff/approved_application') }}"><button class="btn btn-primary">Back</button></a></td>
                </tr>
            </tbody>
        </table>
    </div>    
</body>



@stop