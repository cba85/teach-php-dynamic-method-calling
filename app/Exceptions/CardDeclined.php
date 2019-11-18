<?php

namespace App\Exceptions;

use Exception;
use ReflectionClass;
use App\Exceptions\Traits\ExposesShortName;
use App\Exceptions\PaymentException;

class CardDeclined extends PaymentException {

    use ExposesShortName;
    /*
    public function getShortName()
    {
        return (new ReflectionClass($this))->getShortName();
    }
    */

}