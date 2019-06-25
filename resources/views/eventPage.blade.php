
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OSC Events Corner</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/eventPageStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="main.js"></script>

    <script>
       function setDivHeight(){
        var height = $(window).height();
        $("welcomeDiv").css('height', height);
       }

       $(document).ready(function){
         setDivHeight();
         $(window).bind('resize', height);
       }
    </script>
</head>
<body >

<!--WELCOME DIV BEGINS HERE-->
<div id="welcomeDiv" class="clearfix">
<img src="Images/eventBackground.png" id="welcomeImg" class="col-md-12 col-sm-12 co-xs-12" >

@include('Components.Navbar')

<!--WELCOME DIV BEGINS HERE-->
<div id="welcomeDiv">
<img src="Images/LinuxAndEvents/eventBackground.png" id="welcomeImg" class="col-md-12 col-sm-12 co-xs-12" 

style="padding-left: 0px; padding-right: 0px;">
<div class="centered">
<h1 id="welcomeTxt">Welcome to OSC's Events Corner</h1>
</div>

<div class="centered" id="scroller">

<a href="#section1"><img src="Images/eventScroller_white.png" id ="eventScroller" class ="im"></a> 

<div class="centered">
<img src="Images/LinuxAndEvents/eventScroller.png" id="scroller"> 

</div>
</div>
<!--WELCOME DIV ENDS HERE-->


<!--EVENT'S DESCRIPTION BEGINS HERE-->
<div id="section1">
       <div id="eventDescription" >

       <div class="events_left" >

       <div class="left_imag">
         <div  class="left_line" >
         <img src="Images/LDP.png"  class="eventImgFloatLeft" alt="LDP"/>
        </div>
</div>
        <div class ="words_left">
        <h4>Linux Distribution Party (LDP)</h4>
         <p>
         Previously known as "Ubuntu Release Party", it is an event that is hosted twice per year. 
         The purpose of the event is to introduce students to Linux and free software by giving them 
         the chance to try several Linux distributions. They can also choose to have Linux installed 
         on their laptops alongside Windows or take the installation media on a flash drive.
        </p>
        </div>
        </div>
       
<div class="events_right" >
 <div class ="words_right">
    <h4>
    Workshops
    </h4>

<div id="eventDescription">
    <div class="events float-left">
    <img src="Images/LinuxAndEvents/copyright.png" class="eventImgFloatLeft">
    <h4>Ubuntu Release Party (URP)</h4>
    <p>
        It's a one day event that takes place twice a year since 
        we hold it to celebrate the release of a new version of Ubuntu 
        based distributions of Linux OS, those releases happen in April and October 
        of every year. In this event we tell FCIS students about the open source 
        concept’s most famous application "Linux" in general, and the new distributions 
        specifically, we display laptops with various distros 
        installed to give students the chance to try them and see the 
        difference between them first hand, as well as offer technical 
        support if they want them installed on their laptops.</p>
    <div>

    <div class="events float-right">
    <img src="Images/LinuxAndEvents/copyright.png" class="eventImgFloatRight">
    <h4>Workshops</h4>

    <p>
    An event in which we provide 3 workshops 
        Linux,Blender and Laravel The workshops’ instructors are students 
        with knowledge vast enough to put the applicants on the right path.
        The workshops are completely free, they start at level zero and build up 
        until participants have enough information to follow their own path. 
        We also follow up with them through our public groups, and facebook fan page.
    </p>
    </div>
    <div class="right_img">
    <div  class="right_line"> <img src="Images/workshops.png" class="eventImgFloatRight" alt="Workshops"/></div>
</div>
   
    </div>
    <div class="events_left" >

<div class="left_imag">
  <div  class="left_line" >
  <img src="Images/recruitment.png"  class="eventImgFloatLeft" alt="Recruitment"/>
 </div>
</div>
 <div class ="words_left">
 <h4> Recruitment</h4>
  <p>
