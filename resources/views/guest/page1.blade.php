@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero" style="position: relative; overflow: hidden;">
    <div class="hero-text" style="position: relative; z-index: 1;">
        <h1>First-class Impressions are Waiting for You!</h1>
        <p>Our agency offers travelers various tours and excursions with destinations all over the world. Browse our website to find your dream tour.</p>
        <a href="#" class="btn btn-primary">Book a Tour Now</a>
    </div>
    <!-- Image under the black card -->
    <img src="https://plus.unsplash.com/premium_photo-1721652937934-9cc168ca5dbe?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8dHJhdmVsJTIwYWVzdGhldGljfGVufDB8fDB8fHww" class="img-fluid mt-3" alt="Hero Image" style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 0;">
</div>

<!-- Gallery Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">What you'll experience!</h2>
    <div id="gallery" class="row">
        <div class="col-md-3 mb-3">
            <img src="https://hips.hearstapps.com/hmg-prod/images/hbz-venice-gettyimages-489741024-1505338894.jpg" class="gallery img-fluid" alt="Image 1">
        </div>
        <div class="col-md-3 mb-3">
            <img src="https://images.pexels.com/photos/586687/pexels-photo-586687.jpeg?cs=srgb&dl=pexels-david-bartus-43782-586687.jpg&fm=jpg" class="gallery img-fluid" alt="Image 2">
        </div>
        <div class="col-md-3 mb-3">
            <img src="https://hips.hearstapps.com/hbz.h-cdn.co/assets/16/16/1280x1919/gallery-thailand-1.jpg?resize=980:*" class="gallery img-fluid" alt="Image 3">
        </div>
        <div class="col-md-3 mb-3">
            <img src="https://hips.hearstapps.com/hbz.h-cdn.co/assets/16/16/1280x1919/gallery-gettyimages-159582943-1.jpg?resize=980:*" class="gallery img-fluid" alt="Image 4">
        </div>
    </div>
</div>
@endsection
