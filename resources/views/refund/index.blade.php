@extends('layouts.app') {{-- Extend your app layout if you have one --}}
@section('title', 'Refund Policy')

@section('content')
<section class="refund-policy-section pt-130 pb-130 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="policy-card p-5 shadow-sm rounded bg-white">
                    <h2 class="section-title text-center mb-5" style="color: #4a4a4a;">Refund Policy</h2>
                    <p class="mb-4 text-center" style="color: #5c5c5c;">
                        Thank you for shopping at <strong>UKMegaMart</strong>. Your satisfaction is important to us. This policy outlines the process and conditions under which refunds will be issued.
                    </p>
                    
                    <div class="mb-5">
                        <h4 class="mb-3" style="color: #333333;">Refund Eligibility</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Refunds can be requested within <strong>14 days</strong> of the purchase date.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Items must be in their original condition, with tags and packaging intact.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Digital downloads and services are generally non-refundable unless specified.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="mb-3" style="color: #333333;">How to Request a Refund</h4>
                        <p>Follow these steps to initiate a refund:</p>
                        <ol class="list-group list-group-numbered border-0">
                            <li class="list-group-item bg-transparent">Contact our support team at <a href="" style="color: #007b88; text-decoration: underline;"></a>.</li>
                            <li class="list-group-item bg-transparent">Include your order number, receipt, and reason for the refund.</li>
                            <li class="list-group-item bg-transparent">If returning a product, securely package it to prevent damage during transit.</li>
                        </ol>
                    </div>

                    <div class="mb-5">
                        <h4 class="mb-3" style="color: #333333;">Processing Refunds</h4>
                        <p>Once your return is received and inspected:</p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Refunds for eligible returns are processed within <strong>7-10 business days</strong>.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Refunds are credited to the original payment method only.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Shipping charges are non-refundable unless the return is due to our error.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h4 class="mb-3" style="color: #333333;">Non-Refundable Items</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Perishable goods (e.g., food items, flowers).</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Custom-made or personalized products.</span>
                            </li>
                            <li class="d-flex align-items-start mb-2">
                                <span class="me-3" style="color: #6c757d;">&#9679;</span>
                                <span>Clearance or final sale items.</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="mb-3" style="color: #333333;">Contact Us</h4>
                        <p class="mb-0">
                            If you have any questions or concerns about this policy, feel free to <a href="/contact" style="color: #007b88; text-decoration: underline;">contact our team</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
