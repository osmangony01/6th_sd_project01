<div class="col-lg-3 col-md-8 col-sm-8  offset-lg-0 offset-md-2 offset-sm-2 text-center ml-5 ">
    <div class="mx-2 border bcg1 bg-light11">
        <div class="img11 py-3">
            <img src="{{ asset('uploads/profile/avatar04.png') }}" alt="image" class="img-circle1" srcset="">
        </div>
        <div>
            <h4>{{ session('user3_name') }}</h4>
            <span>{{ session('user3_email') }}</span>
        </div>
        <div class="mt-4">
            <ul class="list-inline d-inline-flex">
                <li class="m-2"><a href="#"><i class="fab fa-facebook stt"></i></a></li>
                <li class="m-2"><a href="#"><i class="fab fa-twitter stt"></i></a></li>
                <li class="m-2"><a href="#"><i class="fab fa-linkedin  stt"></i></a></li>
                <li class="m-2"><a href="#"><i class="fab fa-google-plus stt"></i></a></li>
            </ul>
        </div>
        
        <div class="">
            <div class="list-group">
                <a href="{{ URL::to('student/profile') }}" class="list-group-item list-group-item-action">
                    Edit Profile
                </a>
                <a href="{{ URL::to('student/my-work') }}" class="list-group-item list-group-item-action">
                    Activity
                </a>
                <a href="{{ URL::to('student/my-course') }}" class="list-group-item list-group-item-action">
                   My Coures
                </a>
                
              </div>
        </div>
    </div>
</div>
