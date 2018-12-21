<!-- show information of partner such as logo company follow contry such as Vietnam, Cambodia, Philippines... -->
@extends('layouts.default')
@section('content')
  <div class="container">
  <!--   Show banner of page Partners with background-image in CSS -->
    <div class="row carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-4"></div>
          <div class="hero">
            <hgroup>
                <h1>Partners</h1>        
                <h3>Get start your next awesome project</h3>
            </hgroup>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-5"></div>
          <div class="hero">        
            <hgroup>
                <h1>They Support us a lot.</h1>        
                <h3>Get start your next awesome project</h3>
            </hgroup>       

          </div>
        </div>
        <div class="item slides">
          <div class="slide-6"></div>
          <div class="hero">        
            <hgroup>
                <h1>We are amazing</h1>        
                <h3>Get start your next awesome project</h3>
            </hgroup>
          </div>
        </div>
      </div> 
    </div>
    <!-- Show gallery follow contry -->
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-4">
            @foreach($areas as $areas)
                <button class="btn-defaults filter-button"><a class="a" href="{{route('parner', $areas->id)}}">{{$areas->name_areas}}</a></button>
            @endforeach
        </div>
    </div>
    <!-- Show Logo of company partner -->
    <div class="row">
        @foreach($partner as $partners)
            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <img src="storage/{{$partners->image_partners}}" class="img-responsive img">
            </div>
        @endforeach
    </div>
  </div>
@endsection

