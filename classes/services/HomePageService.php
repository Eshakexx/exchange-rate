<?php

namespace Classes\Application;

use Classes\Converters\CurrencyLayerConverter;

class HomePageService
{
    public function showOutcome(): void
    {
        $value = $_GET['value'] ?? 0;
        $currency = $_GET['currency'] ?? '';

        if (!$currency || !$value) {
            echo 0;
            exit;
        }

        echo (new CurrencyLayerConverter())->convert($value, $currency);
        exit;
    }

    public function showMainPage(): void
    {
        echo file_get_contents('public/index.html');
    }
}
