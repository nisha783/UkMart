<div class="tracking-container">
    <h3 class="text-center mb-4">Track Your Order</h3>

    <!-- Search Section -->
    <div class="d-flex justify-content-center align-items-center p-4">
        <div class="d-flex align-items-center">
            <input type="text" placeholder="Enter Order Number (#UMM-2024-123)" wire:model.live="orderId"
                class="form-control me-3"
                style="width: 700px; height: 50px; border-radius: 8px; border: 1px solid #ccc; font-size: 16px;">
            <button wire:click="trackOrder" class="btn btn-dark"
                style="border-radius: 8px; padding: 12px 24px; font-size: 16px; font-weight: bold; width: 150px;">
                Track Now
            </button>
        </div>
    </div>

    @if ($error)
        <div class="alert alert-danger text-center mx-auto" style="max-width: 800px;">
            {{ $error }}
        </div>
    @endif

    @if ($order)
        <!-- Status Timeline -->
        <div class="tracking-timeline">
            @php
                $statuses = ['pending', 'confirmed', 'processing', 'shipped', 'delivered'];
                $currentFound = false;
                $statusIndex = array_search($order->status, $statuses);
            @endphp

            <div class="timeline-progress">
                <div class="progress-bar" style="width: {{ ($statusIndex / (count($statuses) - 1)) * 100 }}%"></div>
            </div>

            <div class="timeline-items">
                @foreach ($statuses as $index => $status)
                    @php
                        $isCurrent = $order->status === $status;
                        $isPast = array_search($order->status, $statuses) >= array_search($status, $statuses);
                    @endphp

                    <div class="timeline-item {{ $isPast ? 'completed' : '' }} {{ $isCurrent ? 'current' : '' }}">
                        <div class="timeline-icon">
                            
                            <i
                                class="fa {{ $status === $order->status ? $order->getStatusIcon($order->status) : $order->getStatusIcon($status) }} 
                           {{ $isCurrent ? 'text-primary' : ($isPast ? 'text-success' : 'text-secondary') }}">
                            </i>
                        </div>
                        <div class="timeline-content">
                            <h6 class="{{ $isCurrent ? 'fw-bold' : '' }}">
                                {{ ucfirst($status) }}
                            </h6>
                            @if ($isCurrent)
                                <small class="text-muted">
                                    {{ $order->status_updated_at ? $order->status_updated_at->format('M d, Y') : $order->updated_at->format('M d, Y') }}
                                </small>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
