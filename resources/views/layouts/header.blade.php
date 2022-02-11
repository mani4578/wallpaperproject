<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://wallpapers.com/wp-content/themes/wallpapers.com/src/Logo.svg" alt="Wallpapers.com"
            width="213" height="38" class="img-fluid">
        </a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div id="navbar" style="display: block" class="nav-ul">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"
                            style="border-bottom: 5px solid orange;">Top</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="border-bottom: 5px solid green;">
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

                <input class="form-control me-2 searchbar" type="search" placeholder="Search" aria-label="Search"
                    id="searchbar" style="display: none">
                <button class="btn btn-outline-success" type="button" id="search"><i class="fa fa-search"
                        aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
</nav>

