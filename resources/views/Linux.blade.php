@extends('layout.app')


@section('content')



    <div class="jumbotron" style="background-image: url(../images/linuxBackground.png); background-size: 65%;">
        <div class="row">
            <div class="col-md-1">
            </div>

            <div class="col-md-4">
                <img src="{{url('images/igloo2.png ')}}" width="250px" hight="250px;">
            </div>
            <div class="col-md-5" style="text-align: center; padding: 80px 0;">
                <h1 class="basebig" >Welcome To Linux Igloo</h1>
            </div>
        </div>
    </div>



    <div class="jumbotron" style="background-image: url(../images/linuxBackground_Dark.png);background-size: 65%;">
        <div class="row">
            <div class="col-md-2">
            </div>

            <div class="col-md-6">
                <h1 class="baseQues" >Welcome To Linux Igloo</h1>
                <span class="basePara"> 
                    Have you ever heard the famous saying Windows Linux ? Well, hear it  or 
                    not the Linux moderators committee is here because of this saying to show students their there is a
                    whole world beyond Windows called the next our committee in open source knowledge presented in
                    Linux which is our main concern our committee b spreading knowledge to so it provides provides 
                    Linux workshops to students and to our group also we are keen to learn and learn so beside our
                    job in spreading knowledge everyday we are learning new Linux stuff
                </span>
            </div>
        </div>
    </div>




     <div class="jumbotron" style="background-image: url(../images/linuxBackground.png); background-size: 65%;">
        <div class="row">
            <div class="col-md-6">
            
                <div class="row">
                    <img src="{{url('images/linuxWorkshopIcon.png ')}}"   style="height: 200px; width: 50%;">
                </div>

                 <div class="row">
                    Setup Ubuntu Now !!
                </div>

                 <div class="row">
                    <button class="btn btn-primary" >Download</button>
                </div>

            </div>

            <div class="col-md-6" style="text-align:center">
                 <div class="row">
                    Have you heared abput our Linuz workshops
                </div>

                 <div class="row">
                    <button class="btn btn-primary">Find out more</button>
                </div>

                 <div class="row">                    
                    <img src="{{url('images/linuxPenguinColored.png ')}}"   style="height: 200px; width: 50%;">
                </div>
            </div>
        </div>
    </div>


@endsection