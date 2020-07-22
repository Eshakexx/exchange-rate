<?php

namespace Classes\Application;

use Classes\Converters\CurrencyLayerConverter;

class HomePageService
{
    public function convertCurrency(): void
    {
        $value = $mod = !empty($_GET['value']) ? $_GET['value'] : 0;
        $currency = $mod = !empty($_GET['currency']) ? $_GET['currency'] : 0;
        echo (new CurrencyLayerConverter())->convert($value, $currency);
        exit;
    }

    public function showMainPage(): void
    {
        echo file_get_contents('public/index.html');
    }
}
