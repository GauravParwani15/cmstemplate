@extends('faculty.layouts.dashboard')
@section('page_heading','New Booking')
@section('section')


<head>
  <meta charset="utf-8">
  <title>Book a resource</title>

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
<!-- 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
 <!-- <link href="../../../../../public/css/style.css" rel="stylesheet"> -->
</head>

<body>

<!-- <div class="container-fluid">
    <div class="row float-right pr-5 pt-5">
        <button class="btn btn-info ">Available resources</button>
    </div>
</div> -->


<!-- <div class="card">
<div class="card-body pt-5 text-center bg-light">
    <h3 style="font-size:xx-large;">Bookings</h3>
</div>
</div> -->
 <ul class="list-group list-group-horizontal">
        <li {{ (Request::is('/staff/redirect') ? 'class="active"' : '') }}>
            <a href="{{ url ('/staff/redirect') }}"><button class="btn btn-primary">Back To dashboard</button></a>
        </li>
        
    </ul>

    <div class="">
        <div class="">
            <div class="text-center">
                <div class="">
                    <h2 id="heading" class="">Book a Resource</h2>
                    <!-- <p>Fill all form field to go to next step</p> -->
                    {!! Form::open(['id'=>'msform', 'action' => 'FacultyController@postnew_bookingstep1', 'method'=>'POST']) !!} 
                        <!-- progressbar -->
                        <!-- <div>
                        <ul id="progressbar" class="ml-5  pl-5">
                            <li ><strong>.</strong></li>
                            <li class="active" id="account"><strong>Step 1</strong></li>
                            <li id="personal"><strong>Step 2</strong></li>
                            
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        </div> -->
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <!-- <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Account Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>  -->
                                <label class="fieldlabels">Event Name</label> <input class="validate-input" data-validate = "Please enter the Event name" type="text" name="event" placeholder="Event Name" /> 
                                <div class="dropdown pb-5">
                                    <label class="fieldlabels">Select a resource you want to book</label><br>
                                        <select class='form-control' name='resource' id='resource'>
                                            @foreach($resource_list as $resource)
                                            <option value="{{ $resource->name}}">{{ $resource->name }}</option>
                                            @endforeach  
                                        </select>
                                </div> 
                                <label class="fieldlabels">Date</label> <input type="date" name="date" placeholder="Date" />
                                <label class="fieldlabels">From</label> <input type="time" name="from-time" placeholder="time" />
                                <label class="fieldlabels">To</label> <input type="time" name="to-time" placeholder="time" />
                            </div>
                            <button type="submit" form="msform" class="action-button" value="Submit">Next</button>
                        
                        </fieldset>  
                        <fieldset>
                        </fieldset>
                        <!-- <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> 
                                
                                <br><br>
                                <h2 class="purple-text text-center"><strong>Booking request sent</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                                <a href="{{ url ('/staff/new_booking') }}"><button type="button" class="btn btn-info">New Booking request</button></a>
                            </div>
                        </fieldset> -->
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <!-- <script src="{{ URL::asset('js/style.js') }}"></script> -->
  <!-- <script src="{{ URL::asset('js/style.js') }}" > -->
  <!-- <script src="../../../../../public/js/script.js"></script> -->
</body>

@stop
