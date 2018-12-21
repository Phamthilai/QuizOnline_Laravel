@extends('layouts.default')
@section('content')

    <div class="block-cart">
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{Session::get('flash_message')}}
            </div>
        @endif
        <div class="container">
            <div class="cart-content">
                <h1 class="text-center">Create topic</h1>
                <form method="post" action="{{ route('topic.store') }}" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class=" table-cart">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="id_sub" class="col-sm-2 control-label">Subject</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="id_subject">
                                            @foreach($subject as $subject)
                                            <option class="form-control" value="{{ $subject->id }}">{{ $subject->name_subject }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Name topic</label>
                                        <div class="col-md-10">
                                            <input type="text" name="name" id="name" required class="form-control">
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="quantity" class="col-md-2 control-label">Quantity</label>
                                        <div class="col-md-10">
                                            <input type="text" name="quantity" id="quantity" required class="form-control">
                                                @if ($errors ->has('quantity'))
                                                <small class="form-text invalid-feedback">{{ $errors ->first('quantity') }}</small>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="duration" class="col-md-2 control-label">Duration</label>
                                        <div class="col-md-10">
                                            <input type="text" id="duration" name="duration" required class="form-control">
                                        @if ($errors ->has('duration'))
                                            <small class="form-text invalid-feedback">{{ $errors ->first('duration') }}</small>
                                        @endif
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-warning ">Create</button>
                                        </div>
                                      </div>

                                

                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- #content -->
@endsection
