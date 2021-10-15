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
    $getTelefonszam = telefonszam($dbc);
    $getBekoszonoSzoveg = bekoszonoSzoveg($dbc);
    $getKapcsolat = kapcsolat($dbc);

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
            "getTelefonszam" => $getTelefonszam,
            "getBekoszonoSzoveg" => $getBekoszonoSzoveg,
            "getKapcsolat" => $getKapcsolat,
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
