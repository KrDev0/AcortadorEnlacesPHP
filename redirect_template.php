<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $link->title ?>
    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="col-12"><br><br>
                    <ul class="list-group">
                        <li class="list-group-item text-center">
                            <h2>Redireccionando a
                                <?php echo $link->title ?>...
                            </h2>
                            <div class="countdown-container">
                                <div class="countdown-circle">
                                    <span class="countdown" id="countdown"></span>
                                </div>
                            </div>
                            <p>No cierre esta pestaña, serás redirigido en unos segundos</p>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex flex-row">
                                <div class="card col" style="margin-right: 7px; max-height: 400px;">
                                    <img src="img/krdev.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">KrDev</h5>
                                        <p class="card-text">Somo un pequeño equipo de desarrolladores que
                                            nos dedicamos al diseño y desarrollo de aplicaciones de administración y
                                            herramientas útiles que puedes utilizar en tu día a día.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://krdev.site" target="_blank"
                                            class="btn btn-primary">Visitar</a>
                                    </div>
                                </div>
                                <div class="card col" style="margin-right: 7px;max-height: 400px;">
                                    <img src="img/mega.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">MegaDownloader</h5>
                                        <p class="card-text">Una aplicación liviana que se puede
                                            ejecutar en su PC en segundos. Su interfaz de usuario de la aplicación es
                                            minimalista, con herramientas fáciles de usar para organizar la descarga de
                                            archivos MEGA.nz</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://megadownloader.krdev.site" target="_blank"
                                            class="btn btn-primary">Visitar</a>
                                    </div>
                                </div>
                                <div class="card col" style="margin-right: 7px;max-height: 400px;">
                                    <img src="img/billar.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Billar My Admin</h5>
                                        <p class="card-text">Es un software de administración de
                                            billares con la capacidad de gestionar el tiempo de uso de las mesas, llevar
                                            un control del inventario de consumibles, realizar ventas, realizar reportes
                                            y más
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://krdve.site/software-management/bmyadmin/"
                                            target="_blank" class="btn btn-primary">Visitar</a>
                                    </div>
                                </div>
                                <div class="card col" style="margin-right: 7px;max-height: 400px;">
                                    <img src="img/fbackup.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">FBackup</h5>
                                        <p class="card-text">FBackup es una herramienta la cual te permite crear copias
                                            de seguridades de tus carpetas, con su integración en el menú contextual de
                                            Windows® te ayudara a crear copias de seguridad más rápidamente.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://krdev.site/software-tools/fbackup/" target="_blank"
                                            class="btn btn-primary">Visitar</a>
                                    </div>
                                </div>
                                <div class="card col" style="margin-right: 7px;max-height: 400px;">
                                    <img src="img/wrar.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">WINRAR.EXE</h5>
                                        <p class="card-text">Este es un software que te permite crear archivos de
                                            licencia para WinRAR.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://krdev.site/software-tools/wrar/" target="_blank"
                                            class="btn btn-primary">Visitar</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item text-center">
                            <div style="position: relative;"><iframe
                                    src="https://publisher.linkvertise.com/cdn/ads/LV-728x90/index.html" frameborder="0"
                                    height="90" width="728"></iframe><a
                                    href="https://publisher.linkvertise.com/ac/634316" target="_blank"
                                    style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;"></a></div>
                        </li>
                        <li class="list-group-item text-center">
                            <a class="seguir" target="_blank" href="https://krdev.site/contact">Quiero ver mi página
                                aquí</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-12 mt-2 text-center" id="link"> </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const $link = document.querySelector("#link");
                const $countdown = document.querySelector("#countdown");

                let counter = 5;
                $countdown.innerHTML = counter;

                const countdownInterval = setInterval(() => {
                    counter--;
                    $countdown.innerHTML = counter;
                    if (counter === 0) {
                        clearInterval(countdownInterval);
                        (async () => {
                            await fetch("./track_link.php", {
                                method: "POST",
                                body: JSON.stringify("<?php echo $link->hash ?>"),
                            });
                            window.location.href = "<?php echo $link->real_link ?>";
                        })();
                    }
                }, 1000);
            });
        </script>