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
    
    <!-- FAQ Accordion -->
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
    </div>

    <!-- FAQ Submission Form -->
    <div class="faq-form mt-5">
        <h3 class="text-center mb-3">Have a Question? Ask Us!</h3>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="question" class="form-label">Your Question</label>
                <textarea class="form-control" id="question" name="question" rows="4" placeholder="Enter your question" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit Question</button>
            </div>
        </form>
    </div>

    <!-- Displaying static submitted questions -->
    <div class="submitted-questions mt-5">
        <h3 class="text-center mb-3">Already Asked Questions</h3>
        <div class="accordion" id="submittedFaqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="submittedHeadingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#submittedCollapseOne" aria-expanded="false" aria-controls="submittedCollapseOne">
                        What is your refund policy for canceled trips?
                    </button>
                </h2>
                <div id="submittedCollapseOne" class="accordion-collapse collapse" aria-labelledby="submittedHeadingOne" data-bs-parent="#submittedFaqAccordion">
                    <div class="accordion-body">
                        We offer refunds depending on the cancellation timing. Please see our full refund policy for more details.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="submittedHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#submittedCollapseTwo" aria-expanded="false" aria-controls="submittedCollapseTwo">
                        Can I modify my tour booking after confirming it?
                    </button>
                </h2>
                <div id="submittedCollapseTwo" class="accordion-collapse collapse" aria-labelledby="submittedHeadingTwo" data-bs-parent="#submittedFaqAccordion">
                    <div class="accordion-body">
                        Yes, you can modify your tour booking before the trip starts. Additional charges may apply based on the changes.
                    </div>
                </div>
            </div>
            <!-- Add more static FAQs as needed -->
        </div>
    </div>
</div>
@endsection
