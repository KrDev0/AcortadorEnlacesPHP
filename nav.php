<?php


use shorcut\SessionController;

?>
<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
    <a class="navbar-brand" href="https://krdev.site">
        <img class="img-fluid" style="max-height: 50px" src="img/krdev.png" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" id="botonMenu" aria-label="Mostrar u ocultar menú">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="link_management.php">Link management&nbsp;<i class="fa fa-link"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="statistics.php">Statistics&nbsp;<i class="fa fa-chart-bar"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="users.php">Users&nbsp;<i class="fa fa-users"></i></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="https://krdev.site/contact">Support & help&nbsp;<i class="fa fa-hands-helping"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout (<?php
                                                                include_once "vendor/autoload.php";
                                                                echo SessionController::get("email");
                                                                ?>)&nbsp;<i class="fa fa-sign-out-alt"></i></a>
            </li>
        </ul>

    </div>
</nav>