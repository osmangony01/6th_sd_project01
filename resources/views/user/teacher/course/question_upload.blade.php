@extends('user.layouts.index')

@section('content')
    <div class="container-fluid pt-2">
        {{-- <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Course</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>/</li>
                <li>All-course</li>
            </ul>    
        </div> --}}
        
        <div class="card hh1">
            <div class="card-body">
                <h2 class="pb-2">Upload the question ... </h2>
                <hr>
                <form method="post" action="{{ URL::to('/teacher/question-save') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="m-1">
                        {{-- <input type="file" id="uploadFile" name="uploadFile[]" required multiple/> --}}
                        <input class="" type="file" name="filenames[]"  id="customFile" multiple required>
                    </div>
                   <div class="pt-3 m-1">
                        <button type="submit" class="btn btn-outline-success">Uploads</button>
                   </div>
                </form> 
                <br/>
                {{-- <div class="row m-2" id="imgPreview">  
                </div> --}}
            </div>
        </div>
    </div>

@endsection
@section('content3')
    <script type="text/javascript">
    
    /*  $("#uploadFile").change(function(){
            $('#imgPreview').html("");
                var total_file=document.getElementById("uploadFile").files.length;
            for(var i=0;i<total_file;i++){
                $('#imgPreview').append("<div class='col-md-3'><img class='p-2' width='150' height='130' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
            }
        });
    */

    </script>
@endsection