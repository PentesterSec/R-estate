<!DOCTYPE html>
<html lang="en" class="theme_switchable">

<head>
    <meta charset="UTF-8">
    <title>show</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
    <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
    <link rel="stylesheet" href="{{ Url('show/show.css') }}">

</head>
@extends('template')
@section('nav')
@endsection
{{-- {{dd($data['image1'])}} --}}
<body>
    <!-- partial:index.partial.html -->
    <div class="options">
        <div class="option active"
            style="--optionBackground:url(public/img/88803b54c3a6646098dd88f395de07f5.jpg);">
            <div class="shadow"></div>
            <div class="label">
                <div class="icon">
                    <i class="fas fa-walking"></i>
                </div>
                <div class="info">
                    <div class="main"></div>
                    <div class="sub"></div>
                </div>
            </div>
        </div>
        <div class="option"
            style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
                <div class="icon">
                    <i class="fas fa-snowflake"></i>
                </div>
                <div class="info">
                    <div class="main"></div>
                    <div class="sub"></div>
                </div>
            </div>
        </div>
        <div class="option"
            style="--optionBackground:url(https://66.media.tumblr.com/5af3f8303456e376ceda1517553ba786/tumblr_o4986gakjh1qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
                <div class="icon">
                    <i class="fas fa-tree"></i>
                </div>
                <div class="info">
                    <div class="main"></div>
                    <div class="sub"></div>
                </div>
            </div>
        </div>
        <div class="option"
            style="--optionBackground:url(https://66.media.tumblr.com/5516a22e0cdacaa85311ec3f8fd1e9ef/tumblr_o45jwvdsL11qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
                <div class="icon">
                    <i class="fas fa-tint"></i>
                </div>
                <div class="info">
                    <div class="main"></div>
                    <div class="sub"></div>
                </div>
            </div>
        </div>
        <div class="option"
            style="--optionBackground:url(https://66.media.tumblr.com/f19901f50b79604839ca761cd6d74748/tumblr_o65rohhkQL1qho82wo1_1280.jpg);">
            <div class="shadow"></div>
            <div class="label">
                <div class="icon">
                    <i class="fas fa-sun"></i>
                </div>
                <div class="info">
                    <div class="main"></div>
                    <div class="sub"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex align-center">
            <div>
                <h1 class="align-center">Hello World</h1>
                <h3>{{ $data['price'] }}</h3>
            </div>
            
            <div>
                <p>{{ $data['desc'] }}</p>
            </div>
        </div>
    </div>




    {{-- <a href="http://victorofvalencia-blog.tumblr.com" target="_blank" class="credit">Photos from Victor of
        Valencia on tumblr</a> --}}



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://codepen.io/z-/pen/jvReOb/a8e37caf2a04602ea5815e5acedab458.js'></script>
    <script src={{ Url('show/show.js') }}></script>

</body>

</html>
