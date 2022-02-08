<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
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
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          </div>
        </div>
      </nav>

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
            <div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="category__title">
                            <a href="#" title="Animal Wallpaper">Animal</a>
                        </div>
                        <div class="category__list">
                            <a class="category__list__item" href="https://wallpapers.com/wolf" title="Wolf Wallpaper">Wolf</a>
                            <a class="category__list__item" href="https://wallpapers.com/dragon" title="Dragon Wallpaper">Dragon</a>
                            <a class="category__list__item" href="https://wallpapers.com/unicorn" title="Unicorn Wallpaper">Unicorn</a>
                            <a class="category__list__item" href="https://wallpapers.com/cat" title="Cat Wallpaper">Cat</a>
                            <a class="category__list__item" href="https://wallpapers.com/lion" title="Lion Wallpaper">Lion</a>
                            <a class="category__list__item" href="https://wallpapers.com/butterfly" title="Butterfly Wallpaper">Butterfly</a>
                            <a class="category__list__item" href="https://wallpapers.com/tiger" title="Tiger Wallpaper">Tiger</a>
                            <a class="category__list__item" href="https://wallpapers.com/fox" title="Fox Wallpaper">Fox</a>
                            <a class="category__list__item" href="https://wallpapers.com/elephant" title="Elephant Wallpaper">Elephant</a>
                            <a class="category__list__item" href="https://wallpapers.com/dog" title="Dog Wallpaper">Dog</a>
                        </div>
                    </div>
                <div class="col-md-3">
					<div class="category__title">
						<a href="https://wallpapers.com/anime" title="Anime Wallpaper">Anime</a>
					</div>
                    <div class="category__list">
                        <a class="category__list__item" href="https://wallpapers.com/naruto" title="Naruto Wallpaper">Naruto</a>
                        <a class="category__list__item" href="https://wallpapers.com/pokemon" title="Pokemon Wallpaper">Pokemon</a>
                        <a class="category__list__item" href="https://wallpapers.com/my-hero-academia" title="My Hero Academia Wallpaper">My Hero Academia</a>
                        <a class="category__list__item" href="https://wallpapers.com/demon-slayer" title="Demon Slayer Wallpaper">Demon Slayer</a>
                        <a class="category__list__item" href="https://wallpapers.com/tokyo-ghoul" title="Tokyo Ghoul Wallpaper">Tokyo Ghoul</a>
                        <a class="category__list__item" href="https://wallpapers.com/one-piece" title="One Piece Wallpaper">One Piece</a>
                        <a class="category__list__item" href="https://wallpapers.com/attack-on-titan" title="Attack On Titan Wallpaper">Attack On Titan</a>
                        <a class="category__list__item" href="https://wallpapers.com/cowboy-bebop" title="Cowboy Bebop Wallpaper">Cowboy Bebop</a>
                        <a class="category__list__item" href="https://wallpapers.com/fairy-tail" title="Fairy Tail Wallpaper">Fairy Tail</a>
                        <a class="category__list__item" href="https://wallpapers.com/one-punch-man" title="One Punch Man Wallpaper">One Punch Man</a>
                    </div>
                </div>
                <div class="col-md-3">
					<div class="category__title">
						<a href="https://wallpapers.com/background" title="Background Wallpaper">Background</a>
					</div>
                    <div class="category__list">
                        <a class="category__list__item" href="https://wallpapers.com/aesthetic" title="Aesthetic Wallpaper">Aesthetic</a>
                        <a class="category__list__item" href="https://wallpapers.com/minimalist" title="Minimalist Wallpaper">Minimalist</a>
                        <a class="category__list__item" href="https://wallpapers.com/live" title="Live Wallpaper">Live</a>
                        <a class="category__list__item" href="https://wallpapers.com/abstract" title="Abstract Wallpaper">Abstract</a>
                        <a class="category__list__item" href="https://wallpapers.com/textured" title="Textured Wallpaper">Textured</a>
                        <a class="category__list__item" href="https://wallpapers.com/brick" title="Brick Wallpaper">Brick</a>
                        <a class="category__list__item" href="https://wallpapers.com/vintage" title="Vintage Wallpaper">Vintage</a>
                        <a class="category__list__item" href="https://wallpapers.com/retro" title="Retro Wallpaper">Retro</a>
                        <a class="category__list__item" href="https://wallpapers.com/marble" title="Marble Wallpaper">Marble</a>
                        <a class="category__list__item" href="https://wallpapers.com/geometric" title="Geometric Wallpaper">Geometric</a>
                    </div>
                </div>
                <div class="col-md-3">
					<div class="category__title">
						<a href="https://wallpapers.com/brand" title="Brand Wallpaper">Brand</a>
					</div>
                    <div class="category__list">
                        <a class="category__list__item" href="https://wallpapers.com/windows" title="Windows Wallpaper">Windows</a>
                        <a class="category__list__item" href="https://wallpapers.com/google" title="Google Wallpaper">Google</a>
                        <a class="category__list__item" href="https://wallpapers.com/supreme" title="Supreme Wallpaper">Supreme</a>
                        <a class="category__list__item" href="https://wallpapers.com/animated-windows-10" title="Animated Windows 10 Wallpaper">Animated Windows 10</a>
                        <a class="category__list__item" href="https://wallpapers.com/samsung" title="Samsung Wallpaper">Samsung</a>
                        <a class="category__list__item" href="https://wallpapers.com/gucci" title="Gucci Wallpaper">Gucci</a>
                        <a class="category__list__item" href="https://wallpapers.com/nike" title="Nike Wallpaper">Nike</a>
                        <a class="category__list__item" href="https://wallpapers.com/microsoft" title="Microsoft Wallpaper">Microsoft</a>
                        <a class="category__list__item" href="https://wallpapers.com/apple" title="Apple Wallpaper">Apple</a>
                        <a class="category__list__item" href="https://wallpapers.com/msi" title="Msi Wallpaper">Msi</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
					<div class="category__title">
						<a href="https://wallpapers.com/car" title="Car Wallpaper">Car</a>
					</div>
                    <div class="category__list">
                        <a class="category__list__item" href="https://wallpapers.com/lamborghini" title="Lamborghini Wallpaper">Lamborghini</a>
                        <a class="category__list__item" href="https://wallpapers.com/bmw" title="Bmw Wallpaper">Bmw</a>
                        <a class="category__list__item" href="https://wallpapers.com/tesla" title="Tesla Wallpaper">Tesla</a>
                        <a class="category__list__item" href="https://wallpapers.com/mustang" title="Mustang Wallpaper">Mustang</a>
                        <a class="category__list__item" href="https://wallpapers.com/ferrari" title="Ferrari Wallpaper">Ferrari</a>
                        <a class="category__list__item" href="https://wallpapers.com/jdm" title="Jdm Wallpaper">Jdm</a>
                        <a class="category__list__item" href="https://wallpapers.com/jeep" title="Jeep Wallpaper">Jeep</a>
                        <a class="category__list__item" href="https://wallpapers.com/porsche" title="Porsche Wallpaper">Porsche</a>
                        <a class="category__list__item" href="https://wallpapers.com/mclaren" title="Mclaren Wallpaper">Mclaren</a>
                        <a class="category__list__item" href="https://wallpapers.com/audi" title="Audi Wallpaper">Audi</a>
                    </div>
                </div>
                <div class="col-md-3">
					<div class="category__title">
						<a href="https://wallpapers.com/cartoon" title="Cartoon Wallpaper">Cartoon</a>
					</div>
                    <div class="category__list">
                        <a class="category__list__item" href="https://wallpapers.com/baby-yoda" title="Baby Yoda Wallpaper">Baby Yoda</a>
                        <a class="category__list__item" href="https://wallpapers.com/spongebob" title="Spongebob Wallpaper">Spongebob</a>
                        <a class="category__list__item" href="https://wallpapers.com/kirby" title="Kirby Wallpaper">Kirby</a>
                        <a class="category__list__item" href="https://wallpapers.com/bt21" title="Bt21 Wallpaper">Bt21</a>
                        <a class="category__list__item" href="https://wallpapers.com/mermaid" title="Mermaid Wallpaper">Mermaid</a>
                        <a class="category__list__item" href="https://wallpapers.com/calvin-and-hobbes" title="Calvin And Hobbes Wallpaper">Calvin And Hobbes</a>
                        <a class="category__list__item" href="https://wallpapers.com/mickey-mouse" title="Mickey Mouse Wallpaper">Mickey Mouse</a>
                        <a class="category__list__item" href="https://wallpapers.com/pusheen" title="Pusheen Wallpaper">Pusheen</a>
                        <a class="category__list__item" href="https://wallpapers.com/totoro" title="Totoro Wallpaper">Totoro</a>
                        <a class="category__list__item" href="https://wallpapers.com/hello-kitty" title="Hello Kitty Wallpaper">Hello Kitty</a>
                    </div></div>
            </div>
        </main>
    </div>
</body>
</html>
