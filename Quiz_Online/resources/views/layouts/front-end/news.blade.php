
@extends('layouts.default')
@section('content')

<div class="container">
  <!--   Show banner of page News with background-image in CSS -->
  <div class="row carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"></div>
        <div class="hero">
          <hgroup>
              <h1>Graduated from PNV 2017</h1>        
              <h3>We are happy for all student PNV2017</h3>
          </hgroup>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"></div>
        <div class="hero">        
          <hgroup>
              <h1>PNV20 trevel</h1>        
              <h3>Go to around Danang city</h3>
          </hgroup>       
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"></div>
        <div class="hero">        
          <hgroup>
              <h1>Tet holiday 22018</h1>        
              <h3>Make party for Tet holiday</h3>
          </hgroup>
        </div>
      </div>
    </div> 
  </div>
  <div class="row">
    @foreach($news as $new)
      <div class="col-sm-4 col-md-4 col-lg-4 mt-4">
          <div class="news news-inverse news-info">
              <img class="news-img-top" src="storage/{{$new->image}}">
              <div class="news-block">
                <h4 class="news-title">{{$new->title}}</h4>
                  <div class="news-text">
                    Tawshif is a web designer living in Bangladesh.
                  </div>
                  <p class="news-block">
                  {!!$new->description!!}
                  </p>
              </div>
              <div class="news-footer">
              <!-- Buton model -->
                <button class="btn btn-sm"><a onclick="loadDetails({{$new->id}})">Read more</a></button>                   
              </div>
          </div>
      </div>
    @endforeach
  </div>

  <div id="new-details"></div>

</div>

@endsection

