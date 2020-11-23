<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.layouts.header')
        @include('admin.layouts.script')
    </head>
    <body class="">

        @include('admin.layouts.topnavbar')
        
        <div id="layoutSidenav">

            @include('admin.layouts.leftnavbar')

            <div id="layoutSidenav_content" class="">
                <main class="">
                   
                    @yield('content')
                    
                </main>

                @include('admin.layouts.footer')

            </div>
        </div>
             
        {{-- @yield('content2') --}}

        {{-- @include('admin.layouts.script') --}}
    </body>
</html>
