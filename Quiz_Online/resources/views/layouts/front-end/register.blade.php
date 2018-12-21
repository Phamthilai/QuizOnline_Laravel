@extends('layouts.default')
@section('content') 
    <ul>
    <li><a href="#" data-toggle="modal" data-target="#myModal3">Register</a></li>
</ul>
<div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog" style="z-index: 99999">
        <!-- Modal content-->
            <div class="modal-content ">
            <form class=" text-center" action="{{route('register')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <h3 class="h3">REGISTER</h3>
                <div class="col-md-8">
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
                    <div class="register">
                        
                        <div class="register-form">
                            
                        <div class="text_filed">
                            <input type="text" name="fullname" placeholder="Full name" class="form-control text">
                        </div>
                        <div class="text_filed">
                            <input type="Email" name="email" placeholder="Email" class="form-control text">
                        </div>
                        <div class="text_filed">
                            <input type="text" name="phone" placeholder="Phone" class="form-control text">
                        </div>
                        <div class="text_filed">
                            <input type="text" name="school" placeholder="School" class="form-control text">
                        </div>
                        <div class="link_register">
                            <button type="submit" class="btn btn-warning btn-size">Submit</button> 
                        </div>
                        </div>
                                        
                    </div>
                </div>
                
            </form>
                
            </div>

        </div>
</div>
@endsection
