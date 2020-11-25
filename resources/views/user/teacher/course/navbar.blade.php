<nav class="navbar navbar-expand-md navbar-light ml-0">
    {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('teacher/course/home/'.session('course_id')) ? 'active' : '' }}">
          <a class="nav-link ff" href="{{  URL::to('teacher/course/home/'.session('course_id'))}}">Home</a>
        </li>
        <li class="nav-item {{ Request::is('teacher/course/group') ? 'active' : '' }}">
          <a class="nav-link ff" href="{{ URL::to('teacher/course/group') }}">Group</a>
        </li>
       
        <li class="nav-item {{ Request::is('teacher/course/work') ? 'active' : '' }}">
          <a class="nav-link ff" href="{{ URL::to('teacher/course/work') }}">Work</a>
        </li>
        <li class="nav-item {{ Request::is('teacher/course/view-people') ? 'active' : '' }}">
          <a class="nav-link ff" href="{{ URL::to('teacher/course/view-people') }}">People</a>
        </li>
      </ul>
    </div>
</nav>
<div>
    <hr style="margin-top:0px;margin-bottom:0px;">
</div>

