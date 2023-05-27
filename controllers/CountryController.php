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
            $countriesArticleLe = Country::findByArticle("Le");
            $countriesArticleLa = Country::findByArticle("La");
            $countriesArticleL = Country::findByArticle("L");
            $countriesArticleLes = Country::findByArticle("Les");
            $countriesArticle = Country::findByArticleWithout();

            $totalCountry = Country::Count();
            $totalCountryWithArticleLe = Country::CountByArticle("Le");
            $totalCountryWithArticleLa = Country::CountByArticle("La");
            $totalCountryWithArticleL = Country::CountByArticle("L");
           
            $totalCountryWithArticleLes = Country::CountByArticle("Les");
            $totalCountryWithoutArticle = Country::CountLessArticle();
            $this->render("home", compact('title', 'countries', 'totalCountry', 
            'totalCountryWithArticleLe', 'totalCountryWithArticleLa', 'totalCountryWithArticleL', 
            'totalCountryWithArticleLes', 'totalCountryWithoutArticle','countriesArticleLe','countriesArticleLa','countriesArticleL',
        'countriesArticleLes','countriesArticle'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function mapView(){
        $title = "Map View";
        $this->render("mapView" ,compact("title"));
    }
}
