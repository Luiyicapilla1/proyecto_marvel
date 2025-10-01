<?php

    //Dinimos la url API
    define("URL", "https://whenisthenextmcufilm.com/api");

    $data = file_get_contents(URL);
    $data = json_decode($data, true);
    ?>

    <html>
        <head>
            <title>Marvel</title>
            <style>
                :root{
                    color-scheme: light dark;
                }
            </style>
        </head>
        <body>
            <section style="display: flex; flex-direction: column; align-items: center; gap: 10px;">
                <h1 style="margin-top: 50px"><?= $data["title"] ?></h1>
                <img src="<?= $data["poster_url"]?>" alt="" width="400" style="border-radius: 10px;"/>
                <h2>Quedan <?= $data["days_until"];?> días para su lanzamiento -> Fecha: <?= $data["release_date"]?> <br></h2>
                <h2>La siguiente produccion será <?= $data["following_production"]["title"]?></h2>
            </section>
        </body>
    </html>