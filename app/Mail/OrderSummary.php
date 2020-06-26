<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderSummary extends Mailable
{
    use Queueable, SerializesModels;

    private $orderId;

    public $order;

    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }

    public function build()
    {
        return $this
            ->loadOrder()
            ->to($this->order->user->email, $this->order->user->name)
            ->markdown('emails.order-summary');
    }

    private function loadOrder()
    {
        $this->order = Order::find($this->orderId);

        return $this;
    }
}
