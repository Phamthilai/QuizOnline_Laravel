<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/register.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    
<ul>
    <li><a href="#" data-toggle="modal" data-target="#myModal">Register</a></li>
</ul>
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content ">
            <form class=" text-center">
                            <h3 class="h3">REGISTER</h3>
                <div class="col-md-8">

                    <div class="register">
                        
                        <div class="register-form">
                            
                        <div class="text_filed">
                            <input type="text" name="" placeholder="Full name" class="form-control text">
                        </div>
                        <div class="text_filed">
                            <input type="Email" name="" placeholder="Email" class="form-control text">
                        </div>
                        <div class="text_filed">
                            <input type="text" name="" placeholder="Phone" class="form-control text">
                        </div>
                        <div class="text_filed">
                            <input type="text" name="" placeholder="School" class="form-control text">
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

</body>
</html>
