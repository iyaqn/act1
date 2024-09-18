@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="icon mb-3">
                <i class="bi bi-telephone" style="font-size: 2rem; color: #00bfa5;"></i>
            </div>
            <p>+1 323-913-4688<br>+1 323-888-4554</p>
        </div>
        <div class="col-md-4 mb-4">
            <div class="icon mb-3">
                <i class="bi bi-geo-alt" style="font-size: 2rem; color: #00bfa5;"></i>
            </div>
            <p>4730 Crystal Springs Dr,<br>Los Angeles, CA 90027</p>
        </div>
        <div class="col-md-4 mb-4">
            <div class="icon mb-3">
                <i class="bi bi-envelope" style="font-size: 2rem; color: #00bfa5;"></i>
            </div>
            <p>mail@demolink.org<br>info@demolink.org</p>
        </div>
    </div>
</div>
<div class="container my-5">
    <h2 class="text-center mb-4">Get in touch</h2>
    <p class="text-center">If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
    
    <form action="#" method="POST">
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
            </div>
            <div class="col-md-4">
                <input type="email" class="form-control" placeholder="E-mail" name="email" required>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Phone" name="phone">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <textarea class="form-control" placeholder="Message" name="message" rows="5" required></textarea>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </form>
</div>
@endsection
