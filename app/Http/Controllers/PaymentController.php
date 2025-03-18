<?php

namespace App\Http\Controllers;

use Stripe\StripeClient;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected StripeClient $stripeClient;

    function __construct(StripeClient $stripe)
    {
        $this->stripeClient = $stripe;
    }

    public function createCheckoutSession()
    {

        $amount = 1999; // in cents ($19.99)
        $currency = 'usd';
        $name = "Name which comes from the register form";
        $email = "Email which comes from the register form";
        // Create a checkout session
        $session = $this->stripeClient->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'MetFlix Subscription',
                        ],
                        'unit_amount' => 1999, // amount in cents
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            // Include prefilled metadata:
            'metadata' => [
                'customer_name' => $name,
                'customer_email' => $email,
                // add any other prefilled fields here
            ],
            'success_url' => route('checkout.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout.cancel'),
        ]);

        // Return the session ID or URL to the frontend
        return response()->json(['sessionId' => $session->id]);
    }
}
