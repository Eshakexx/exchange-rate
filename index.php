<?php

require_once 'Classes/System.php';

use Classes\System;
use Classes\Application\HomePageService;

System::load();
$action = isset($_GET['action']);
$homePageService = new HomePageService();

if ($action == 'convert') {
    $homePageService->showOutcome();
}

$homePageService->showMainPage();
