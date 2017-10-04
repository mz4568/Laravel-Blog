<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/font.css" rel="stylesheet" type="text/css">

       
    </head>
    <body>

         @include('partials._message')
        <div class="flex-center position-ref full-height">
            
                <div class="top-right links">
                    <a href="{{url('login')}}">Login</a>
                    <a href="{{url('register')}}">Register</a>
                </div>
            

            <div class="content">
                <div class="title m-b-md">
                   Monir Hossain
                </div>
            </div>
        </div>
    </body>
</html>
