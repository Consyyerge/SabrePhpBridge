<?php

require_once "vendor/cometari/sabreapi.php";
require_once "vendor/cometari/utils.php";
use cometari\SabreAPI as Sabre;

// -------------------------------- main-----------------------------------------------
$sabre = new Sabre();
$response = $sabre->get($_SERVER['REQUEST_URI']);

if (Utils::startsWith($_SERVER['REQUEST_URI'], "/shop/flights/fares")) {
    $response = $sabre->formDestinationFinderResponse($response);
}

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

echo $response;
// ------------------------------------------------------------------------------------
