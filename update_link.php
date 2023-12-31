<?php
?>
<?php

use shorcut\LinkController;

include_once "session_check.php";
if (!isset($_POST["id"]) || !isset($_POST["title"]) || !isset($_POST["real_link"])) {
    exit("id, title and real link are required");
}

include_once "vendor/autoload.php";
$instantRedirect = intval(isset($_POST["instant_redirect"]));
LinkController::update($_POST["id"], $_POST["title"], $_POST["real_link"], $instantRedirect);
header("Location: link_management.php");
