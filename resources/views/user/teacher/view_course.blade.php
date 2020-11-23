@extends('user.layouts.index')

@section('content')
    <div class="container-fluid pt-2">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Course</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>All-course</li>
            </ul>    
        </div>
        <div class="card mb-4 hh">
            
            <div class="pt-3">
                <p class="h3 pl-3 ">All Courses</p>
                <hr class="hr1 p-0 m-0">
            </div>

            <div class="card-body pt-1">
               
                <div class="text-right p-0 m-0 pb-1">
                    <a href="{{ URL::to('teacher/create-course') }}" class="btn btn-primary shadow rounded" role="button" title="Create course"><b> + </b></a>
                    {{-- <button class="btn btn-primary shadow rounded"><b> + </b></button> --}}
                </div>
                <div class="row">
                    @foreach ($courses as $c)

                        <div class="col-lg-4 col-md-4 mb-4">
                            <div class="card h-100">
                            <img class="card-img-top" src="{{  asset('uploads/course/'.$c->pic)}}" alt="">
                            <div class="card-body">
                                <div>
                                    <a class="card-title h4" href="{{ URL::to('teacher/specific-course/'.$c->id) }}">{{ $c->course_title }}</a>
                                </div>
                                
                                {{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p> --}}
                            </div>
                            {{-- <div class="card-footer">
                                <a href="#" class="btn btn-primary">Find Out More!</a>
                            </div> --}}
                            </div>
                        </div>
                    @endforeach
                     
                </div>
                
        </div>
    </div>
@endsection