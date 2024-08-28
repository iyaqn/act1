@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero" style="background: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTA1L2Rlc2lnbndpdGhtZTA5X2JhYnlfcGFyaXNfYWVzdGhldGljX3dhbGxwYXBlcl9vZl9jbG9zZV91cF9wYXJpc182NjRjMjYyMC03NzJjLTRjMTQtOWM0Ni0wOGExZWNiNzUwYjAuanBn.jpg') no-repeat center center; background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center; color: white;">
    <div class="text-center">
        <h1>Gallery</h1>
        <p>Home / Gallery</p>
    </div>
</div>

<!-- Gallery Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Our Gallery</h2>
    <div class="row">
        <!-- Example of Gallery Item -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://i.pinimg.com/736x/b7/90/9e/b7909e1619d107567a5f6b3e2d74c137.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Beautiful Beach</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://i.pinimg.com/474x/99/f7/35/99f7353d356a8b68a480bb0454b8fe83.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Mountain View</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://i.pinimg.com/736x/f8/19/97/f81997a8b4517f8d5371f799e293ffda.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Sunset Over the Ocean</p>
                </div>
            </div>
        </div>
        <!-- Add more gallery items here -->
    </div>
</div>
@endsection
