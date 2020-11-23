{{-- <div class="bg-color1"> 
    <ul class="nav float-left ml-5">
        <li class="nav-item"><a class="nav-link f-color" href=""><i class="far fa-envelope"></i> Support@website.com</a></li>
    </ul>  
    <ul class="nav justify-content-end mr-5">
        <li class="nav-item "><a class="nav-link f-color" href="#">Login</a></li>
        <li class="nav-item "><a class="nav-link f-color" href="#">Register</a></li>
        
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="registerModule" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Register
            </a>
            <div class="dropdown-menu " aria-labelledby="registerModule">
            <a class="dropdown-item" href="">I am a Student</a>
            <a class="dropdown-item" href="">I am a Teacher</a>
            </div>
        </li>  
    </ul>
    <div>
    <hr class="m-0 p-0">
    </div>
</div> --}}
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark2 d-block pad sticky-top m-0">
    <div class="container">
        {{-- <a class="navbar-brand" href="#"> StudyChamp</a> --}}
        <a class="navbar-brand" href="#"><i class="fas fa-university"></i> StudyChamp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item mr-4">
                    <form class="form-inline" method="" action="">
                        @csrf
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div> 
                      </form>
                </li> --}}

                <li class="nav-item px-2" ><a class="nav-link" href="{{ URL::to('/') }}">HOME</a></li>

                <li class="nav-item px-2"><a class="nav-link" href="{{ URL::to('/about') }}">ABOUT</a></li>
                
                <li class="nav-item px-2"><a class="nav-link" href="{{ URL::to('/contact') }}">CONTACT</a></li>
               
                <li class="nav-item px-2"><a class="nav-link" href="{{ URL::to('/login') }}">LOGIN</a></li>

                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" id="registerModule" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    REGISTER
                    </a>
                    <div class="dropdown-menu " aria-labelledby="registerModule">
                    <a class="dropdown-item" href="{{ URL::to('/student-registration') }}">I am a Student</a>
                    <a class="dropdown-item" href="{{ URL::to('/teacher-registration') }}">I am a Teacher</a>
                    </div>
                </li>

                {{-- @if(Session::has('user2_id') || Session::has('user3_id'))
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Profile <span class="caret"></span>
                        </a>
    
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ URL::to('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>
    
                            <form id="logout-form" action="{{ URL::to('logout') }}" method="post" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('login') }}">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="registerModule" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Register
                        </a>
                        <div class="dropdown-menu " aria-labelledby="registerModule">
                        <a class="dropdown-item" href="{{ URL::to('student-registration') }}">I am a Student</a>
                        <a class="dropdown-item" href="{{ URL::to('teacher-registration') }}">I am a Teacher</a>
                        </div>
                    </li>
                @endif --}}
               
                {{-- <li class="nav-item">
                    <a class="nav-link" href="">Register</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
  

    
