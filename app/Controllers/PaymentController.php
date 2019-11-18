<?php

namespace App\Controllers;

use Exception;
use App\Exceptions\PaymentException;
use App\Exceptions\CardDeclined;

class PaymentController {

    /*
    public function store()
    {
        try {
            $this->pay();
        } catch (Exception $e) {
            print_r('failed');
        }
    }

    protected function pay()
    {
        throw new Exception();
    }
    */

    public function store()
    {
        try {
            $this->pay();
        } catch (PaymentException $e) {
            //print_r($e->getShortName());
            if (method_exists($this, $handler = 'handle' . $e->getShortName())) {
                $this->{$handler}($e);
            }
        }
    }

    protected function handleCardDeclined($e) {
        echo 'Handle card declined';
    }

    protected function pay()
    {
        throw new CardDeclined('Card was declined');
    }

}