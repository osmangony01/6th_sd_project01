@extends('user.layouts.index')

@section('content')
    <div class="container-fluid pt-2">
        
        <div class="card hh1">
            <div class="card-body">
                @include('user.teacher.course.navbar')
                <div class="row p-3">
                    <div>
                        <p>Teacher</p>
                        <hr>
                        <p>{{ session('user2_name') }}</p>
                        <p>{{ session('user2_email') }}</p>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Student</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <hr>
                            @foreach ($people as $s)
                                <tr>
                                    <td>
                                        <p>{{ $s->student_name }}</p>
                                        <p>{{ $s->student_email }}</p>
                                        @if ($s->status == 'pending')
                                            <a href="#" class="btn btn-primary btn-sm" role="button" aria-pressed="true">approve</a>
                                        @else

                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
@endsection