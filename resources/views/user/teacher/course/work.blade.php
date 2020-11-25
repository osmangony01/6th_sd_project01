@extends('user.layouts.index')

@section('content')
    <div class="container-fluid pt-2">
        
        <div class="card hh1">
            <div class="card-body">
                @include('user.teacher.course.navbar')
               
                <div class="p-0 m-0 pb-1 pt-4 text-center">

                    <a href="{{ URL::to('/teacher/course/assign-work') }}" class="btn btn-primary shadow rounded" role="button" title="create group" > Generate Assignment </a>
    
                </div>
            </div>
        </div>
    </div>
@endsection