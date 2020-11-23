<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('layouts.style')
    <style>
        #bdy {
            background-attachment: fixed;
            /* background-color: aqua; */
            background-image: url('{{asset("/uploads/home/bg1.jpg")}}');
            background-size: cover;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body id="bdy">
    <div class="container-fluid1">
        @include('layouts.navbar')
        <div class="row pp">
            <div id="" class="col-lg-5 lf-side">
                
                {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusamus soluta impedit excepturi suscipit quasi, voluptates quos, repudiandae temporibus unde sint odio qui eligendi voluptatem necessitatibus cumque esse? Officiis, totam. --}}
                {{-- <i class="fas fa-graduation-cap img"></i> --}}
            </div>
            <div class="col-lg-7 col-md-12 rg-side pt-5">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                @endif
                <div class="offset-sm-2">
                    <h2>Teacher Registration</h2>
                    <hr class="hr1">
                </div>
                <div class="">
                    <br>
                    <form method="post" action="{{ URL::to('teacher-register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label text-md-right">Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="name" placeholder="name" value="{{ old('name') }}">
                                <span class="error">{{ $errors->first('name') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label text-md-right">Email Address</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
                                <span class="error">{{ $errors->first('email') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label text-md-right">Password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="password" placeholder="password" value="{{ old('password') }}">
                                <span class="error">{{ $errors->first('password') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label text-md-right">Confirm Password</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" name="confirm_password" placeholder="confirm password" value="{{ old('confirm_password') }}">
                                <span class="error">{{ $errors->first('confirm_password') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label text-md-right">Date of Birth</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name="dob" placeholder="date of birth" value="{{ old('dob') }}">
                                <span class="error">{{ $errors->first('dob') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-4 col-form-label text-md-right">Address</label>
                            <div class="col-sm-7">
                                <textarea name="address" id="" cols="" rows="3" class="form-control textarea1" placeholder="give address" >{{ old('address') }}</textarea>
                                <span class="error">{{ $errors->first('address') }}</span>
                            </div>
                        </div>

                       
                        <div class="form-group row">
                            <div class="col-sm-7 offset-sm-4">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('jquery/jquery3.min.js') }}"></script>
    <script src="{{ asset('bootstrap4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
</body>
</html>