<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderTracking extends Component
{
    public $orderId;
    public $order;
    public $error;

    public function trackOrder()
    {
        try {
            // Validate order number format
            if (!preg_match('/^#UMM-(\d{4})-(\d+)$/', $this->orderId, $matches)) {
                throw new \Exception('Invalid order number format. Please use format: #UMM-YYYY-NUMBER');
            }

            $orderYear = $matches[1];
            $order_id = $matches[2];

            // Find the order
            $this->order = Order::where('id', $order_id)
                ->whereYear('created_at', $orderYear)
                ->first();

            if (!$this->order) {
                throw new \Exception('Order not found. Please check your order number.');
            }

            $this->error = null;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            $this->order = null;
        }
    }

    public function render()
    {
        return view('livewire.order-tracking');
    }
}
