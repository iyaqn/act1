@extends('layouts.app')

@section('content')
<div>
    <div class="container my-5">
        <h2 class="text-center mb-4">Location Details</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card text-center"> 
                    <img src="{{ $gallerydeets['img']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><strong>Name: </strong>{{ $gallerydeets['title'] }}</p>
                        <p><strong>Location: </strong>{{ $gallerydeets['loc'] }}</p>
                        <p><strong>Ratings: </strong>{{ $gallerydeets['rates'] }}</p>
                        <a href="{{ route('page5') }}" class="btn btn-secondary">Back</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
