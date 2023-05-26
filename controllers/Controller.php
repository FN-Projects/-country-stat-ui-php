<?php

namespace Controllers;

abstract class Controller {
    
    /**
     * Display view
     *
     * @param string $file
     * @param array $data
     * @return void
     */
    public function render(string $file, array $data = []){
        // Récupère les données et les extrait sous forme de variables
        extract($data);
        ob_start();
        require_once('views/'.$file.'.php');
        $content = ob_get_clean();
        require_once('views/layouts/layout.php');
    }

}