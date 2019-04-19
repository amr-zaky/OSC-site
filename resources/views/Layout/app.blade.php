<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style>

    h1 { font-family: Raleway; font-size: 24px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 26.4px; } h3 { font-family: Raleway; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 15.4px; } p { font-family: Raleway; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 20px; } blockquote { font-family: Raleway; font-size: 21px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 30px; } pre { font-family: Raleway; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 400; line-height: 18.5714px; }
    @font-face {
        font-family:'Raleway SemiBold', sans-serif;
        src: url('{{ public_path('fonts/OptimusPrinceps.tff') }}');
    }

    .baseNavbarText{
        color: #000099;
        font-family:'Raleway SemiBold', sans-serif;
        font-size:17ph;
    }

    .BaseWelcome{
        color: #000099;
        font-family:'Raleway SemiBold', sans-serif;
        font-size: 41pt;
    }

    .baseQues { 
        color:#202020; 
        font-family:'Raleway SemiBold', sans-serif;
        font-size: 35pt; 
        padding-bottom: 30px;
    }

    .basePara { 
        color:#606060; 
        font-family:'Raleway SemiBold', sans-serif;
        font-size: 20pt; 
        inline-size: -1 %;
        line-height: normal;

        /* #606060 Font: Raleway SemiBold 25 pt */
    }

    .baseTextCenter{
        text-align:center;
        color: #000099 ;        
        font-family:'Raleway SemiBold', sans-serif;
        font-size:40pt;
    }



    .baseLinks{
        color:#ffffff ;
        font-family:'Raleway SemiBold', sans-serif;
        font-size:  35pt;
        padding: 40px;
    }

    .baseSmallerText{
        color:#ff5722;
        font-family:'Raleway SemiBold', sans-serif;
        font-size: 25pt;
        padding: 20px;
    }

    .baseLink{
        color: #ffffff;
        font-family:'Raleway SemiBold', sans-serif;
        font-size: 25pt;
        padding: 40px;
    }

    .basebtn{
        border-radius: 15px;
        background: #000099;
        padding: 10px;
        width: 200px; 
        font-size: 16pt;
    }

    .baseCenter{
        padding: 60px;
        background-color: transparent; 
        background: rgba(192,192,192, 0.4);
    }
    
    .basefooter{
        background-color: #202020;
    }


    .btns{
        color:#ffffff;
        background-color: #000099;
    }

    .basefooterText{
        color:#ffffff;
    }

    .hl{
        margin-left: 20%;
        margin-right: 20%;
        border-bottom: 0.5px solid whitesmoke;
    }

    .vl {
        margin-top: 20px;
        margin-bottom: 20px;
        border-left: 1px solid whitesmoke;
        height: 600px;
    }

    .Orangebtn{
        border-radius: 15px;
        background: #ff5722;
        padding: 10px;
        width: 200px; 
        font-size: 16pt;
    }

    .footerBottom {
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
    }
    
    .footerUpper{
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #202020
        color: white;
        text-align: center;
    }

    .basepadding{
        padding-left: 10%;
    }

    .baseInput  {
        margin-top: 10px;
        width: 200%;
        background-color: #202020;
        color: white;
        border: none;
        padding-top: 20px;
        border-bottom: 2px solid whitesmoke;;
    }
</style>

    <title>Document</title>zz

</head>

<body>

    @include('Components.Navbar')


    @yield('content')


    @include('Components.Footer')

    @include('Components.BottomFooter')


</body>
</html>