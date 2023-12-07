<?php

use shorcut\SessionController;

include_once "vendor/autoload.php";
SessionController::redirectIfNotLoggedIn();
