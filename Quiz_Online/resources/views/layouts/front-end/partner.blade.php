<!DOCTYPE html>
<html>
<head>
    <title></title>
    <base href="{{asset('')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/partner.css')}}">
<script src="{{asset('js/partner.js')}}"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<!-- show information of partner such as logo company follow contry such as Vietnam, Cambodia, Philippines... -->
 <div class="container">
  <!--   Show banner of page Partners with background-image in CSS -->
        <div class="row">
            <div class=" img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12 img-banner-partner">   
                <h1 class="gallery-title">Our Partners</h1>
            </div>
        </div>
    <!-- Show gallery follow contry -->
        <div class="row">

            <div align="center">
                @foreach($areas as $areas)
                    <button class="btn btn-default filter-button"><a href="{{route('parner', $areas->id)}}">{{$areas->name_areas}}</a></button>
                @endforeach

            </div>
        </div>

            <!-- Show Logo of company partner -->
        <div class="row">
            @foreach($partner as $partners)
                <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <img src="upload/images_partner/{{$partners->image_partners}}" class="img-responsive img">
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
