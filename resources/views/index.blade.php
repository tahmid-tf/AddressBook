@extends('layouts.app')

    @section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Our Restaurant</title>

    <!--- Google fonts Link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Texturina&display=swap" rel="stylesheet">

    <!--- Our Custom CSS Page Link -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
        .big_box{
            height:470px;
            width:700px;
            background-color: #bfbec2;
            margin: 0px auto;
            margin-top: 40px;
        }
        .text_style{
            text-align: center;
            padding-top: 30px;
            font-size: 40px;
            color: green;
            letter-spacing: 0.1rem;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bold;
        }
    </style>
</head>


<body>

<div class="conatiner">
    <div class="row">

        <div class="big_box">

            <p class="text_style"> Welcome to our page! </p>

            <button class="btn">
                <a href="{{route('user')}}"> CLICK HERE TO PROCEED </a>
            </button>

        </div>

    </div>
</div>

</body>
</html>

@endsection
