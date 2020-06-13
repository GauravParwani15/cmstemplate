@extends('faculty.layouts.dashboard')
@section('page_heading','Resource Data')
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

    <a href="{{ url ('/staff/manage_resources') }}" ><button class="btn btn-primary">  Back </button></a>


    {!! Form::open(['id'=>'msform', 'action' => 'FacultyController@modify_resource', 'method'=>'POST']) !!} 
    <div class = "container-fluid">
        <table class="table" id="table">
            <thead>
                <th>
                        <h1>Resource Data</h1>
                    <!-- <td colspan="6" class=""><h3>Please add details again</h3></td> -->
                </th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3"><h3>Resource Name</h3></td>
                    <td colspan="3"><input type="text" name="resource_name" placeholder="{{$data[0]->name}}" value="{{$data[0]->name}}"></input></td>
                </tr>
                <tr>
                    <td colspan="3"><h3>Capacity</h3></td>
                    <td colspan="3"><input type="number" name="capacity" placeholder="{{$data[0]->capacity}}" value="{{$data[0]->capacity}}" ></input></td>
                </tr>
               <tr>
                    <td colspan="3"><h3>Resource Features</h3></td>
                    <td colspan="3"><input type="text" name="features" placeholder="{{$data[0]->facilities}}" value="{{$data[0]->facilities}}"></input></td>
                </tr>
                <!-- <tr>
                    <td colspan="3">Expected crowd: {{$data[0]->expected_crowd}}</td>
                    <td colspan="3">User Mail: {{$data[0]->user_email}}</td>
                </tr>  -->
                <tr class="text-center">
                    <!-- <td colspan="6">  <a href="{{ url ('/staff/booking') }}"><button type="submit" value="submit" form="msform" class="btn btn-primary">Save changes</button></a> -->
                    <td colspan="6">   {{Form::submit('Submit changes',['class'=>'btn btn-success']) }} </td>
                      {!! Form::close() !!}
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
            </tbody>
        </table>
    </div>    
</body>



@stop