@extends('user.layouts.index1')

@section('content')
    <div>
        <div class="db-breadcrumb">
            <h5 class="breadcrumb-title mt-2"> My Work</h5>
            <hr class="m-0 p-0">
        </div>
        <div class="card hh1">
            <div class="card-body">
                <h5 class="card-title">Assignment :: </h5>
                @foreach ($question as $q)                                           
                    <a class="nav-link" href="{{  asset('uploads/course/question/'.$q->question_set)}}"><i class="fas fa-file-image rr"></i> {{ $q->question_set }}</a>
                @endforeach
                </div>
            </div>
        </div>
    </div>
   
@endsection
