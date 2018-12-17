<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">       
        <link rel="stylesheet" href="{{ URL::asset('css/contact.css') }}" />
</head>

<body>
    
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
                <form>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control" placeholder="Full name">
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control" placeholder="Phone number">
                    </div>
                    <div class="col-md-8">
                        <textarea placeholder="Content" rows="6" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <a href="#" class="button_send">Send</a>
        </div>
    </div>

</body>
</html>
