<?php
require_once("config.php");
require_once("control.php");


function esc($string)
{
    echo htmlspecialchars($string);
}


function logMessage($level, $message)
{

    $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2)[0];
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] " . date(DATE_ISO8601) . " " . $backtrace["file"] . ":" . $backtrace["line"] .
        " $message" . PHP_EOL);
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

    case 'suvTerepjaroInsert':
        suvTerepjaroInsert($dbc, $suv_terepjaro_alap, $suv_terepjaro_premium_kozmikus, $suv_terepjaro_professzionalis_galaktikus, $suv_terepjaro_megjegyzes);
        break;

    case 'suvTerepjaroEdit':
        $uzenet = updateSuvTerepjaro($dbc, $suv_terepjaro_id, $suv_terepjaro_alap, $suv_terepjaro_premium_kozmikus, $suv_terepjaro_professzionalis_galaktikus, $suv_terepjaro_megjegyzes);
        break;

    case 'kishaszonJarmuInsert':
        kishaszonjarmuInsert($dbc, $kishaszonjarmu_alap, $kishaszonjarmu_premium_kozmikus, $kishaszonjarmu_professzionalis_galaktikus, $kishaszonjarmu_megjegyzes);
        break;

    case 'kishaszonjarmuEdit':
        $uzenet = updateKishaszonjarmu($dbc, $kishaszonjarmu_id, $kishaszonjarmu_alap, $kishaszonjarmu_premium_kozmikus, $kishaszonjarmu_professzionalis_galaktikus, $kishaszonjarmu_megjegyzes);
        break;

    case 'belsoExtrakInsert':
        belsoExtrakInsert($dbc, $belso_extrak_megnevezes, $belso_extrak_ar);
        break;

    case 'belsoExtrakEdit':
        $uzenet = updateBelsoExtrak($dbc, $belso_extrak_id, $belso_extrak_megnevezes, $belso_extrak_ar);
        break;

    case 'telefonszamInsert':
        telefonszamInsert($dbc, $telefonszam);
        break;

    case 'telefonszamEdit':
        $uzenet = telefonszamEdit($dbc, $telefonszam_id, $telefonszam);
        break;

    case 'kapcsolatInsert':
        kapcsolatInsert($dbc, $address, $telefon, $admin_email);
        break;

    case 'kapcsolatEdit':
        $uzenet =  kapcsolatEdit($dbc, $address, $telefon, $admin_email, $kapcsolat_id);
        break;

    case 'bekoszonoInsert':
        bekoszonoInsert($dbc, $bekoszono_szoveg);
        break;

    case 'bekoszonoEdit':
        $uzenet =  bekoszonoSzovegEdit($dbc, $bekoszono_szoveg, $bekoszono_szoveg_id);
        break;

    case 'loginUser':

        loginUser($dbc, $email, $password);

        $user = LoginUser($dbc, $email, $password);

        if ($user != null) {

            $_SESSION["user"] = [
                "name" => $user["name"],
                "id" => $user["id"]
            ];

            header('Location: index.php');
        } else {

            $_SESSION["containsError"] = 1;
            header('Location: login.php');
            die;
        }

        break;
}

function createUser()
{
    $loggedIn = array_key_exists("user", $_SESSION);
    return [
        "loggedIn" => $loggedIn,
        "name" => $loggedIn ? $_SESSION["user"]["name"] : null,
        "id" => $loggedIn ? $_SESSION["user"]["id"] : null
    ];
}

$containsError = array_key_exists("containsError", $_SESSION);
unset($_SESSION["containsError"]);

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


function suvTerepjaroInsert($dbc, $suv_terepjaro_alap, $suv_terepjaro_premium_kozmikus, $suv_terepjaro_professzionalis_galaktikus, $suv_terepjaro_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO suv_terepjaro (alap,premium_kozmikus,professzionalis_galaktikus,megjegyzes) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $suv_terepjaro_alap, $suv_terepjaro_premium_kozmikus, $suv_terepjaro_professzionalis_galaktikus, $suv_terepjaro_megjegyzes);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
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

