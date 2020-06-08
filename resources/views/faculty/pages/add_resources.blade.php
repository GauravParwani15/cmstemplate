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
<link rel="stylesheet" type="text/css"
href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css"
href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/util.css') }}" rel="stylesheet">
 <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<!--===============================================================================================-->



</head>
<body>


<div class="">
<a href="{{ url ('/staff/manage_resources') }}" ><button class="btn btn-info "><i class="fa fa-3x fa-long-arrow-left" aria-hidden="true"></i></button></a>
</div>
<div class="container-contact100">

<div class="wrap-contact100">
<div class="contact100-form validate-form" method="post">
<span class="contact100-form-title">
Add New Resource
</span>

{!! Form::open(['id'=>'msform', 'action' => 'FacultyController@store_resource', 'method'=>'POST']) !!} 

<div class="wrap-input100 validate-input" data-validate="Please enter
Resource name">
<input class="input100" type="text" id="name" name="resource_name"
placeholder="Resource Name" required>
<span class="focus-input100"></span>
</div>

<!-- <div class="wrap-input100 validate-input" data-validate = "Please enter
Room Number">
<input class="input100" type="text" id="roomid" name="roomid"
placeholder="Room ID">
<span class="focus-input100"></span>
</div> -->

<div class="wrap-input100 validate-input" data-validate = "Please enter
Capacity">
<input class="input100" type="number" id= "capacity" name="capacity"
placeholder="Capacity" required>
<span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input" data-validate = "Add Description">
<textarea class="input100" id="features" name="features"
placeholder="Fill extra facilities if any"></textarea>
<span class="focus-input100"></span>
</div>

<div class="container-contact100-form-btn">
<button type="submit" value="submit" form="msform" name="add" class="btn btn-info">
<span>
<i class="fa fa-plus" aria-hidden="true"></i>
Add
</span>
</button>
</div>
</div>

{!! Form::close() !!}


@stop