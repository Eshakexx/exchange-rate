<?php

namespace Classes\Services;

abstract class ParentConverter
{
    const DEFAULT_SOURCE = 'USD';
    public $apiKey;

    public function convert($value, $currency): float
    {
        return $value * $this->getRateByCurrency($currency);
    }

    abstract public function getRateByCurrency(string $currency): float;
}
