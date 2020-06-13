@extends('faculty.layouts.dashboard')
@section('page_heading','Manage Resources')
@section('section')

<!DOCTYPE html>
<html>
<head>
  <title>Manage Resources</title>
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">


<body>

    <!-- Details Modal -->
    <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
    </div> -->


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
        
   <span> <div class="pl-5 m-l-10"> <a href="{{ url ('/staff/add_resources') }}"><button type="button"  class="btn btn-info float-left " ><i class="fa fa-plus" aria-hidden="true"></i>  Add Resources</button></a></div></span>

    <div class="text-center">
        <h1>Manage Resources</h1><br>
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
                                    <td><button type='button' class='btn btn-danger' onclick="window.location='{{route('delete_resources',['id'=>$resource->resource_id])}}'">Suspend</button></td>
                                    <!-- <td><a href=""><button type='button' class='btn btn-success' data-toggle="modal" data-target="#exampleModalCenter" id="{{ $resource->resource_id }}">Modify</button></a></td> -->
                                     <td><a href= "{{route('resource_data',['id'=>$resource->resource_id])}}"><button type='button' class='btn btn-success' >Modify</button></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                         <div class="text-center">
        <h1><br>Suspended Resources</h1><br>
    </div>      
    
                         <table class="table" id="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Resource Name</th>
                                    <th scope="col">Capacity</th>
                                    <th scope="col">Facilities</th>
                                    <th scope="col">Operations</th>
                                   
                                </tr>
                                </thead>
                            <tbody>
                            @foreach($deleted_resources as $dl_resource)
                                <tr>
                                    <td>{{ $dl_resource->name }}</td>
                                    <td>{{ $dl_resource->capacity }}</td>
                                    <td>{{ $dl_resource->facilities }}</td>
                                    <td><button type='button' class='btn btn-success' onclick="window.location='{{route('readd_resources',['id'=>$dl_resource->resource_id])}}'">Restore</button></td>
                                    <!-- <td><a href=""><button type='button' class='btn btn-success' data-toggle="modal" data-target="#exampleModalCenter" id="{{ $resource->resource_id }}">Modify</button></a></td> -->
                                     <!-- <td><a href= "{{route('resource_data',['id'=>$resource->resource_id])}}"><button type='button' class='btn btn-success' >Modify</button></a></td> -->
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