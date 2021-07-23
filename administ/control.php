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