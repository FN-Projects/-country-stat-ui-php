<?php

use Controllers\CountryController;

$route->get("/", function () {(new CountryController)->index();});

