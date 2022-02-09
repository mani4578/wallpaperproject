<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WallHeaven</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
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
            <div id="navbar" style="display: block">
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
                  <li><hr class="dropdown-divider"></li>
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
                    {{-- BODY --}}
      <div class="container">
        <div class="search-form">
            <h1>
                <img src="https://wallpapers.com/wp-content/themes/wallpapers.com/src/logo-white.svg" height="80" width="446" class="img-fluid" alt="Wallpapers">
            </h1>
            <div class="input-group">
                <input type="text" class="form-control search-field search-autocomplete" id="big-search" placeholder="Search all Wallpapers" aria-label="Search all wallpapers">
                <svg xmlns="http://www.w3.org/2000/svg" class="search-results-button mr-2" width="36" height="36" viewBox="0 0 30 30">
                    <path d="M25.477 22.737L23.72 24.5l-5.7-5.708a10.406 10.406 0 111.65-1.872zM11 3a8 8 0 108 8 8 8 0 00-8-8z" fill="#2464c5" fill-rule="evenodd"></path>
                </svg>
            </div>
        </div>

        <main class="front">
            <div class="main-row">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>

                </div>
                 <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>

                </div>
                 <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>

                </div>
                 <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>

                </div>
                 <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>

                </div>
                 <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category__title a-tag">
                            <a href="" title="Animal Wallpaper" class="a-tag">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item a-tag" href="" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item a-tag" href="" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item a-tag" href="" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item a-tag" href="" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item a-tag" href="" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item a-tag" href="" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item a-tag" href="" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item a-tag" href="" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item a-tag" href="" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item a-tag" href="" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                </div>
                {{-- a tag end --}}
               <div>
                    <div class="section-title">
                        <span class="d-flex" style="align-items: center">
                            <img src="{{ asset('img/icons/trending.png') }}" alt="" style="height: 36px; width:36px">
                            <h4>Top Trending Wallpaper Categories</h4>
                        </span>
                        <span>
                            <a href="#" class="a-tag">View All Top Trending</a>
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="test2">MoneyHeist Wallpaper</div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <script>
        $("document").ready(function(){
            $('#search').click(function(){
                // console.log("In");
                $('#navbar').css("display", "none");
                $('#searchbar').css("display", "block");
            });
        });
    </script>
</body>
</html>
