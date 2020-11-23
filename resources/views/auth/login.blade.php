<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.style')
    <style>
        #bdy{
            background-attachment: fixed;
            /* background-color: aqua; */
            background-image: url('{{asset("/uploads/home/bg1.jpg")}}');
            background-size: cover;
        }
        .error1{
            color: red;
        }
        input[type=email]{
            padding: 0px 0px 0px 50px;
        }
        input[type=password]{
            padding: 0px 0px 0px 45px;
        }
        .inputIcon{
            position: relative;
        }
        .inputIcon1{
            position: absolute;
            color:#aaa;
            font-size: 1.3rem; 
            /* padding:9px 8px; */
            top:7px;
            left: 28px;
        } 
        .passIcon{
            position: relative;
        }
        .passIcon1{
            position:absolute;
            color: #aaa;
            font-size: 1.2rem;
            top:6px;
            left: 28px;
        }
        
    </style>
</head>
<body id="">
    <div class="container-fluid1 ">
        <div>
            @include('layouts.navbar')    
        </div>   
        <div class="row justify-content-center pm bgcolor">
            <br><br>
            <div class="col-md-7">
                <div class="card border_card shadow-sm bgl">
                    <div class="card-header bor">
                        <p class="h3 my-0"><b>Login to your</b> Account</p>
                    </div>
                    <div class="card-body ">
                        @if (Session::has('error'))
                            <div class="error1 d-flex justify-content-center pb-2">
                                <strong class="text-center">{{ Session::get('error') }}</strong>
                            </div>
                        @endif
                        <form method="post" action="{{ URL::to('login-request') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right"></label>
                            </div>

                            <div class="form-group row inputIcon">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><b>Email Address</b></label>
                                <div id="" class="col-md-7 ">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="email" value="{{ old('email')}}" required>
                                    <i class="fas fa-envelope inputIcon1" aria-hidden="true"></i>
                                    <span class="error1">{{ $errors->first('email') }}</span>
                                </div>
                                
                            </div>

                            <div class="form-group row pt-2 pb-2 ">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><b>Password</b></label>
                                <div id="" class="col-md-7 passIcon">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="password" value="{{ old('password')}}" required>
                                    <i class="fas fa-lock passIcon1"></i> 
                                </div>
                                <span class="error">{{ $errors->first('password') }}</span>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                            </div> -->
                            
                            <div class="form-group row ">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary px-3" name="submit">Login</button>
                                    <!-- <a class="btn btn-link" href="forgetpassword?username=">Forgot Your Password?</a> -->
                                </div>
                            </div>

                        </form>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4 ">
                                <a class="" href="#">Forgot Your Password?</a><br>
                                <small>Do not have an account? </small><a href="" class="">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.script')
</body>
</html>