@extends('admin.layouts.index')

@section('content')
    <div class="container-fluid pt-4">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Session</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>Session</li>
                
            </ul>
            
        </div>	
       
        <div class="card mb-4 shadow-sm rounded bor">
            {{-- <div class="card-header">
                <p class="h3 my-0">Create Session</p>
            </div> --}}
            <div class="pt-3">
                <p class="h3 pl-3 ">View All Session</p>
                {{-- <p class="p-0 m-0 float-right"><a  href="{{ URL::to('admin/session') }}">create student</a></p> --}}
                
                <hr class="hr1 p-0 m-0">
            </div>
           
            <div class="card-body">
                <div class="table-responsive"> 
                    <table  id="sessionlist" class="table table-bordered table-hover">
                        <thead>
                            <tr> 
                                <th>#</th>
                                <th>Session</th>
                                <th>Year</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($session as $ses)
                                <tr>
                                    <td>{{$ses->id}}</td>
                                    <td>{{$ses->session_name}}</td>
                                    <td>{{$ses->year}}</td>
                                    <td>{{$ses->status}}</td>
                                    
                            
                                    <td>
                                        <a class="btn btn-primary btn-sm " href="{{ URL::to('admin/session-edit/'.$ses->id) }}"  >Edit</a>
                                        <a class="btn btn-danger btn-sm "  href=""   data-toggle="modal" data-target="#myModal{{$ses->id}}">Delete</a>
                                    </td>
                                </tr> 

                                <div class="modal" id="myModal{{$ses->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Confirmation!!!</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure want to delete <b><i></i></b>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-primary" href="{{ URL::to('admin/delete-session/'.$ses->id) }}">Yes</a>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>        
                            @endforeach        
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div> 
    
    <script>
        $(document).ready(function () {
            $('#sessionlist').DataTable();
        });
    </script>   
@endsection