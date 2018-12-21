@extends('layouts.default')
@section('content')  
    <!-- google map -->
    <div class="container">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6447.846015675407!2d108.215734127389!3d16.070046404194773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421836be3ab181%3A0xb43602f6d63f7e3!2zS0ZDIE5ndXnhu4VuIFRo4buLIE1pbmggS2hhaQ!5e0!3m2!1sen!2s!4v1512531967226" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </div>
    </div>
    

    <!-- address -->
    <div class="container">
        <div class="row" id="address">
            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa fa-map-marker"></i>
                </div>
                <p class="text">
                    Son Tra, Phuoc My, Da Nang
                </p>
            </div>
            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa fa-map-marker"></i>
                </div>
                <p class="text">
                    094468475
                </p>
            </div>
            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa fa-map-marker"></i>
                </div>
                <p class="text">
                    MoonCactus.com
                </p>
            </div>
        </div>
       <div class="row">
            <h4>Send contact information</h4>
            <div class="row" style="margin-bottom: 25px;">
                @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{Session::get('flash_message')
                }}
                </div>
                @endif
                <form method="post" action="{{ route('contact.store') }}">
                    {{
                        csrf_field()
                    }}
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="name" placeholder="Full name">
                        @if ($errors ->has('name'))
                        <small class="form-text invalid-feedback">{{ $errors ->first('name') }}</small>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        @if ($errors ->has('email'))
                        <small class="form-text invalid-feedback">{{ $errors ->first('email') }}</small>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="phone" placeholder="Phone number">
                        @if ($errors ->has('phone'))
                        <small class="form-text invalid-feedback">{{ $errors ->first('phone') }}</small>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <textarea placeholder="Message" rows="6" name="messages" class="form-control"></textarea>
                        @if ($errors ->has('messages'))
                        <small class="form-text invalid-feedback">{{ $errors ->first('messages') }}</small>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <input type="submit" name="submit" class="button_send" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
