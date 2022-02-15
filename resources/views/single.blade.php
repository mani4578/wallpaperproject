@extends('index')
@section('css')
@endsection

@section('content')

<div class="container">
    <nav style="--bs-breadcrumb-divider: '.';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="breadcrumb-style">Home</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('unicat') }}">Category Name</a></li>
        <li class="breadcrumb-item active" aria-current="page" >Wallpaper Name</li>
    </ol>
    </nav>

    <h1>Wallpaper Name</h1>
    <p>wallpaper description</p>
    <div class="row">
        <div class="col col-lg-9 col-sm-12 col-md-6">
            <img alt="Various Currencies Money wallpaper."  class="post-image lozad" src="{{ asset('img/sample.jpg') }}" width="900" height="688" data-loaded="true">
        </div>
        <div class="col col-lg-3 col-sm-12 col-md-6" style="padding: 2rem 1rem; border: 1px solid #f0f0f0;">
            <div class="user-block d-none d-md-flex">
                <div class="avatar">&nbsp;</div>
                <div>
                    sminihan                                    <div class="nickname">
                        @                                    </div>
                </div>
            </div>
            <div class="mt-5">
                Share this Wallpaper:
            </div>
            <div class="mt-3 d-flex justify-content-between">
                <a class="share-btn share-fb icon-md rounded-circle" data-event-category="Share Wallpaper" data-event-label="Facebook Share" href="https://www.facebook.com/sharer?u=https://wallpapers.com/wallpapers/various-currencies-money-145b7wkxd81ko9fd.html" title="Share on Facebook" target="_blank" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <title id="facebookIcontitle">Various Currencies Money | Wallpapers.com</title>
                        <desc id="facebookIconDesc">Share wallpaper using Facebook</desc>
                        <path id="fb" d="M11.325,18.011V10.245h2.617l0.392-3.027H11.324V5.286a1.257,1.257,0,0,1,1.5-1.473h1.609V1.106A21.63,21.63,0,0,0,12.093.988a3.653,3.653,0,0,0-3.908,4V7.22H5.561v3.027H8.184v7.763h3.141Z" fill="#fff"></path>
                    </svg>
                </a>
                <a class="share-btn share-tw rounded-circle" data-event-category="Share Wallpaper" data-event-label="Twitter Share" href="https://twitter.com/share?url=https://wallpapers.com/wallpapers/various-currencies-money-145b7wkxd81ko9fd.html&amp;text=Various+Currencies+Money&amp;hashtags=wallpaper,Money" title="Share on Twitter" target="_blank" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <title id="twitterIcontitle">Various Currencies Money | Wallpapers.com</title>
                        <desc id="twitterIconDesc">Share wallpaper using Twitter</desc>
                        <path id="tw" d="M16.293,6.922S16.411,14,9.636,15.88c-1.515.4-5.44,0.452-7.133-1.178,0.149-.069,2.912.393,4.28-1.179a3.331,3.331,0,0,1-2.616-2.357,1.713,1.713,0,0,0,1.189.236A3.753,3.753,0,0,1,2.978,8.1,2.007,2.007,0,0,0,4.4,8.572C4.079,8.149,2.324,7.345,3.454,4.329c0.179,0.078,2.436,3.222,6.42,3.3a3.138,3.138,0,0,1,1.427-3.3,3.36,3.36,0,0,1,4.042.472,3.616,3.616,0,0,0,1.9-.943,2.3,2.3,0,0,1-.951,1.886,5.263,5.263,0,0,0,1.189-.472,0.737,0.737,0,0,1-.238.707A9.663,9.663,0,0,1,16.293,6.922Z" fill="#fff"></path>
                    </svg>
                </a>
                <a class="share-btn share-pt rounded-circle" data-event-category="Share Wallpaper" data-event-label="Pinterest Share" href="https://pinterest.com/pin/create/button/?url=https://wallpapers.com/wallpapers/various-currencies-money-145b7wkxd81ko9fd.html" title="Share on Pinterest" target="_blank" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <title id="pinterestIcontitle">Various Currencies Money | Wallpapers.com</title>
                        <desc id="pinterestIconDesc">Share wallpaper using Pinterest</desc>
                        <path id="Pin" class="cls-1" d="M10.379,2.141C5.8,2.141,3.5,5.383,3.5,8.087a3.655,3.655,0,0,0,1.972,3.635,0.332,0.332,0,0,0,.482-0.238C6,11.317,6.1,10.9,6.148,10.72a0.459,0.459,0,0,0-.139-0.53,2.723,2.723,0,0,1-.636-1.867,4.535,4.535,0,0,1,4.742-4.558c2.586,0,4.007,1.562,4.007,3.647,0,2.745-1.229,5.061-3.053,5.061a1.478,1.478,0,0,1-1.52-1.834,20.22,20.22,0,0,0,.85-3.378A1.28,1.28,0,0,0,9.1,5.833c-1.03,0-1.857,1.054-1.857,2.464A3.633,3.633,0,0,0,7.549,9.8L6.31,14.989A10.527,10.527,0,0,0,6.282,18.6a0.128,0.128,0,0,0,.229.055,10.118,10.118,0,0,0,1.738-3.115c0.118-.423.677-2.616,0.677-2.616a2.769,2.769,0,0,0,2.352,1.186c3.1,0,5.2-2.789,5.2-6.522C16.475,4.77,14.056,2.141,10.379,2.141Z" fill="#fff"></path>
                    </svg>
                </a>
                <a class="share-btn share-wa rounded-circle" data-event-category="Share Wallpaper" data-event-label="WhatsApp Share" href="whatsapp://send?text=https://wallpapers.com/wallpapers/various-currencies-money-145b7wkxd81ko9fd.html" title="Share on WhatsApp" target="_blank" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <title id="whatsappIcontitle">Various Currencies Money | Wallpapers.com</title>
                        <desc id="whatsappIconDesc">Share wallpaper using WhatsApp</desc>
                        <path id="Whatsapp" d="M9.664,0.9A8.789,8.789,0,0,0,.843,9.652a8.676,8.676,0,0,0,1.265,4.523l-1.591,4.7L5.4,17.321A8.835,8.835,0,0,0,18.483,9.654,8.789,8.789,0,0,0,9.664.9Zm0,16.047a7.33,7.33,0,0,1-4.041-1.205l-2.82.9L3.72,13.928a7.211,7.211,0,0,1-1.4-4.274,7.341,7.341,0,1,1,7.342,7.29h0Zm4.134-5.3c-0.222-.12-1.307-0.7-1.511-0.784a0.356,0.356,0,0,0-.514.093c-0.159.217-.609,0.705-0.745,0.85a0.347,0.347,0,0,1-.49.037,6.142,6.142,0,0,1-1.768-1.177,6.691,6.691,0,0,1-1.2-1.593,0.325,0.325,0,0,1,.117-0.453c0.1-.1.234-0.253,0.352-0.378a1.507,1.507,0,0,0,.239-0.365,0.411,0.411,0,0,0,0-.392C8.227,7.368,7.817,6.25,7.646,5.8S7.286,5.41,7.153,5.4s-0.28-.03-0.43-0.035a0.827,0.827,0,0,0-.609.258,2.467,2.467,0,0,0-.859,1.832A4.305,4.305,0,0,0,6.086,9.8,9.2,9.2,0,0,0,9.8,13.322c2.256,0.98,2.265.681,2.679,0.659a2.278,2.278,0,0,0,1.562-1.006,1.857,1.857,0,0,0,.172-1.057,1.171,1.171,0,0,0-.422-0.276Z" fill="#fff"></path>
                    </svg>
                </a>
                <a class="share-btn share-em rounded-circle" data-event-category="Share Wallpaper" data-event-label="Email Share" href="mailto:?subject=Various Currencies Money From Wallpapers.com&amp;body=Check%20out%20this%20wallpaper%20from%20https://wallpapers.com/wallpapers/various-currencies-money-145b7wkxd81ko9fd.html" title="Share by Email" target="_blank" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <title id="mailIcontitle">Various Currencies Money | Wallpapers.com</title>
                        <desc id="mailIconDesc">Share wallpaper using e-Mail</desc>
                        <path d="M10.5,12.6L3,4.194,3,4H18V4.191ZM9.281,13.966l0.933,0.948,0.287-.321,0.286,0.321,0.933-.948-0.33-.37L18,6.184V17H3.133L3.023,6.21,9.611,13.6Z" fill="#fff"></path>
                    </svg>
                </a>
                <div class="share-btn share-mo rounded-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <title id="moreIcontitle">Various Currencies Money | Wallpapers.com</title>
                        <desc id="moreIconDesc">Share wallpaper with more option</desc>
                        <path d="M16.813,12.5a2,2,0,1,1,2-2A2,2,0,0,1,16.813,12.5ZM10,12.5a2,2,0,1,1,2-2A2,2,0,0,1,10,12.5Zm-6.812,0a2,2,0,1,1,2-2A2,2,0,0,1,3.188,12.5Z" fill="#fff"></path>
                    </svg>
                </div>
            </div>

            <div class="mt-3">
                <ul class="share-tabs" id="copylink">
                <li class="share-tab link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <title id="CopyLinkIcontitle">Various Currencies Money | Wallpapers.com</title>
                        <desc id="CopyLinkIconDesc">Copy Link to Share</desc>
                        <path id="Share" d="M7.917,17.8a4.058,4.058,0,0,1-5.74-5.737L6.242,8a4.067,4.067,0,0,1,5.74,0c0.042,0.042.084,0.084,0.123,0.129,0.026,0.023.045,0.039,0.071,0.065a0.962,0.962,0,0,1,.158.21,0.131,0.131,0,0,1,.013.023l0,0a0.971,0.971,0,0,1-1.322,1.306,1.889,1.889,0,0,1-.417-0.362h0a2.107,2.107,0,0,0-2.986-.006L3.55,13.437a2.111,2.111,0,0,0,0,2.99h0a2.111,2.111,0,0,0,2.99,0l2.45-2.45a3.173,3.173,0,0,0,2.712.036L7.917,17.8h0ZM17.8,7.917l-4.066,4.066a4.061,4.061,0,0,1-5.74,0c-0.042-.042-0.084-0.084-0.123-0.129a0.616,0.616,0,0,1-.068-0.065,0.969,0.969,0,0,1-.158-0.21,0.161,0.161,0,0,1-.013-0.023l0,0a0.971,0.971,0,0,1,1.322-1.306,1.89,1.89,0,0,1,.417.362h0a2.107,2.107,0,0,0,2.986.007l4.072-4.073a2.111,2.111,0,0,0,0-2.99h0a2.111,2.111,0,0,0-2.99,0L11,6a3.186,3.186,0,0,0-2.712-.036l3.782-3.785A4.055,4.055,0,1,1,17.8,7.917h0Z" fill="#2464c4"></path>
                    </svg>
                    Copy link
                </li>
                <li class="share-tab embed" id="embedlink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <path class="cls-1" d="M20.663,11.3l-5.171,5.126a1.131,1.131,0,0,1-1.589,0,1.107,1.107,0,0,1,0-1.575L18.3,10.5,13.9,6.146a1.107,1.107,0,0,1,0-1.575,1.131,1.131,0,0,1,1.589,0L20.663,9.7A1.145,1.145,0,0,1,20.663,11.3ZM8.749,17.985a1.216,1.216,0,0,1-1.011-1.4L9.823,4.017a1.225,1.225,0,0,1,2.419.394L10.157,16.983A1.224,1.224,0,0,1,8.749,17.985ZM6.1,16.658a1.131,1.131,0,0,1-1.589,0l-5.171-5.126a1.145,1.145,0,0,1,0-1.606L4.508,4.8A1.131,1.131,0,0,1,6.1,4.8a1.107,1.107,0,0,1,0,1.575L1.7,10.73,6.1,15.083A1.107,1.107,0,0,1,6.1,16.658Z" fill="#2464c4"></path>
                    </svg>
                    Embed
                </li>
                </ul>
            </div>
            <div class="mt-3">
                <ul class="share-tab-contents">
                    <li class="share-content-copy active">
                <div class="input-group">
                    <input type="text" class="form-control" value="https://wallpapers.com/wallpapers/various-currencies-money-145b7wkxd81ko9fd.html" placeholder="Link to Copy" id="copy-link">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="copy-link-btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copy link to share">
                            Copy
                        </button>
                    </span>
                </div>
                    </li>
                    <li class="share-content-embed">
                <div class="input-group">
                    <input type="text" class="form-control" value="https://wallpapers.com/wallpapers/various-currencies-money-145b7wkxd81ko9fd.html?embed=true" placeholder="Link to Copy" id="embed-link" style="display: none">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="copy-embed-btn" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copy link to share" style="display: none">
                            Copy
                        </button>
                    </span>
                </div>
                    </li>
                </ul>
            </div>
            <div class="mt-3 dropdown" role="group" style="position: relative;">
                <button class="btn btn-primary btn-lg form-control" type="button"  data-target=".download-box"   style="    display: flex;
                    justify-content: space-evenly; align-items: center;">
                    Download Wallpaper
                </button>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="related-tag">
            <span class="image-tag"><a href="https://wallpapers.com/berlin-money-heist" title="Berlin Money Heist Wallpapers" class="a-tag">Berlin Money Heist</a></span>
            <span class="image-tag"><a href="https://wallpapers.com/money" title="Money Wallpapers" class="a-tag">Money</a></span>
            <span class="image-tag"><a href="https://wallpapers.com/money-heist" title="Money Heist Wallpapers" class="a-tag">Money Heist</a></span>
        </div>
    </div>

    <h2>Various Wallpaper</h2>
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
    <script>
        $('document').ready(function(){
            $('#embedlink').click(function(){
                $('#copy-link').css('display','none');
                $('#copy-link-btn').css('display','none');
                $('#embed-link').css('display','block');
                $('#copy-embed-btn').css('display','block');
            });
        });
    </script>
@endsection
