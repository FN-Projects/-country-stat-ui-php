<?php
namespace Core;

use function PHPSTORM_META\map;

class Helper {

    public static function debug($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }

    public static function format_display_article($article){
        $html = match ($article) {
            'Le' => "<span class='badge bg-danger'>$article</span>",
            'La' => "<span class='badge bg-info'>$article</span>",
            'L' => "<span class='badge bg-dark'>$article</span>",
            'Les' => "<span class='badge bg-primary'>$article</span>",
            default  => "<span class='badge bg-secondary'>Indefini</span>"
        };
        return $html;
    }
}