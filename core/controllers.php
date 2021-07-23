<?php

function homeController()
{
    $dbc = getConnection();
    $getKisAuto = kisAuto($dbc);
    $getVarosiAuto = varosiAuto($dbc);
    $getCsaladiAuto = csaladiAuto($dbc);
    $getSuvTerepjaro = suvTerepjaro($dbc);
    $getKishaszonjarmu = kishaszonjarmu($dbc);
    $getBelsoExtrak = belsoExtrak($dbc);

    return [
        "home",
        [
            "title" => "Kezdőlap",
            "getKisAuto" => $getKisAuto,
            "getVarosiAuto" => $getVarosiAuto,
            "getCsaladiAuto" => $getCsaladiAuto,
            "getSuvTerepjaro" => $getSuvTerepjaro,
            "getKishaszonjarmu" => $getKishaszonjarmu,
            "getBelsoExtrak" => $getBelsoExtrak,
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
