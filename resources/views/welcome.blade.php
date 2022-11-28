<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Document</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- styles -->
        <link rel="stylesheet" href="{{url('/css/login.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="main">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="#">My Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-md-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Calendar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                    <div class="avatar">
                        <img src="{{url('/pngwing.png')}}" alt="">
                    </div>
                </div>
            </div>
        </nav>

            <div class="login_content container d-flex align-items-center">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" class="login_form">
                        <div class="login_input">
                            <label for="email">Email Address</label>
                            <input id="email" type="text" placeholder="Email Address">
                        </div>
                        <div class="login_input">
                            <label for="password" >Password</label>
                            <input id="password" type="text" placeholder="Password">
                        </div>
                        <input class="btn_submit" type="submit" value="Login">
                        </form>                        
                    </div>
                    <div class="col-md-6">
                        <div class="landing_image">
                            <img src="{{url('/pexels-roberto-nickson-2559941.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
