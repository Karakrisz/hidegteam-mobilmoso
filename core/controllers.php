<?php

function homeController()
{


    return [
        "home",
        [
            "title" => "Home"
        ]
    ];
}

function notFoundController()
{
    return [
        "404", [
            "title" => "The page you are looking for is not found."
        ]
    ];
}
