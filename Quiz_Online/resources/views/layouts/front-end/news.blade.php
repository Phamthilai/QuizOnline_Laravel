<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- link online -->
<link rel="stylesheet" type="text/css" href="{{asset('css/news.css')}}">
<!-- link css at public of news -->

<!-- Show News of Passerellesnumeriques -->
<div class="container">
  <!--   Show banner of page News with background-image in CSS -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-banner-news">
            <h1 class="news-titles">News</h1>
        </div>
    </div>
    <!-- Show information of News such image, sort text and button "read more" plus form model -->
    <div class="row">
        @foreach($news as $new)
            <div class="col-sm-4 col-md-4 col-lg-4 mt-4">
                <div class="news news-inverse news-info">
                    <img class="news-img-top" src="upload/images_news/{{$new->image}}">
                    <div class="news-block">
                       
                        <h4 class="news-title">{{$new->title}}</h4>
                        <div class="news-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                        <p class="news-block">
                        {{$new->description}}
                        </p>
                    </div>
                    <div class="news-footer">
                    <!-- Buton model -->
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal{{$new->id}}">Read more</button>
                    
                    <!-- Modal -->
                        <div class="modal fade" id="myModal{{$new->id}}" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-titles">{{$new->title}}</h4>
                                    </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-6">
                                            <img class="detail-news" src="upload/images_news/{{$new->image}}">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-6 detail-news">
                                            {{$new->brief}}
                                            
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finish model -->
                        <!-- finish one div -->
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</div>