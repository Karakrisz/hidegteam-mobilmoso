<?php
session_start();

$pEvent = filter_input(INPUT_POST, "event", FILTER_SANITIZE_SPECIAL_CHARS);
$gEvent = filter_input(INPUT_GET, "event", FILTER_SANITIZE_SPECIAL_CHARS);

$kis_auto_alap = filter_input(INPUT_POST, "kis_auto_alap", FILTER_SANITIZE_SPECIAL_CHARS);
$kis_auto_premium_kozmikus = filter_input(INPUT_POST, "kis_auto_premium_kozmikus", FILTER_SANITIZE_SPECIAL_CHARS);
$kis_auto_professzionalis_galaktikus = filter_input(INPUT_POST, "kis_auto_professzionalis_galaktikus", FILTER_SANITIZE_SPECIAL_CHARS);
$kis_auto_megjegyzes = filter_input(INPUT_POST, "kis_auto_megjegyzes", FILTER_SANITIZE_SPECIAL_CHARS);
$kis_auto_id = filter_input(INPUT_GET, "kis_auto_id", FILTER_SANITIZE_SPECIAL_CHARS);

$varosi_auto_alap = filter_input(INPUT_POST, "varosi_auto_alap", FILTER_SANITIZE_SPECIAL_CHARS);
$varosi_auto_premium_kozmikus = filter_input(INPUT_POST, "varosi_auto_premium_kozmikus", FILTER_SANITIZE_SPECIAL_CHARS);
$varosi_auto_professzionalis_galaktikus = filter_input(INPUT_POST, "varosi_auto_professzionalis_galaktikus", FILTER_SANITIZE_SPECIAL_CHARS);
$varosi_auto_megjegyzes = filter_input(INPUT_POST, "varosi_auto_megjegyzes", FILTER_SANITIZE_SPECIAL_CHARS);
$varosi_auto_id = filter_input(INPUT_GET, "varosi_auto_id", FILTER_SANITIZE_SPECIAL_CHARS);

$suv_terepjaro_alap = filter_input(INPUT_POST, "suv_terepjaro_alap", FILTER_SANITIZE_SPECIAL_CHARS);
$suv_terepjaro_premium_kozmikus = filter_input(INPUT_POST, "suv_terepjaro_premium_kozmikus", FILTER_SANITIZE_SPECIAL_CHARS);
$suv_terepjaro_professzionalis_galaktikus = filter_input(INPUT_POST, "suv_terepjaro_professzionalis_galaktikus", FILTER_SANITIZE_SPECIAL_CHARS);
$suv_terepjaro_megjegyzes = filter_input(INPUT_POST, "suv_terepjaro_megjegyzes", FILTER_SANITIZE_SPECIAL_CHARS);
$suv_terepjaro_id = filter_input(INPUT_GET, "suv_terepjaro_id", FILTER_SANITIZE_SPECIAL_CHARS);

$kishaszonjarmu_alap = filter_input(INPUT_POST, "kishaszonjarmu_alap", FILTER_SANITIZE_SPECIAL_CHARS);
$kishaszonjarmu_premium_kozmikus = filter_input(INPUT_POST, "kishaszonjarmu_premium_kozmikus", FILTER_SANITIZE_SPECIAL_CHARS);
$kishaszonjarmu_professzionalis_galaktikus = filter_input(INPUT_POST, "kishaszonjarmu_professzionalis_galaktikus", FILTER_SANITIZE_SPECIAL_CHARS);
$kishaszonjarmu_megjegyzes = filter_input(INPUT_POST, "kishaszonjarmu_megjegyzes", FILTER_SANITIZE_SPECIAL_CHARS);
$kishaszonjarmu_id = filter_input(INPUT_GET, "kishaszonjarmu_id", FILTER_SANITIZE_SPECIAL_CHARS);


$belso_extrak_megnevezes = filter_input(INPUT_POST, "belso_extrak_megnevezes", FILTER_SANITIZE_SPECIAL_CHARS);
$belso_extrak_ar = filter_input(INPUT_POST, "belso_extrak_ar", FILTER_SANITIZE_SPECIAL_CHARS);
$belso_extrak_id = filter_input(INPUT_GET, "belso_extrak_id", FILTER_SANITIZE_SPECIAL_CHARS);

$telefonszam = filter_input(INPUT_POST, "telefonszam", FILTER_SANITIZE_SPECIAL_CHARS);
$telefonszam_id = filter_input(INPUT_GET, "telefonszam_id", FILTER_SANITIZE_SPECIAL_CHARS);

$address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
$telefon = filter_input(INPUT_POST, "telefon", FILTER_SANITIZE_SPECIAL_CHARS);
$admin_email = filter_input(INPUT_POST, "admin_email", FILTER_SANITIZE_SPECIAL_CHARS);
$kapcsolat_id = filter_input(INPUT_GET, "kapcsolat_id", FILTER_SANITIZE_SPECIAL_CHARS);

$bekoszono_szoveg = filter_input(INPUT_POST, "bekoszono_szoveg", FILTER_SANITIZE_SPECIAL_CHARS);
$bekoszono_szoveg_id = filter_input(INPUT_GET, "bekoszono_szoveg_id", FILTER_SANITIZE_SPECIAL_CHARS);

$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "useremail", FILTER_SANITIZE_SPECIAL_CHARS);
