<div class="sticky-top fixed-top">
    <div class="asd mb-5">
        <nav class="navbar  navbar-dark bg-dark2 navbar-expand-md bg-dark">
            <div class="container-fluid demo">
                {{-- <a href="#home-section" class="navbar-brand aa1 aaa pl-5">Transport</a> --}}
                 <a class="navbar-brand" href="#"><i class="fas fa-university"></i> StudyChamp</a>
                <button class="ml-auto navbar-toggler " type="button" data-toggle="collapse" data-target="#navBarnav"><span class="navbar-toggler-icon"></span>
                </button>
               
                <div class="collapse navbar-collapse" id="navBarnav">
                    <ul class="navbar-nav ml-auto uldesign">
                        {{-- <li class="nav-item px-3">
                           <form class="d-none d-md-inline-block form-inline  mr-0 mr-md-3 my-2 my-md-0">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </li> --}}
                        <li class="nav-item px-3">
                            <a class="nav-link aa1" href="{{ URL::to('student/my-course') }}">My Course</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link aa1" href="{{ URL::to('student/all-course') }}">All Course</a>
                        </li>
                        {{-- <li class="nav-item px-3">
                            <a class="nav-link aa1" href="#">Contact</a>
                        </li> --}}
                        
                        {{-- <li class="nav-item px-3 pr-5">
                            <ul class="navbar-nav ml-auto ml-md-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="nav-item px-3">
                            <a class="nav-link aa1" href="{{ URL::to('logout') }}">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div> 