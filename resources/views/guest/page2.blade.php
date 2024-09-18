@extends('layouts.app')

@section('content')
<div class="hero" style="background: url('https://www.vmcdn.ca/f/files/via/images/tourism/canada-travel-allure-vancouver-hiking.jpg;w=960') no-repeat center center; background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center; color: white;">
    <div class="text-center">
        <h1>About Us</h1>
        <p>Home / About</p>
    </div>
</div>
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="https://www.biztrip.co.uk/wp-content/uploads/2017/05/Business-Travel-Header-Image.jpg" alt="About Us" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Why choose us</h2>
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="true">Experience</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button" role="tab" aria-controls="skills" aria-selected="false">Skills</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="mission" aria-selected="false">Mission</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <p>Aliquam malesuada bibendum arcu vitae elementum curabitur. A erat nam at lectus urna duis convallis convallis tellus. Sit amet consectetur adipiscing elit pellentesque.</p>
                    <div class="mb-3">
                        <span>Tours</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">79%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span>Excursions</span>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">72%</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <span>Hotel Bookings</span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">88%</div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                    <p>We have a highly skilled team with expertise in tour management, hospitality, and client satisfaction.</p>
                </div>
                <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                    <p>Our mission is to provide memorable experiences with high-quality service that exceeds our clients’ expectations.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
