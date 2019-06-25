<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to OSC - Open Source Community</title>
    <!-- Title Icon-->
   
    <!--End Fonts -->

    <!--Start Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/basefont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/headerFooter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/eventPageStyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/committesPage/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/committesPage/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/linuxWorkshop/linuxWorkshopStyle.css') }}">

</head>
<body>
<nav  class="navbar navbar-expand-lg bg ">
        <div class="container" style="margin-left: 61px;">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse baseNavbarText " id="navbarsExample07">
            
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="#" >Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Committees<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Highboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sponsers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item" style="padding-left: 100px;" >
                    <img src="{{url('images/homePage/OSCLogo.png ')}}" width="30px" hight="30px;">
                </li>
            </ul>

            <div class="collapse navbar-collapse" >
                <ul class="navbar-nav ml-md-auto baseNavbarText">
                <li class="nav-item active">
                    <a class="nav-link"  href="#">Workshops <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link ">Events</a>
                </li>
            </div>
        </div>
    </div>
</nav>