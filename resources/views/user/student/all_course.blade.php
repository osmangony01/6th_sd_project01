@extends('user.layouts.index1')

@section('content')
    <div>
        <div class="db-breadcrumb">
            <h5 class="breadcrumb-title mt-2"> All Course</h5>
            <hr class="m-0 p-0">
        </div>
        <div class="row text-center m-0 pt-3 ">

            
            @foreach ($crs as $c)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card ">
                    <img class="card-img-top" src="{{  asset('uploads/course/'.$c->pic)}}" alt="">
                    <div class="card-body ">
                        <h4 class="card-title">{{ $c->course_title }}</h4>
                    </div>
                    <div class="card-footer">
                        {{-- <a href="#" class="btn btn-outline-warning">Enroll</a> --}}
                        <a href="{{ URL::to('student/enroll-course/'.$c->id) }}" class="btn btn-outline-warning">Enroll</a>
                    </div>
                    </div>
                </div>
            @endforeach
            
            {{-- <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body ">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body ">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body ">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
