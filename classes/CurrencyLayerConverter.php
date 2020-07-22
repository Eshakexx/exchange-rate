<?php

namespace classes;

use OceanApplications\currencylayer\client as CurrencyLayerClient;

class CurrencyLayerConverter extends ParentConverter
{
    public $apiKey = '2fb8ba85cce20e2c30d96241cf0a52a3';

    public function getRateByCurrency(string $currency): float
    {
        $currencyLayer = new CurrencyLayerClient($this->apiKey);
        $result = $currencyLayer
            ->source(self::DEFAULT_SOURCE)
            ->currencies($currency)
            ->live();

        return array_shift($result['quotes']);
    }
}