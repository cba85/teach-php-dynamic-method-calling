<?php

namespace App\Controllers;

class WebhookController
{

    /*
    public function handle($request)
    {
        // Method 1
        if ($request->type == 'card_declined') {
            $this->handleCardDeclined($request);
        } elseif ($request->type == 'subscription_canceled') {
            $this->handleCardDeclined($request);
        }
    }
    */

    public function handle($request) {
        $method = str_replace('_', '', ucwords($request->type, '_'));
        //print_r($method);
        if (method_exists($this, $handler = 'handle' . $method)) {
            $this->{$handler}($request);
        }
    }

    protected function handleCardDeclined($request)
    {
        echo 'Card declined';
    }

    protected function handleSubscriptionCanceled($request)
    {
        echo 'Subscription declined';
    }

}