function getSuvTerepjaroById($dbc, $suv_terepjaro_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM suv_terepjaro WHERE suv_terepjaro_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $suv_terepjaro_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function updateSuvTerepjaro($dbc, $suv_terepjaro_id, $suv_terepjaro_alap, $suv_terepjaro_premium_kozmikus, $suv_terepjaro_professzionalis_galaktikus, $suv_terepjaro_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE suv_terepjaro SET alap = ?, premium_kozmikus = ?, professzionalis_galaktikus = ?, megjegyzes = ?  WHERE suv_terepjaro_id = ?')) {
        mysqli_stmt_bind_param($statement, "ssssi", $suv_terepjaro_alap, $suv_terepjaro_premium_kozmikus, $suv_terepjaro_professzionalis_galaktikus, $suv_terepjaro_megjegyzes, $suv_terepjaro_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function kishaszonjarmuInsert($dbc, $kishaszonjarmu_alap, $kishaszonjarmu_premium_kozmikus, $kishaszonjarmu_professzionalis_galaktikus, $kishaszonjarmu_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO kishaszonjarmu (alap,premium_kozmikus,professzionalis_galaktikus,megjegyzes) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $kishaszonjarmu_alap, $kishaszonjarmu_premium_kozmikus, $kishaszonjarmu_professzionalis_galaktikus, $kishaszonjarmu_megjegyzes);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function kishaszonjarmuvek($dbc)
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


function kishaszonjarmuById($dbc, $kishaszonjarmu_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM kishaszonjarmu WHERE kishaszonjarmu_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $kishaszonjarmu_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function updateKishaszonjarmu($dbc, $kishaszonjarmu_id, $kishaszonjarmu_alap, $kishaszonjarmu_premium_kozmikus, $kishaszonjarmu_professzionalis_galaktikus, $kishaszonjarmu_megjegyzes)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE kishaszonjarmu SET alap = ?, premium_kozmikus = ?, professzionalis_galaktikus = ?, megjegyzes = ?  WHERE kishaszonjarmu_id = ?')) {
        mysqli_stmt_bind_param($statement, "ssssi", $kishaszonjarmu_alap, $kishaszonjarmu_premium_kozmikus, $kishaszonjarmu_professzionalis_galaktikus, $kishaszonjarmu_megjegyzes, $kishaszonjarmu_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function belsoExtrakInsert($dbc, $belso_extrak_megnevezes, $belso_extrak_ar)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO belso_extrak (belso_extrak_megnevezes,belso_extrak_ar) VALUES (?,?)')) {
        mysqli_stmt_bind_param($statement, 'ss', $belso_extrak_megnevezes, $belso_extrak_ar);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
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

function belsoExtrakById($dbc, $belso_extrak_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM belso_extrak WHERE belso_extrak_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $belso_extrak_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function updateBelsoExtrak($dbc, $belso_extrak_id, $belso_extrak_megnevezes, $belso_extrak_ar)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE belso_extrak SET belso_extrak_megnevezes = ?, belso_extrak_ar = ? WHERE belso_extrak_id = ?')) {
        mysqli_stmt_bind_param($statement, "ssi", $belso_extrak_megnevezes, $belso_extrak_ar, $belso_extrak_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function telefonszamInsert($dbc, $telefonszam)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO telefonszam (telefonszam) VALUES (?)')) {
        mysqli_stmt_bind_param($statement, 's', $telefonszam);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function telefonszam($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from telefonszam')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function telefonszamById($dbc, $telefonszam_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM telefonszam WHERE telefonszam_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $telefonszam_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function telefonszamEdit($dbc, $telefonszam_id, $telefonszam)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE telefonszam SET telefonszam = ? WHERE telefonszam_id = ?')) {
        mysqli_stmt_bind_param($statement, "si", $telefonszam, $telefonszam_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function kapcsolatInsert($dbc, $address, $telefon, $admin_email)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO kapcsolat (address, telefon, email) VALUES (?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'sss', $address, $telefon, $admin_email);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function kapcsolat($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from kapcsolat')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function kapcsolatById($dbc, $kapcsolat_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM kapcsolat WHERE kapcsolat_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $kapcsolat_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function kapcsolatEdit($dbc, $address, $telefon, $admin_email, $kapcsolat_id)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE kapcsolat SET address = ?, telefon = ?, email = ? WHERE kapcsolat_id = ?')) {
        mysqli_stmt_bind_param($statement, "sssi", $address, $telefon, $admin_email, $kapcsolat_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function bekoszonoInsert($dbc, $bekoszono_szoveg)
{
    if ($statement = mysqli_prepare($dbc, 'INSERT INTO bekoszono_szoveg (bekoszono_szoveg) VALUES (?)')) {
        mysqli_stmt_bind_param($statement, 's', $bekoszono_szoveg);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function bekoszonoSzoveg($dbc)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * from bekoszono_szoveg')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function bekoszonoSzovegById($dbc, $bekoszono_szoveg_id)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT * FROM bekoszono_szoveg WHERE bekoszono_szoveg_id = ?')) {
        mysqli_stmt_bind_param($statement, "i", $bekoszono_szoveg_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}


function bekoszonoSzovegEdit($dbc, $bekoszono_szoveg, $bekoszono_szoveg_id)
{
    if ($statement = mysqli_prepare($dbc, 'UPDATE bekoszono_szoveg SET bekoszono_szoveg = ? WHERE bekoszono_szoveg_id = ?')) {
        mysqli_stmt_bind_param($statement, "si", $bekoszono_szoveg, $bekoszono_szoveg_id);
        mysqli_stmt_execute($statement);
        $uzenet = "Rekord módosítva!";
        return $uzenet;
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}

function loginUser($dbc, $email, $password)
{
    if ($statement = mysqli_prepare($dbc, 'SELECT id, name, password FROM users WHERE email = ?')) {
        mysqli_stmt_bind_param($statement, "s", $email);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        if ($record != null && password_verify($password, $record["password"])) {
            $statement = mysqli_prepare($dbc, 'UPDATE users SET last_login = ? WHERE email = ?');
            mysqli_stmt_bind_param($statement, 'ss', date("Y.m.d H:i:s"), $email);
            mysqli_stmt_execute($statement);
            return $record;
            header("Content-type: application/script");
        } else {
            return null;
        }
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($dbc));
        errorPage();
    }
}
