<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/home.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
      <title>Categories</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container">
            <img src="https://wallpapers.com/wp-content/themes/wallpapers.com/src/Logo.svg" alt="Wallpapers.com" width="213" height="38" class="img-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <div id="navbar" style="display: block" class="nav-ul">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="border-bottom: 5px solid orange;">Top</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="border-bottom: 5px solid red;">New</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="border-bottom: 5px solid blue;">Cool</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="border-bottom: 5px solid lightseagreen;">HD</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#" style="border-bottom: 5px solid lightgreen;">Mobile</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-bottom: 5px solid green;">
                        Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">Action</a></li>
                           <li><a class="dropdown-item" href="#">Another action</a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                     </li>
               </div>
               </ul>
               <form class="d-flex">
                  <input class="form-control me-2 searchbar" type="search" placeholder="Search" aria-label="Search" id="searchbar" style="display: none" >
                  <button class="btn btn-outline-success" type="submit" id="search"><i class="fa fa-search" aria-hidden="true"></i></button>
               </form>
            </div>
         </div>
      </nav>
      <div class="container">
         <nav style="--bs-breadcrumb-divider: '.';" aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-style">Home</a></li>
               <li class="breadcrumb-item" aria-current="page"><a href="#">Library</a></li>
            </ol>
         </nav>
      </div>
      {{-- -----------------BODY----------------- --}}
      <div class="container">
         <h2 style="font-size: 36px; font-weight: bold; margin: 20px 0 5px 0;display: flex;">
            Top Wallpapers
         </h2>
         <br>
         <h3 style="font-size: 18px">
            Check out our huge collection of high-quality Top Trending wallpapers that you don’t want to miss. With so many wallpapers to choose from, you'll definitely find something you like. Take a look and download our free wallpapers to your desktop, mobile phone or tablet today!
         </h3>
         {{-- ---------------CARDS AREA--------------- --}}
         {{-- ---------------CARDS AREA END--------------- --}}
      </div>
      <div class="container mt-5">
         <div class="row">
            <div class="col-lg-3 col-sm-12 col-md-6 footer-section-column">
               <div class="category__title d-flex mt-4 mb-3" style="justify-content: space-between; font-size: 16px;">
                  Related
               </div>
               <div class="section-menu collapse show" id="col1">
                  <ul class="non-list" style="align-items: left">
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 footer-section-column">
               <div class="category__title d-flex mt-4 mb-3" style="justify-content: space-between; font-size: 16px;">
                  Related
               </div>
               <div class="section-menu collapse show" id="col1">
                  <ul class="non-list" style="align-items: left">
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 footer-section-column">
               <div class="category__title d-flex mt-4 mb-3" style="justify-content: space-between; font-size: 16px;">
                  Related
               </div>
               <div class="section-menu collapse show" id="col1">
                  <ul class="non-list" style="align-items: left">
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6 footer-section-column">
               <div class="category__title d-flex mt-4 mb-3" style="justify-content: space-between; font-size: 16px;">
                  Related
               </div>
               <div class="section-menu collapse show" id="col1">
                  <ul class="non-list" style="align-items: left">
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                     <li class="menu-item"><a href="" title="Mountain Wallpaper" class="a-tag">Mountain</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      {{-- ------------------JS Area-------------------- --}}
      <script>
         $("document").ready(function(){
             $('#search').click(function(){
                 // console.log("In");
                $('#navbar').toggle();
                $('#searchbar').toggle();

             });
         });
      </script>
   </body>
</html>
