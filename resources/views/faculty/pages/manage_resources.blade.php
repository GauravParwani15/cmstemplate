@extends('faculty.layouts.dashboard')
@section('page_heading','Manage Resources')
@section('section')

<!DOCTYPE html>
<html>
<head>
  <title>Manage Resources</title>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script> -->

  <meta name="viewport" content="width=device-width, initial-scale=1">


<body>

    <!-- Details Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #e7e1e1;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table" id="table">
                        <tbody>
                            <th scope="row"></th>
                            <tr>
                                <td colspan="3">Event Name:-Vivekananda Kendra</td>
                                <td colspan="3">Resource:-Mr.Sunny Nair</td>
                            </tr>
                            <tr>
                                <td colspan="3">date: 01/05/20</td>
                                <td colspan="3">Time: 2-4</td>
                            </tr>
                            <tr>
                                <td colspan="3">for class: B.E</td>
                                <td colspan="3">Expected guests/speaker/company name: Mr.XYZ</td>
                            </tr>
                            <tr>
                                <td colspan="3">Expected crowd: 200</td>
                                <td colspan="3">User Mail: abc@ves.ac.in</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer col-xs-1 center-block">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


        <!-- Details modal end -->


    <!-- <div class="">
        <div class="pt-5" style="background-color:white;">
            <div class="card" style="border: none;">
                <h3>Manage Resources</h3><br><br>
                <div class="card-body">
                   <a href="{{ url ('/staff/add_resources') }}"><button type="button"  class="btn btn-info float-left " >Add Resource</button></a>
                </div>

            </div>
        </div>
    </div> -->
        
    <div class="pl-5 m-l-10"> <a href="{{ url ('/staff/add_resources') }}"><button type="button"  class="btn btn-info float-left " >Add Resources</button></a></div>


    <div class="text-center">
        <h1>Manage Resources</h1>
    </div>      
    


    <div class=" px-5">
                <div class="">
                    <div class="">

                        <table class="table" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Resource Name</th>
                                    <th scope="col">Capacity</th>
                                    <th scope="col">Facilities</th>
                                    <th scope="col">Operations</th>
                                    <th></th>
                                </tr>
                                </thead>
                            <tbody>
                            @foreach($resources as $resource)
                                <tr>
                                    <td>{{ $resource->name }}</td>
                                    <td>{{ $resource->capacity }}</td>
                                    <td>{{ $resource->facilities }}</td>
                                    <td><button type='button' class='btn btn-danger' onclick="window.location='{{route('delete_resources',['id'=>$resource->resource_id])}}'">Delete</button></td>
                                    <!-- <td><a href=""><button type='button' class='btn btn-success' data-toggle="modal" data-target="#exampleModalCenter" id="{{ $resource->resource_id }}">Modify</button></a></td> -->
                                     <td><a href= "{{route('resource_data',['id'=>$resource->resource_id])}}"><button type='button' class='btn btn-success' >Modify</button></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                   
                    </div>
                </div>
    </div>
                
            </div>
        </div>
        

             
           

</body>


</html>


@stop