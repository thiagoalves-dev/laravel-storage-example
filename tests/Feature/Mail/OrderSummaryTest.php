<?php

namespace Tests\Feature\Mail;

use App\Mail\OrderSummary;
use App\Order;
use Tests\TestCase;

class OrderSummaryTest extends TestCase
{
    private $mail;

    protected function setUp(): void
    {
        parent::setUp();

        $order = factory(Order::class)->create();

        $this->mail = new OrderSummary($order->getKey());
    }

    public function testBuildSuccess()
    {
        $this->assertInstanceOf(OrderSummary::class, $this->mail->build());
    }

    public function testRenderSuccess()
    {
        $this->assertIsString($this->mail->render());
    }
}