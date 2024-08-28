@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero" style="background: url('https://i.pinimg.com/1200x/e4/d1/42/e4d1426ccea467d48ba584d8242cf8e2.jpg') no-repeat center center; background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center; color: white;">
    <div class="text-center">
        <h1>FAQs</h1>
        <p>Home / FAQs</p>
    </div>
</div>

<!-- FAQ Section -->
<div class="container my-5">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What services does your agency offer?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We offer a wide range of travel-related services, including guided tours, hotel bookings, and customized travel packages to suit your needs.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How can I book a tour?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can book a tour directly through our website by selecting the desired package and following the on-screen instructions, or you can contact us for assistance.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Do you offer refunds for canceled trips?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, we have a flexible refund policy depending on how far in advance you cancel your trip. Please refer to our cancellation policy for more details.
                </div>
            </div>
        </div>
        <!-- Add more FAQ items as needed -->
    </div>
</div>
@endsection
