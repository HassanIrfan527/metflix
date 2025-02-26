<?php

namespace App\Payments;

use App\Contracts\PaymentGatewayInterface;

class Stripe implements PaymentGatewayInterface
{
    public function processPayment(float $amount): array
    {
        return [];
    }
}
