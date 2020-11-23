<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Document</title>
    
    @include('layouts.style')
    <style>
        #bdy {
            
        background-attachment: fixed;
        /* background-color: aqua; */
        background-image: url('{{asset("/uploads/home/bg1.jpg")}}');
        background-size: cover;
       
    }
    

    </style>
</head>

<body id="bdy">
    <!-- Navigation -->
    @include('layouts.navbar')

    <!-- Page Content -->
    <div class="container11">
        @yield('content')
    </div>

    {{-- footer --}}
    @include('layouts.footer')
  
    @include('layouts.script')
    
</body>

</html>