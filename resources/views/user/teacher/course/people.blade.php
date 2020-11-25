@extends('user.layouts.index')

@section('content')
    <div class="container-fluid pt-2">
        
        <div class="card hh1">
            <div class="card-body">
                @include('user.teacher.course.navbar')
                <div class="row p-3 pl-2">
                    <h3>All Student</h3>
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $c=1; ?>
                            @foreach ($people as $s)
                              
                                <tr>
                                    <td><?php  echo $c++;  ?></td>
                                    <td>{{ $s->student_name }}  </td>
                                    <td>{{ $s->student_email }}</td>
                                    <td> 
                                        @if ($s->status == 'pending')
                                            <a href="{{ URL::to('teacher/course/approved/'.$s->id) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">approve</a>
                                        @else
                                            <p class="clr1 p-0 m-0">approved</p>
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