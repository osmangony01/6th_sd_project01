@extends('user.layouts.index')

@section('content')
    <div class="container-fluid pt-2">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Coures</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>create-course</li>
            </ul>    
        </div>
        <div class="card mb-4 bor11">
            <div class="card-header ch1">
                <p class="h4 p-0 m-0">Create Coures</p>
            </div>
            <div class="card-body">
                <form method="post" action="{{ URL::to('/teacher/store-course') }}" enctype="multipart/form-data">               
                    @csrf
                    <div class="form-group row pt-3">
                        <label for="" class="col-sm-4 col-form-label text-md-right"> Select Session :</label>
                        <div class="col-sm-6">
                            <select name="session" id="" class="form-control select1"> 
                                <option value="" selected="" disabled="" hidden>Select</option>
                                @foreach ($session as $ses)
                                    <option value="{{$ses->session_name." ".$ses->year}}" >{{ $ses->session_name." ".$ses->year }}</option>
                                @endforeach
                            </select>
                            <span class="error">{{ $errors->first('session') }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-md-right">Couse Title :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="course_title" placeholder="title" value="{{ old('course_title') }}">
                            <span class="error">{{ $errors->first('course_title') }}</span>
                        </div>
                    </div>
                       
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-md-right">Course Code :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="course_code" placeholder="course code" value="{{ old('course_code') }}">
                            <span class="error">{{ $errors->first('course_code') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-md-right">Credit :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="credit" placeholder="credit" value="{{ old('credit') }}">
                            <span class="error">{{ $errors->first('credit') }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-md-right">Description :</label>
                        <div class="col-sm-6">
                            <textarea name="description" id="" cols="" rows="3" class="form-control textarea1" placeholder="description" >{{ old('description') }}</textarea>
                                <span class="error">{{ $errors->first('description') }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-md-right">Picture :</label>
                        <div class="col-sm-6">
                            <input type="file" class="" name="image">
                            <span class="error">{{ $errors->first('image') }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 offset-sm-4">
                            <button type="submit" class="btn btn-outline-primary px-4">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection