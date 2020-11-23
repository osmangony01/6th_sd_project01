{{-- @extends('admin.layouts.index')

@section('content')


    <div class="container-fluid">
        <h1 class="mt-4">Static Navigation</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Static Navigation</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <p class="mb-0">
                    This page is an example of using static navigation. By removing the
                    <code>.sb-nav-fixed</code>
                    class from the
                    <code>body</code>
                    , the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
                </p>
            </div>
        </div>
    </div>    
@endsection --}}

@extends('admin.layouts.index')

@section('content')
    <div class="container-fluid pt-4">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Dashboard</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>/</li>
            </ul>    
        </div>	
       
       
        <div class="card mb-4">
            <div class="card-body">
                <p class="mb-0">
                    This page is an example of using static navigation. By removing the
                    <code>.sb-nav-fixed</code>
                    class from the
                    <code>body</code>
                    , the top navigation and side navigation will become static on scroll. Scroll down this page to see an example.
                </p>
            </div>
        </div>
    </div>    
@endsection