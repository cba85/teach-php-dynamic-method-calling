<?php

namespace App\Exceptions\Traits;

use ReflectionClass;

trait ExposesShortName
{
    public function getShortName() {
        return (new ReflectionClass($this))->getShortName();
    }
}