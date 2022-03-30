<!DOCTYPE html>
<html lang="en" class="theme_switchable">
<head>
  <meta charset="UTF-8">
  <title>Show</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
<link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700'><link rel="stylesheet"  href="{{Url('show/show.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<form method="POST" action="{{route('properities.show')}}" enctype="multipart/form-data" class="form" id="form1">				
      
   @csrf
@foreach ($data as $value)
<div class="options">
   <div class="option active" style="--optionBackground:url(https://66.media.tumblr.com/6fb397d822f4f9f4596dff2085b18f2e/tumblr_nzsvb4p6xS1qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-walking"></i>
         </div>
         <div class="info">
            <div class="main">Property Name</div>
            <div class="sub">Appartment</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-snowflake"></i>
         </div>
         <div class="info">
            <div class="main">Address</div>
            <div class="sub">Aswan</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/5af3f8303456e376ceda1517553ba786/tumblr_o4986gakjh1qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-tree"></i>
         </div>
         <div class="info">
            <div class="main">Price</div>
            <div class="sub">$10000</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/5516a22e0cdacaa85311ec3f8fd1e9ef/tumblr_o45jwvdsL11qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-tint"></i>
         </div>
         <div class="info">
            <div class="main">Property type</div>
            <div class="sub">Flat</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/f19901f50b79604839ca761cd6d74748/tumblr_o65rohhkQL1qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-sun"></i>
         </div>
         <div class="info">
            <div class="main">Description</div>
            <div class="sub">
               <p>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
               Labore repellendus tempora animi ipsa, 
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   {{-- <h1>{{$data['name']}}</h1>
   <h3>{{$data['address']}}</h3>
   <h5>{{$data['price']}}</h5>
   <p>{{$data['desc']}}</p> --}}
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quo nihil reprehenderit
       cupiditate debitis recusandae architecto ut velit sint? In veniam dicta 
      recusandae, porro distinctio sequi excepturi labore fugit dignissimos?</p>

</div>
@endforeach
</form>

{{-- <a href="http://victorofvalencia-blog.tumblr.com" target="_blank" class="credit">Photos from Victor of Valencia on tumblr</a> --}}
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://codepen.io/z-/pen/jvReOb/a8e37caf2a04602ea5815e5acedab458.js'></script><script  src="{{ asset('show.show.js')}}"></script>

</body>
</html>