An event in which we open our gate for the students to join OSC and 
learn various skills. We explain the structure of OSC (as on the inside 
we are 4 families containing 12 committees), and then our Human Resources 
place the applicants where they fit best, once in you can work everywhere 
and learn from everybody.
 </p>
 </div>
 </div>

       
 <div class="events_right" >
 <div class ="words_right">
    <h4>
    Sala5ana
    </h4>

    <div class="events float-left">
    <img src="Images/LinuxAndEvents/LinuxAndEvents/copyright.png" class="eventImgFloatLeft">
    <h4>Recruitment</h4>
    <p>
    An event in which we open our gate for the students to join OSC and 
    learn various skills. We explain the structure of OSC (as on the inside 
    we are 4 families containing 12 committees), and then our Human Resources 
    place the applicants where they fit best, once in you can work everywhere 
    and learn from everybody.
    </p>
    <div>

    <div class="events float-right">
    <img src="Images/LinuxAndEvents/LinuxAndEvents/copyright.png" class="eventImgFloatRight">
    <h4>Sala5ana</h4>

    <p>
       
    It's a one day event where we invite our fellow students 
    to work with us as if they were OSC members, each committee 
    displays their work and lets people join in, this way people 
    learn and have fun as the day is also themed; we have games and 
    activities related to each committee, participants play to earn 
    Mohsens (The OSC currency) and at the end of the day the one with 
    the most number of Mohsens gets a present. The purpose of this day 
    is that instead of telling them, we show them what we do, how we do it, 
    and what it means to be an OSCian.
    </p>
    </div>
    <div class="right_img">
    <div  class="  right_line"> <img src="Images/salakhana.png" class="eventImgFloatRight" alt="Salakhana"/></div>
</div>
    </div>  
</div>
<!--EVENT'S DESCRIPTION ENDS HERE-->


<!--GALLERY DIV BEGINS HERE-->


<!--   horizontal line ---->
<div class="flourish">
  <img  class="horizontalImage" src="Images/eventSep_blue.png" alt="" />

<div class="container" style="margin-left: 0px; margin-right: 0px;">
	<div class="row" style="height: fit-content;">
	 
				  <div class="col-md-3 col-sm-6 co-xs-6 gal-item">
							<div class="box">
						 <img src="Images/LinuxAndEvents/1.JPG" class="img-ht img-fluid rounded">
							</div>
					</div>
	
	  
				 <div class="col-md-6 col-sm-6 co-xs-6 gal-item">
				  <div class="box">
					<img src="Images/LinuxAndEvents/9.JPG" class="img-ht img-fluid rounded">
                  </div>
                </div>

				<div class="col-md-3 col-sm-6 co-xs-12 gal-item">
				 <div class="box">
					<img src="Images/LinuxAndEvents/19_cropped.JPG" class="img-ht img-fluid rounded">
				</div>
				</div>
            
      </div>

      <div class="row">

      <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
				  <div class="box">
					<img src="Images/LinuxAndEvents/33.JPG" class="img-ht img-fluid rounded">
                  </div>
                </div>

				<div class="col-md-6 col-sm-6 co-xs-12 gal-item">
				 <div class="box">
					<img src="Images/LinuxAndEvents/15.JPG" class="img-ht img-fluid rounded">
				</div>
				</div>
      </div>

           <!--<div class="col-md-4 col-sm-6 co-xs-12 gal-item">
			   <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-25">
				<div class="box">
					<img src="http://fakeimg.pl/748x177/" class="img-ht img-fluid rounded">
				</div>
				</div>

				  <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-75">
				   <div class="box">
					<img src="http://fakeimg.pl/748x177/" class="img-ht img-fluid rounded">
				</div>
				</div>
            </div>-->
	<br/>

</div>

<div class="container">

<div class="col-md-12">
<div class="row ">
    <div class="gal">
    <img class="galleryImages"  src="Images/4.jpg"  alt="">
    <img class="galleryImages"src="Images/1.JPG" alt="">
    <img class="galleryImages"src="Images/9.jpg"alt=""> 
    <img class="galleryImages"src="Images/15.jpg"  alt="">
    <img class="galleryImages"src="Images/26_cropped.jpg" alt="">
    <img class="galleryImages"src="Images/19_cropped.jpg"  alt="">
    </div>
    
</div>
</div>


</div>

<!--WGALLERY DIV ENDS HERE-->

</body>
</html>

@extends('Components.Footer')  

