@extends('faculty.layouts.dashboard')
@section('page_heading','New Booking')
@section('section')


<head>
  <meta charset="utf-8">
  <title>Book a resource</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

 <ul class="list-group list-group-horizontal">
        <li {{ (Request::is('/staff/booking') ? 'class="active"' : '') }}>
            <a href="{{ url ('/staff/booking') }}"><button class="btn btn-primary">Back</button></a>
        </li>
        
    </ul>

    <div class="">
        <div class="">
            <div class="text-center">
                <div class="">
                    <h2 id="heading" class="">Book a Resource</h2>
                    {!! Form::open(['id'=>'msform', 'action' => 'BookingsController@store', 'method'=>'POST']) !!} 
                        <br> 
                        <fieldset>
                            <div class="form-card">
                                <label class="fieldlabels">Event Name</label> <input type="text" name="event" id="events" class="" placeholder="Event Name" required/> 
                                <div class="dropdown pb-5">
                                    <label class="fieldlabels">Select a resource you want to book</label><br>
                                        <select class='form-control' name='resource' id='resource'>
                                            @foreach($resource_list as $resource)
                                            <option value="{{ $resource->name}}">{{ $resource->name }}</option>
                                            @endforeach  
                                        </select>
                                </div> 
                                <label class="fieldlabels">Date</label> <input type="date" name="date" id="date" placeholder="Date" required/>
                                <label class="fieldlabels">From-time</label> <input type="time" name="from-time" id="from-time" placeholder="time" />
                                <label class="fieldlabels">To-time</label> <input type="time" name="to-time" id="to-time" placeholder="time" />
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        
                        </fieldset>  
                        <fieldset>
                            <div class="form-card">
                                <label class="fieldlabels">For class</label> <input type="text" name="class" id="for_class" class="" placeholder="For class" required/> 
                                <label class="fieldlabels">Count of Attendees (Number)</label> <input type="number" name="crowd" id="expected_crowd" class="" placeholder="Count of Attendees (Number)" required/> 
                                <label class="fieldlabels">Expected Guests/Speaker/company name</label> <input type="text" name="guests" id="speaker" class="" placeholder="Guests/Speaker/Company name" required/> 
                                <label class="fieldlabels">Speaker/Guests with Designation and Company</label> <input type="text" name="designation" id="designation" class=""  placeholder="Designation/Company name" required/>
                            </div> <button type="submit" form="msform" class="submit action-button" value="Submit">Submit</button> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>


<script>
    // previous date limiter 
    var todayDate = new Date();
    todayDate = todayDate.getFullYear() + '-0' + (todayDate.getMonth() + 1) + '-' + todayDate.getDate();
    $('#date').attr('min', todayDate);
</script>
@stop