<?php

namespace classes;

class ParentConverter
{
    const DEFAULT_SOURCE = 'USD';
    public $apiKey;

    public function convert($value, $currency)
    {
        return $value * $this->getRateByCurrency($currency);
    }
}