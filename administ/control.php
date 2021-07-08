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

$csaladi_auto_alap = filter_input(INPUT_POST, "csaladi_auto_alap", FILTER_SANITIZE_SPECIAL_CHARS);
$csaladi_auto_premium_kozmikus = filter_input(INPUT_POST, "csaladi_auto_premium_kozmikus", FILTER_SANITIZE_SPECIAL_CHARS);
$csaladi_auto_professzionalis_galaktikus = filter_input(INPUT_POST, "csaladi_auto_professzionalis_galaktikus", FILTER_SANITIZE_SPECIAL_CHARS);
$csaladi_auto_megjegyzes = filter_input(INPUT_POST, "csaladi_auto_megjegyzes", FILTER_SANITIZE_SPECIAL_CHARS);
$csaladi_auto_id = filter_input(INPUT_GET, "csaladi_auto_id", FILTER_SANITIZE_SPECIAL_CHARS);
