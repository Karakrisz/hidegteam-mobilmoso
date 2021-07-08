<?php

function homeController()
{
    $connection = getConnection();
    $getKisAuto = kisAuto($connection);
    $getVarosiAuto = varosiAuto($connection);
    $getCsaladiAuto = csaladiAuto($connection);

    return [
        "home",
        [
            "title" => "Kezdőlap",
            "getKisAuto" => $getKisAuto,
            "getVarosiAuto" => $getVarosiAuto,
            "getCsaladiAuto" => $getCsaladiAuto,
        ]
    ];
}

function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}
