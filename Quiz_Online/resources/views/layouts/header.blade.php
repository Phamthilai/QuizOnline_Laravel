<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
	<link rel="stylesheet"  href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="header">
        <div>
            <img src="../upload/images_header/logo.png" class="image">
        </div>
        @if (Auth::check())
            @if ( Auth::user()->role_id == 1 )
                <div class="menu">
                    <ul>
                        <b>

                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('parner',['type' => 1]) }}">Partner</a></li>
                            <li><a href="{{ route('topic.store') }}">Create topic</a></li>
                            <li><a href="{{ route('news') }}">New</a></li>
                            <li><a href="contact">Contact</a></li>
                        </b>
                    </ul>
                </div>
            @endif
        @else
            <div class="menu">
                <ul>
                    <b>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('parner',['type' => 1]) }}">Partner</a></li>
                        <li><a href="" data-toggle="modal" data-target="#myModal1">Test</a>
                        </li>
                        <li><a href="{{ route('news') }}">New</a></li>
                        <li><a href="contact">Contact</a></li>
                    </b>
                </ul>
            </div>
        @endif
        <div class="account">
            @if (Auth::check())
                <li>
                    <a href=""><i class="fa fa-user"></i>{{Auth::user()->name}}</a>||
                    <a href="{{ route('logout') }}">Đăng xuất</a>
                </li>
            @else    
                <img class="img_login" data-toggle="modal" data-target="#myModal" src="../upload/images_header/login.png" class="img_login">
            @endif
        </div>
         <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog" style="z-index: 99999">
                <!-- Modal content-->
                <div class="modal-content ">
                    <form class=" text-center" action="{{route('id_code')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}
                                    @endforeach
                                </div>
                            @endif

                            @if(Session::has('thanhcong'))
                                <div class="alert-success">{{Session::get('thanhcong')}}
                                </div>
                            @endif
                            <h3>Enter Id Code</h3>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="text" name="id_code" placeholder="id_code" class="form-control">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-warning">Submit</button> 
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                                
                            </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="z-index: 99999">
                <!-- Modal content-->
                <div class="modal-content ">
                    <form class=" text-center" action="{{route('login')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @if (session('message'))
                                <div class="alert alert-danger">
                                    {{session('message')}}
                                </div>
                            @endif
                        <h3 id="h3">Teacher login</h3>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="register">
                                    <div class="register-form">
                                        <div class="form-group">
                                            <input type="email" name="Email" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="Password" placeholder="password" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-warning">Submit</button> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
</body>
</html>
