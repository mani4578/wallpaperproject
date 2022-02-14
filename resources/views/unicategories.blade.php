@extends('index')
@section('css')
@endsection

@section('content')

    <div class="container">
        <nav style="--bs-breadcrumb-divider: '.';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-style">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category Name</li>
        </ol>
        </nav>
    </div>

     {{-- -----------------BODY----------------- --}}
     <div class="container">
        <h2 style="font-size: 36px; font-weight: bold; margin: 20px 0 5px 0;display: flex;">
           Category Name Wallpapers
        </h2>
        <br>
        <h3 style="font-size: 18px">
           Check out our huge collection of high-quality Top Trending wallpapers that you don’t want to miss. With so many wallpapers to choose from, you'll definitely find something you like. Take a look and download our free wallpapers to your desktop, mobile phone or tablet today!
        </h3>

            <!-- Gallery -->
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

            <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
        </div>
    </div>
    <!-- Gallery -->
     </div>


@endsection

@section('js')
@endsection
