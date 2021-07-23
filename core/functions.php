<?php


function logMessage($level, $message)
{
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] $message" . PHP_EOL);
    fclose($file);
}

function errorPage()
{
    include "tamplates/error.php";
    die();
}

$routes = [];

function route($action, $callable, $method = 'GET')
{
    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;
}

function dispatch($action, $notFound)
{
    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();
}


function esc($string)
{
    echo htmlspecialchars($string);
}

function getConnection()
{
    $dbc = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$dbc) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $dbc;
}

function kisAuto($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from kis_auto')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function varosiAuto($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from varosi_auto')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function csaladiAuto($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from csaladi_auto')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function suvTerepjaro($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from suv_terepjaro')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function kishaszonjarmu($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from kishaszonjarmu')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function belsoExtrak($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from belso_extrak')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


var_dump(mysqli_fetch_all($result, MYSQLI_ASSOC));