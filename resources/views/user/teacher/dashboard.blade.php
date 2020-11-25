@extends('user.layouts.index')

@section('content')
    <div class="container-fluid pt-2">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Dashboard</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>/</li>
            </ul>    
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body bor-t">
                        <p class="mb-0 font-weight-bold p-2">
                           Total Course : {{ $total_course }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body bor-t">
                        <p class="mb-0 font-weight-bold p-2">
                            Total Student : {{ $total_student }}
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
@endsection