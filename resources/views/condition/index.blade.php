@extends('layouts.app') {{-- Extend your app layout if you have one --}}
@section('title', 'Terms & Conditions')

@section('content')
<section class="terms-section pt-130 pb-130 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5 text-dark">Terms & Conditions</h2>
                <div class="terms-content bg-white p-4 shadow rounded">
                    <p class="mb-4">
                        Welcome to <strong>UKMegaMart</strong>. These Terms and Conditions outline the rules and regulations for the use of our website and services. By accessing this website, we assume you accept these terms. Do not continue to use <strong>UKMegaMart</strong> if you do not agree to all the terms stated on this page.
                    </p>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-file-alt text-dark me-2"></i>License and Use of Content</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> All content on this website is the property of <strong>UKMegaMart</strong> or its licensors.</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> You may access the content for personal use only; commercial use requires prior permission.</li>
                            <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Redistribution, replication, or misuse of the content is strictly prohibited.</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-shopping-cart text-danger me-2"></i>Purchases and Payments</h4>
                        <p>
                            By purchasing a product or service through our website, you agree to the following terms:
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-angle-right text-primary me-2"></i> All prices displayed on the website are final and non-negotiable.</li>
                            <li class="list-group-item"><i class="fas fa-angle-right text-primary me-2"></i> Payment information provided by you should be accurate and complete.</li>
                            <li class="list-group-item"><i class="fas fa-angle-right text-primary me-2"></i> Refunds, if applicable, are subject to our refund policy guidelines.</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-user-shield text-dark me-2"></i>Responsibilities and Account Usage</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-user text-success me-2"></i> You are responsible for maintaining the confidentiality of your account login credentials.</li>
                            <li class="list-group-item"><i class="fas fa-user text-success me-2"></i> Activities performed under your account are your responsibility.</li>
                            <li class="list-group-item"><i class="fas fa-user text-success me-2"></i> If you suspect unauthorized account usage, report it to us immediately.</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-exclamation-triangle text-primary me-2"></i>Limitation of Liability</h4>
                        <p>
                            To the maximum extent permitted by law, <strong>UKMegaMart</strong> will not be held liable for:
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-times-circle text-danger me-2"></i> Any damages, direct or indirect, resulting from website use.</li>
                            <li class="list-group-item"><i class="fas fa-times-circle text-danger me-2"></i> Loss of data, profit, or revenue arising from website interruptions.</li>
                            <li class="list-group-item"><i class="fas fa-times-circle text-danger me-2"></i> Unauthorized access to your account or data due to negligence on your part.</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="text-dark mb-3"><i class="fas fa-handshake text-primary me-2"></i>Agreement Modifications</h4>
                        <p>
                            We reserve the right to modify or replace these terms at any time. By continuing to use the website, you agree to be bound by the updated terms.
                        </p>
                    </div>

                    <p class="text-muted">
                        If you have any questions about these terms, please feel free to <a href="/contact" class="text-primary">contact us</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
