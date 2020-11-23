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
        
    <div class="sticky-top fixed-top">
        <div class="asd mb-5">
            <nav class="navbar  navbar-dark bg-dark2 navbar-expand-md bg-dark">
                <div class="container-fluid demo">
                    {{-- <a href="#home-section" class="navbar-brand aa1 aaa pl-5">Transport</a> --}}
                     <a class="navbar-brand" href="#"><i class="fas fa-university"></i> StudyChamp</a>
                    <button class="ml-auto navbar-toggler " type="button" data-toggle="collapse" data-target="#navBarnav"><span class="navbar-toggler-icon"></span>
                    </button>
                   
                    <div class="collapse navbar-collapse" id="navBarnav">
                        <ul class="navbar-nav ml-auto uldesign">
                            {{-- <li class="nav-item px-3">
                               <form class="d-none d-md-inline-block form-inline  mr-0 mr-md-3 my-2 my-md-0">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </li> --}}
                            <li class="nav-item px-3">
                                <a class="nav-link aa1" href="#">All Course</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link aa1" href="#">Contact</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link aa1" href="#">My Course</a>
                            </li>
                            
                            <li class="nav-item px-3 pr-5">
                                {{-- <a class="nav-link aa1" href="../login.php">Log out</a> --}}
                                <ul class="navbar-nav ml-auto ml-md-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>   
<div class="container1 bg-c1">
        <div class="row m-0 my-1">
            <div class="col-lg-3 col-md-8 col-sm-8  offset-lg-0 offset-md-2 offset-sm-2 text-center ml-5 ">
                <div class="mx-2 border bcg1 bg-light11">
                    <div class="img11 py-3">
                        <img src="{{ asset('uploads/profile/avatar04.png') }}" alt="image" class="img-circle1" srcset="">
                    </div>
                    <div>
                        <h4>Mark Andre</h4>
						<span>mark.example@info.com</span>
                    </div>
                    <div class="mt-4">
                        <ul class="list-inline d-inline-flex">
                            <li class="m-2"><a href="#"><i class="fab fa-facebook stt"></i></a></li>
                            <li class="m-2"><a href="#"><i class="fab fa-twitter stt"></i></a></li>
                            <li class="m-2"><a href="#"><i class="fab fa-linkedin  stt"></i></a></li>
                            <li class="m-2"><a href="#"><i class="fab fa-google-plus stt"></i></a></li>
                        </ul>
                    </div>
                    
                    <div class="">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                              Cras justo odio
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                            
                          </div>
                    </div>
                </div>
                {{-- <div class="">
                    <h5 class="">Hi, ahsan</h5>
                </div>
               <form id="" method="POST" action="" enctype="multipart/form-data">
                    <img src="img/ahsan.jpg" class="mx-auto img-fluid img-circle d-block" style="width:160px;height:180px;border:1px solid gray;border-radius:4px;padding:5px;" alt="avatar">
                    <label class="custom-file">
                        <span class="custom-file-control text-info">Edit photo</span>
                        <input type="file" id="file" class="custom-file-input">  
                    </label>
                    <button type="submit" name="submit1" class="btn btn-outline-info btn-sm mt-0">Upload photo</button> 
               </form>                    --}}
               {{-- <div>
                   <img src="" alt="" srcset="">
               </div> --}}
                
                
            </div>
  
            <div class="col-lg-8 col-md-10 mx-4 bg-light11 border">
                       
                   
            
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quisquam cum necessitatibus enim voluptatem, recusandae fugiat ipsam repudiandae reprehenderit. Eligendi est animi explicabo praesentium dolorum error, quisquam cum molestiae repellat!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non consectetur doloribus eveniet, reiciendis explicabo accusantium reprehenderit modi minima nam libero deleniti culpa obcaecati vitae totam cumque illum asperiores a expedita!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, culpa doloribus error nam commodi recusandae, natus incidunt quia cumque a dignissimos optio accusamus obcaecati ducimus quasi. Saepe doloremque repudiandae porro.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione hic odio explicabo nihil officiis officia aliquid alias ex, quaerat dicta minima tempore veritatis natus perferendis molestiae iusto atque fuga perspiciatis!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic blanditiis sequi tempore itaque temporibus iure at reiciendis consequatur. Voluptates culpa facilis ut totam quisquam nulla adipisci? Perspiciatis similique deleniti veniam!
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa sapiente accusamus eos recusandae? Quas, labore rerum porro consequuntur quidem consectetur sed laborum provident ipsa numquam tempore quia excepturi voluptatibus qui?
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis quod nam quo adipisci amet molestias eligendi est? Eius consequatur fugiat quo ex rerum voluptas amet ipsam inventore labore? Illo, obcaecati.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, animi ipsum quisquam rem possimus mollitia? Dicta dignissimos expedita provident error corrupti! Illum modi nostrum odit pariatur sed rem assumenda. Aliquid!lore
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat libero, nulla voluptate modi delectus accusamus, architecto qui ipsa sint atque dolore, esse accusantium! Autem libero odit perspiciatis inventore quod aliquam?
       
            </div>
        </div>
    </div> 
   
    @include('layouts.script')
</body>
</html>