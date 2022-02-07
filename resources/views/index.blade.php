<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Bootstrap Site</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" id="css-main" href="css/oneui.min.css">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
   </head>
   <body>
    <nav class="nv">
        <div class="wrapper">
          <div class="logo logo1"><a href="#">LOGO</a></div>
          <input type="radio" name="slider" id="menu-btn">
          <input type="radio" name="slider" id="close-btn">
          <ul class="nav-links">
            <label for="close-btn" class="stylework close-btn"><i class="fas fa-times"></i></label>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li>
              <a href="#" class="desktop-item">Dropdown Menu</a>
              <input type="checkbox" id="showDrop">
              <label for="showDrop" class="mobile-item">Dropdown Menu</label>
              <ul class="drop-menu">
                <li><a href="#">Drop menu 1</a></li>
                <li><a href="#">Drop menu 2</a></li>
                <li><a href="#">Drop menu 3</a></li>
                <li><a href="#">Drop menu 4</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="desktop-item">Mega Menu</a>
              <input type="checkbox" id="showMega">
              <label for="showMega" class="mobile-item">Mega Menu</label>
              <div class="mega-box">
                <div class="content">
                  <div class="row">
                    <img class="imag" src="assets/img.jpg" alt="">
                  </div>
                  <div class="row">
                    <header>Design Services</header>
                    <ul class="mega-links">
                      <li><a href="#">Graphics</a></li>
                      <li><a href="#">Vectors</a></li>
                      <li><a href="#">Business cards</a></li>
                      <li><a href="#">Custom logo</a></li>
                    </ul>
                  </div>
                  <div class="row">
                    <header>Email Services</header>
                    <ul class="mega-links">
                      <li><a href="#">Personal Email</a></li>
                      <li><a href="#">Business Email</a></li>
                      <li><a href="#">Mobile Email</a></li>
                      <li><a href="#">Web Marketing</a></li>
                    </ul>
                  </div>
                  <div class="row">
                    <header>Security services</header>
                    <ul class="mega-links">
                      <li><a href="#">Site Seal</a></li>
                      <li><a href="#">VPS Hosting</a></li>
                      <li><a href="#">Privacy Seal</a></li>
                      <li><a href="#">Website design</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li><a href="#">Feedback</a></li>
            <div class="sea">
                <div class="input-group" id="search_bar">
                  <input type="radio" name="slider" id="s-btn-click" class="rd">
                  <label for="s-btn-click" class="btn s-btn-close"><i class="si si-close"></i></label>
                  <input type="text" for="s-btn-click" class="form-control s-btn-close" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                  <label for="s-btn-click" class="btn s-btn-close"><i class="fa fa-arrow-right"></i></label>
                </div>
              <div class="input-group" id="search_btn">
              <input type="radio" name="slider" id="s-btn-click1" class="rd">
              <label for="s-btn-click1" class="btn s-btn-open"><i class="fa fa-search"></i></label>
              </div>
            </div>
        </nav>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>
