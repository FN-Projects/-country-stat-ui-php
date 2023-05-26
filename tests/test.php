<?php

use Core\Helper;
use Models\Country;

$countries = Country::findByContinent("Oceanie");
Helper::debug($countries);
//$counts = Country::CountLessArticle();
//Helper::debug($counts);
