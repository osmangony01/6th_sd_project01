@extends('layouts.index')

@section('content')
    
    <div>
        <!-- Jumbotron Header -->
        <header class="jumbotron lf-side1 m-0 bor-rs">
        <h1 class="display-3">About</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        {{-- <a href="#" class="btn btn-primary btn-lg">Call to action!</a> --}}
        </header>

        <!-- Page Features -->
        <div class="row  m-0 p-0">
            <div class="card m-0 p-0">
                <div class="card-body ">
                    <h2>About Us</h2>
                    <div class="row">
                        <div class="col-md-6 ">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus optio, quos adipisci quibusdam accusamus molestiae, eligendi deleniti quae quam laborum maxime consequuntur fuga est, quod possimus atque maiores perspiciatis repellendus.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus optio, quos adipisci quibusdam accusamus molestiae, eligendi deleniti quae quam laborum maxime consequuntur fuga est, quod possimus atque maiores perspiciatis repellendus.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus optio, quos adipisci quibusdam accusamus molestiae, eligendi deleniti quae quam laborum maxime consequuntur fuga est, quod possimus atque maiores perspiciatis repellendus.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus optio, quos adipisci quibusdam accusamus molestiae, eligendi deleniti quae quam laborum maxime consequuntur fuga est, quod possimus atque maiores perspiciatis repellendus.
                            </p>
                            
                        </div>
                        <div class="col-md-6 ">
                            
                            <img class="img-fluid" src="{{ asset('uploads/home/pic9.jpg') }}" alt="imgae">
                               
                        </div>
                    </div>      
                </div>       
            
            </div>
        </div>
        <!-- /.row -->
    </div>

@endsection