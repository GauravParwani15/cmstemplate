@extends('faculty.layouts.dashboard')
@section('page_heading','Add Resources')
@section('section')



<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Resource</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->

<!--===============================================================================================-->

<link href="{{ URL::asset('css/util.css') }}" rel="stylesheet">
 <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<!--===============================================================================================-->



</head>
<body>


<div class="">
<a href="{{ url ('/staff/manage_resources') }}" ><button class="btn btn-info "><i class="fa fa-2x " aria-hidden="true">Back</i></button></a>
</div>

{!! Form::open(['id'=>'msform', 'action' => 'FacultyController@store_resource', 'method'=>'POST']) !!} 


 <div class = "container-fluid">
        <table class="table" id="table">
            <thead>
                <th>
                   <h1>Add new Resource</h1>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3"><h3>Resource Name</h3></td>
                    <td colspan="3"><input type="text" name="resource_name" ></input></td>
                </tr>
                <tr>
                    <td colspan="3"><h3>Capacity</h3></td>
                    <td colspan="3"><input type="number" name="capacity"  ></input></td>
                </tr>
               <tr>
                    <td colspan="3"><h3>Resource Features</h3></td>
                    <td colspan="3"><input type="text" name="features" ></input></td>
                </tr>
                <tr class="text-center">
                    <td colspan="6">  <a href="{{ url ('/staff/booking') }}"><button type="submit" value="submit" form="msform" name="add" class="fa fa-2x btn btn-info">
<span>
<i class="fa fa-plus" aria-hidden="true"></i>
Add
</span>
</button></a>
                    <td colspan="6">   
                    </td>
                      {!! Form::close() !!}





@stop