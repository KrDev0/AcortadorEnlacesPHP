<?php
?>
<?php

use shorcut\LinkController;
use shorcut\StatisticsController;

include_once "vendor/autoload.php";
$hash = json_decode(file_get_contents("php://input"));
if (!$hash) {
    exit;
}

$link = LinkController::getOneByHash($hash);
if (!$link) {
    exit;
}
StatisticsController::registerClick($link->id);
