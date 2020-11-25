<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark ttr-sidebar1 "  id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                {{-- <div class="user-panel">
                    <div class="pull-left">
                      <img src="{{ asset('uploads/profile/avatar04.png') }}" class="img-circle img1" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                    </div>
                </div> --}}
                <div class="img11 py-3">
                    <img src="{{ asset('uploads/profile/avatar04.png') }}" alt="image" class="img-circle1" srcset="">
                </div>
                <div class="text-center ff">
                    
                    <h6>{{ session('user2_name') }}</h6>
                    <h6>{{ session('user2_email') }}</h6>
                </div>
                <div><hr class="hr1"></div>
                {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                <a class="nav-link" href="{{ URL::to('teacher/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                {{-- <a class="nav-link" href="{{ URL::to('teacher/view-course') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Course
                </a> --}}
                {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Course
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link pl-5" href="{{ URL::to('teacher/view-course') }}">View Course</a>
                        <a class="nav-link pl-5" href="#">Modify Course</a>
                    </nav>
                </div>

                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Edit Profile
                </a>

                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Others
                </a>
                {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div> --}}
            </div>     
        </div>
    </nav>
</div>