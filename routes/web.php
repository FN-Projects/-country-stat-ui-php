<?php

use Controllers\CountryController;

$route->get("/", function () {(new CountryController)->index();});
$route->get("/tab", function () {(new CountryController)->index();});
$route->get("/map", function () {(new CountryController)->mapView();});

