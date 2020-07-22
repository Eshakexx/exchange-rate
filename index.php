<?php

require_once 'Classes/System.php';

use Classes\System;
use Classes\Application\HomePageService;

System::load();
$mod = isset($_GET['mod']);
$homePageService = new HomePageService();

if ($mod == 'convert') {
    $homePageService->convertCurrency();
}

$homePageService->showMainPage();
