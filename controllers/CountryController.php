<?php

namespace Controllers;

use Core\Helper;
use Models\Country;

class CountryController extends Controller
{


    public function index()
    {
        try {
            $title = "Home";
            $countries = Country::findAll();
            $totalCountry = Country::Count();
            $totalCountryWithArticleLe = Country::CountByArticle("Le");
            $totalCountryWithArticleLa = Country::CountByArticle("La");
            $totalCountryWithArticleL = Country::CountByArticle("L");
           
            $totalCountryWithArticleLes = Country::CountByArticle("Les");
            $totalCountryWithoutArticle = Country::CountLessArticle();
            $this->render("home", compact('title', 'countries', 'totalCountry', 'totalCountryWithArticleLe', 'totalCountryWithArticleLa', 'totalCountryWithArticleL', 'totalCountryWithArticleLes', 'totalCountryWithoutArticle'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
