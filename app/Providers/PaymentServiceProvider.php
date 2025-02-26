<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentGatewayInterface;
use App\Payments\Stripe;


class PaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PaymentGatewayInterface::class, function () {
            $gateway = config('payment.default_gateway'); // Set in config/payment.php
            return match ($gateway) {
                // 'easypaisa' => new \App\Payments\EasypaisaPaymentGateway(),
                // 'jazzcash' => new \App\Payments\JazzCashPaymentGateway(),
                // default => new \App\Payments\StripePaymentGateway(),
            };
        });
    }
}
