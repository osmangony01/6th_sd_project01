<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Document</title>
    
    @include('user.layouts.style')
   
</head>

<body id="">
    <!-- Navigation -->
    @include('user.layouts.navbar')

    <!-- Page Content -->
    <div id="layoutSidenav">
        
        @include('user.layouts.sidebar') 

        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
        </div>
        
    </div>

    <div>
        @yield('content2')
    </div>
    {{-- footer --}}
    {{-- @include('layouts.footer') --}}
  
    @include('user.layouts.script')
    <div>
        @yield('content3')
    </div>
</body>

</html>