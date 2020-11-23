@extends('admin.layouts.index')

@section('content')
    <div class="container-fluid pt-4">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Session</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>Session</li>
                
            </ul>
            
        </div>	
       
        <div class="card mb-4 shadow-sm rounded bor">
            {{-- <div class="card-header">
                <p class="h3 my-0">Create Session</p>
            </div> --}}
            <div class="pt-3">
                <h3 class="pl-3">Create Session</h3>
                <hr class="hr1 p-0 m-0">
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                @endif
                <form method="post" action="{{ URL::to('admin/session-store') }}">               
                    @csrf
                    <div class="form-group row pt-3">
                        <label for="" class="col-sm-4 col-form-label text-md-right">Session Name :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="session" placeholder="session name" value="{{ old('session') }}">
                            <span class="error">{{ $errors->first('session') }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-md-right">Year :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="year" placeholder="year" value="{{ old('year') }}">
                            <span class="error">{{ $errors->first('year') }}</span>
                        </div>
                    </div>
                       
                    <div class="form-group row">
                        <div class="col-sm-6 offset-sm-4">
                            <button type="submit" class="btn btn-outline-primary px-4">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>  
    </div>    
@endsection