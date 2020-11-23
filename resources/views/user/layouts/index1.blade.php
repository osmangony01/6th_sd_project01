<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.style')
    <style>
        .container-fluid1{
            padding:0;
            margin:0;
        }
        .bg-dark2{
            background: linear-gradient(45deg, #4c1864 0%, #3f189a 100%);
        }
        .bgc{
            background-color: whitesmoke;
        }
        .img-circle1 {
            width: 100%;
            max-width: 100px;
            height: auto;
            border: 1px solid gray;
            border-radius: 50%;
            padding: 5px;
        }

        .img11 {
            margin: auto;
        }   
        .bg-light11{
            background-color: white;
        }
        .stt{
            color: black;
            background-color: white;
            font-size: 1.5rem;
            
        }

    </style>
</head>
<body id="" class="bgc">
    <div class="container-fluid1 ">
        
        @include('user.layouts.snavbar')

        <div class="container1 bg-c1">
            <div class="row m-0 my-1">
                    
                @include('user.layouts.ssidebar')

                <div class="col-lg-8 col-md-10 mx-4 bg-light11 border">
                                    
                    @yield('content')
                    
                </div>
            </div>
        </div> 
    </div>
    @include('layouts.script')
</body>
</html>