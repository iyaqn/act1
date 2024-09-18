@extends('layouts.app')

@section('content')
<div class="hero" style="background: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI0LTA1L2Rlc2lnbndpdGhtZTA5X2JhYnlfcGFyaXNfYWVzdGhldGljX3dhbGxwYXBlcl9vZl9jbG9zZV91cF9wYXJpc182NjRjMjYyMC03NzJjLTRjMTQtOWM0Ni0wOGExZWNiNzUwYjAuanBn.jpg') no-repeat center center; background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center; color: white;">
    <div class="text-center">
        <h1>Gallery</h1>
        <p>Home / Gallery</p>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4">Our Gallery</h2>
    <div class="row">
    @foreach ($gallery as $index => $gallerydeets)
        <div class="col-md-4 mb-4">
            <div class="card">
            <a href="/page5/{{$index}}"><img src="{{ $gallerydeets['img']}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <p class="card-text">{{ $gallerydeets['title']}}</p>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
