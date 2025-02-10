@extends('layouts.app') {{-- Extend your app layout if you have one --}}
@section('title', 'Privacy Policy')

@section('content')
<section class="privacy-policy-section pt-130 pb-130 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5 text-dark">Privacy Policy</h2>
                <div class="privacy-content bg-white p-4 shadow rounded">
                    <p class="mb-4">
                        Welcome to <strong>UKMegaMart</strong>. Protecting your personal data and respecting your privacy 
                        is our top priority. This Privacy Policy explains how we collect, use, and share your information 
                        when you use our website, services, and interact with us. By using our site, you agree to the terms outlined 
                        in this policy.
                    </p>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-info-circle text-dark me-2"></i>Information We Collect</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Personal Information: Name, email address, phone number, billing/shipping address, and payment details.</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Account Details: Username, password, and preferences when you create an account.</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Transaction Information: Purchase history, saved payment methods, and receipts.</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Technical Information: IP address, browser type, and device details via cookies and tracking technologies.</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Optional Information: Feedback, reviews, and survey responses.</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-hand-holding-heart text-dark me-2"></i>How We Use Your Information</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-angle-right text-primary me-2"></i> Processing orders, payments, and deliveries.</li>
                            <li class="list-group-item"><i class="fas fa-angle-right text-primary me-2"></i> Providing customer support and answering your queries.</li>
                            <li class="list-group-item"><i class="fas fa-angle-right text-primary me-2"></i> Sending order confirmations, tracking details, and promotional updates.</li>
                            <li class="list-group-item"><i class="fas fa-angle-right text-primary me-2"></i> Customizing your shopping experience with tailored recommendations.</li>
                            <li class="list-group-item"><i class="fas fa-angle-right text-primary me-2"></i> Improving website performance and detecting security breaches.</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-cookie-bite text-dark me-2"></i>Cookies and Tracking Technologies</h4>
                        <p>
                            UKMegaMart uses cookies to personalize your experience. Cookies help us:
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-cookie text-warning me-2"></i> Remember your preferences and items in your cart.</li>
                            <li class="list-group-item"><i class="fas fa-cookie text-warning me-2"></i> Analyze traffic and improve site functionality.</li>
                            <li class="list-group-item"><i class="fas fa-cookie text-warning me-2"></i> Deliver targeted advertisements.</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-user-check text-dark me-2"></i>Your Rights</h4>
                        <p>As a user, you have the right to:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-user-shield text-dark me-2"></i> Access, correct, or delete your data.</li>
                            <li class="list-group-item"><i class="fas fa-user-shield text-dark me-2"></i> Opt out of marketing communications.</li>
                            <li class="list-group-item"><i class="fas fa-user-shield text-dark me-2"></i> Withdraw consent for data processing.</li>
                            <li class="list-group-item"><i class="fas fa-user-shield text-dark me-2"></i> Lodge a complaint with the relevant data protection authority.</li>
                        </ul>
                    </div>

                    <p class="text-muted">
                        If you have any questions or concerns about this Privacy Policy, feel free to <a href="/contact" class="text-danger">contact us</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
