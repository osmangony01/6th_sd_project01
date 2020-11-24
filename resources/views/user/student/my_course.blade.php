@extends('user.layouts.index1')

@section('content')
    <div>
        <div class="db-breadcrumb">
            <h5 class="breadcrumb-title mt-2"> My Course</h5>
            <hr class="m-0 p-0">
        </div>
        <div class="row text-center m-0 pt-3 ">

            
            @foreach ($courses as $c)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card ">
                    <img class="card-img-top" src="{{  asset('uploads/course/'.$c->pic)}}" alt="">
                    <div class="card-body ">
                        <h4 class="card-title">{{ $c->course_title }}</h4>
                    </div>
                    <div class="card-footer">
                        {{-- <a href="#" class="btn btn-outline-warning">Enroll</a> --}}
                        {{-- <a href="{{ URL::to('student/enroll-course/'.$c->id) }}" class="btn btn-outline-warning">Enroll</a> --}}
                        <p class="m-0 p-0 float-right clr">{{  $c->status }}</p>
                    </div>
                    </div>
                </div>
            @endforeach
            
            
        </div>
    </div>
@endsection
