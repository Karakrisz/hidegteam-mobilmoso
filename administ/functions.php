<?php
require_once("config.php");
require_once("control.php");


function esc($string)
{
    echo htmlspecialchars($string);
}


function logMessage($level, $message)
{
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] $message" . PHP_EOL);
    fclose($file);
}

function errorPage()
{
    include "error.php";
    die();
}

switch ($pEvent) {
    case 'kisAutoInsert':
        kisAutoInsert($dbc, $kis_auto_alap, $kis_auto_premium_kozmikus, $kis_auto_professzionalis_galaktikus, $kis_auto_megjegyzes);
        break;
    case 'kisAutoEdit':
        $uzenet =  updateKisAuto($dbc, $kis_auto_id, $kis_auto_alap, $kis_auto_premium_kozmikus, $kis_auto_professzionalis_galaktikus, $kis_auto_megjegyzes);
        break;
    case 'varosiAutoInsert':
        varosiAutoInsert($dbc, $varosi_auto_alap, $varosi_auto_premium_kozmikus, $varosi_auto_professzionalis_galaktikus, $varosi_auto_megjegyzes);
        break;
    case 'varosiAutoEdit':
        $uzenet = updateVarosiAuto($dbc, $varosi_auto_id, $varosi_auto_alap, $varosi_auto_premium_kozmikus, $varosi_auto_professzionalis_galaktikus, $varosi_auto_megjegyzes);
        break;
    case 'csaladiAutoInsert':
        csaladiAutoInsert($dbc, $csaladi_auto_alap, $csaladi_auto_premium_kozmikus, $csaladi_auto_professzionalis_galaktikus, $csaladi_auto_megjegyzes);
        break;
    case 'csaladiAutoEdit':
        $uzenet = updateCsaladiAuto($dbc, $csaladi_auto_id, $csaladi_auto_alap, $csaladi_auto_premium_kozmikus, $csaladi_auto_professzionalis_galaktikus, $csaladi_auto_megjegyzes);
        break;
}

function kisAutoInsert($dbc, $kis_auto_alap, $kis_auto_premium_kozmikus, $kis_auto_professzionalis_galaktikus, $kis_auto_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO kis_auto (alap,premium_kozmikus,professzionalis_galaktikus,megjegyzes) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $kis_auto_alap, $kis_auto_premium_kozmikus, $kis_auto_professzionalis_galaktikus, $kis_auto_megjegyzes);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
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


function getKisAutoById($dbc, $kis_auto_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM kis_auto WHERE kis_auto_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $kis_auto_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function updateKisAuto($dbc, $kis_auto_id, $kis_auto_alap, $kis_auto_premium_kozmikus, $kis_auto_professzionalis_galaktikus, $kis_auto_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE kis_auto SET alap = ?, premium_kozmikus = ?, professzionalis_galaktikus = ?, megjegyzes = ?  WHERE kis_auto_id = ?')) {
        mysqli_stmt_bind_param($statement, "ssssi", $kis_auto_alap, $kis_auto_premium_kozmikus, $kis_auto_professzionalis_galaktikus, $kis_auto_megjegyzes, $kis_auto_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function varosiAutoInsert($dbc, $varosi_auto_alap, $varosi_auto_premium_kozmikus, $varosi_auto_professzionalis_galaktikus, $varosi_auto_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO varosi_auto (alap,premium_kozmikus,professzionalis_galaktikus,megjegyzes) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $varosi_auto_alap, $varosi_auto_premium_kozmikus, $varosi_auto_professzionalis_galaktikus, $varosi_auto_megjegyzes);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
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


function getVarosiAutoById($dbc, $varosi_auto_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM varosi_auto WHERE varosi_auto_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $varosi_auto_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function updateVarosiAuto($dbc, $varosi_auto_id, $varosi_auto_alap, $varosi_auto_premium_kozmikus, $varosi_auto_professzionalis_galaktikus, $varosi_auto_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE varosi_auto SET alap = ?, premium_kozmikus = ?, professzionalis_galaktikus = ?, megjegyzes = ?  WHERE varosi_auto_id = ?')) {
        mysqli_stmt_bind_param($statement, "ssssi", $varosi_auto_alap, $varosi_auto_premium_kozmikus, $varosi_auto_professzionalis_galaktikus, $varosi_auto_megjegyzes, $varosi_auto_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function csaladiAutoInsert($dbc, $csaladi_auto_alap, $csaladi_auto_premium_kozmikus, $csaladi_auto_professzionalis_galaktikus, $csaladi_auto_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO csaladi_auto (alap,premium_kozmikus,professzionalis_galaktikus,megjegyzes) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $csaladi_auto_alap, $csaladi_auto_premium_kozmikus, $csaladi_auto_professzionalis_galaktikus, $csaladi_auto_megjegyzes);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
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


function getCsaladiAutoById($dbc, $csaladi_auto_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM csaladi_auto WHERE csaladi_auto_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $csaladi_auto_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function updateCsaladiAuto($dbc, $csaladi_auto_id, $csaladi_auto_alap, $csaladi_auto_premium_kozmikus, $csaladi_auto_professzionalis_galaktikus, $csaladi_auto_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE csaladi_auto SET alap = ?, premium_kozmikus = ?, professzionalis_galaktikus = ?, megjegyzes = ?  WHERE csaladi_auto_id = ?')) {
        mysqli_stmt_bind_param($statement, "ssssi", $csaladi_auto_alap, $csaladi_auto_premium_kozmikus, $csaladi_auto_professzionalis_galaktikus, $csaladi_auto_megjegyzes, $csaladi_auto_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}
