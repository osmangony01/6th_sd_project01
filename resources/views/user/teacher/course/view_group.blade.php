@extends('user.layouts.index')

@section('content')
    <div class="container-fluid pt-2">
        {{-- <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Course</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>All-course</li>
            </ul>    
        </div> --}}
        
        <div class="card hh1">
            <div class="card-body">
                @include('user.teacher.course.navbar')
                <div class="text-left float-left pt-2 pl-4">
                    <p class="h6"><b>{{ session('course_name') }} :: {{ session('gp_name') }} =></b></p>
                    
                </div>
                <div class=" p-0 m-0 pb-1 pt-1 text-right">

                    <a href="{{ URL::to('teacher/course/question-upload') }}" class="btn btn-primary shadow rounded" role="button" title="create group" > Make Question </a>

                    {{-- <a href="#" class="btn btn-primary shadow rounded" role="button" title="create group" data-toggle="modal" data-target="#myModal1"> Upload Question </a>

                    <div class="modal text-left" id="myModal1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Create Group</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form method="post" action="{{ URL::to('teacher/create-group') }}">
                                    @csrf
                                    <div class="modal-body">
    
                                        <div class="form-group">
                                          <label for="exampleInputGroup">Group Name </label>
                                          <input type="text" class="form-control" name="group_name" id="exampleInputGroup" aria-describedby="" placeholder="group name">
                                          
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputCode">Course Code</label>
                                          <input type="text" class="form-control" name="course_code" id="exampleInputCode" placeholder="" value="{{ session('course_code') }}" readonly>
                                        </div>
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-primary px-3">Create</button>
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>  --}}
                </div> 
                
                    
                <div class="row pt-3 px-4">
                    <ul class="list-group ">
                        @foreach ($questions as $q)
                            <li class="list-item1 ">
                                {{-- <img src="{{  asset('uploads/course/question/'.$q->question_set)}}" alt="" width="150px" height="100px" class="p-2 float-left"> --}}
                                    {{-- <a href="#" class="btn btn-primary">Clcik here</a> --}}
                                    
                                <a href="{{  asset('uploads/course/question/'.$q->question_set)}}"><i class="fas fa-file-image rr"></i> {{ $q->question_set }}</a>
                            </li>
                        @endforeach
                    </ul>
                    
                </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection