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
</div>
@endsection

@section('js')
@endsection
