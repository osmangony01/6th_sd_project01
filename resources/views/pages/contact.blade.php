@extends('layouts.index')

@section('content')
    
    <div>
        <!-- Jumbotron Header -->
        <header class="jumbotron lf-side1 m-0 bor-rs">
        <h1 class="display-3">Contact Us</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        {{-- <a href="#" class="btn btn-primary btn-lg">Call to action!</a> --}}
        </header>

        <!-- Page Features -->
        <div class="row justify-content-center m-0 p-0">
            <div class="col-md-12 m-0 p-0">
               
                <div class="card border_card m-0 p-0">
                   
                    <div class="card-body ">
                        <h2 class="mb-5">Contact Us </h2>
                        {{-- <a class="text-sm-right" href="#">view student list</a> --}}
                        <form method="post" action="" >
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                <div id="" class="col-md-5">
                                    <input type="text" id="" class="form-control" name="name" placeholder="full name" value="">
                                    <span class="error"></span>
                                </div>     
                            </div>
    
                            <div class="form-group row mb-4">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Enter Your Email</label>
                                <div id="email1" class="col-md-5">
                                    <input type="email" id="" class="form-control" name="email" placeholder="email" value="">
                                    <span class="error"></span>
                                </div>
                            </div>
    
                           
                            <div class="form-group row mb-4">
                                <label for="" class="col-md-4 col-form-label text-md-right">Address</label>
                                <div id="" class="col-md-5">
                                    <textarea name="address" id="" class="form-control textarea1" placeholder="address" ></textarea>
                                    <span class="error"></span>
                                </div>
                            </div>
                            
                            <div class="form-group row mb-4">
                                <label for="" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div id="" class="col-md-5">
                                    <textarea name="Description" id="" rows="4" class="form-control textarea1" placeholder="Description" ></textarea>
                                    <span class="error"></span>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection