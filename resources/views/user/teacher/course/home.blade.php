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
                <div class="row p-3">
                    <div class="card h-100">
                        <img class="card-img-top c-img" src="{{  asset('uploads/course/'.$course->pic)}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $course->course_title }}<h4>
                            {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-10 col-md-8 mb-4 offset-1">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Group</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">People</a>
                            </li>
                        </ul>
                        <hr>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="card h-100">
                                    <img class="card-img-top c-img" src="{{  asset('uploads/course/'.$course->pic)}}" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class=" p-0 m-0 pb-1">
                                    
                                    <a href="#" class="btn btn-primary shadow rounded" role="button" title="create group" data-toggle="modal" data-target="#myModal{{$course->id}}"><b> + </b></a>

                                    <div class="modal" id="myModal{{$course->id}}">
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
                                                          <input type="text" class="form-control" name="course_code" id="exampleInputCode" placeholder="" value="{{ $course->course_code }}" readonly>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-outline-primary px-3">Create</button>
                                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">Special title treatment</h5>
                                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                          <a href="#" class="btn btn-primary">Clcik here</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                          <div class="card-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary">Clcik here</a>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">Special title treatment</h5>
                                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                          <a href="#" class="btn btn-primary">Clcik here</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias mollitia dolores dolorem cumque sequi tenetur dolor maiores quam consectetur, officia illo porro, neque, nam inventore recusandae vitae fugit repudiandae voluptatum.</div>
                        </div>  
                    </div>  --}}
                    
                </div>
            </div>
        </div>
    </div>
@endsection