@extends('layouts.index')

@section('content')
    
    <div>
        <!-- Jumbotron Header -->
        <header class="jumbotron lf-side1 m-0 bor-rs">
        <h1 class="display-3">Welcome!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        {{-- <a href="#" class="btn btn-primary btn-lg">Call to action!</a> --}}
        </header>

        <!-- Page Features -->
        <div class="row text-center rg-side1 m-0 pt-5">

            

            <div class="mx-5 row float-left px-5">

            
                @foreach ($crs as $c)
                <div class=" col-lg-4 col-md-6 mb-4">
                        <div class="card ">
                        <img class="card-img-top" src="{{  asset('uploads/course/'.$c->pic)}}" alt="">
                        <div class="card-body ">
                            <h4 class="card-title">{{ $c->course_title }}</h4>
                        </div>
                        <div class="card-footer">
                            {{-- <a href="#" class="btn btn-outline-warning">Enroll</a> --}}
                            <a href="{{ URL::to('login') }}" class="btn btn-outline-warning">Enroll</a>
                        </div>
                        </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Find Out More!</a>
                    </div>
                    </div>
                </div> --}}
            </div>

        </div>
        <!-- /.row -->
    </div>

@endsection