<?php

namespace Core;

class Application
{
    private static $info =  array('appName' => "Nores <strong>Classrooms</strong>");

    public static function getAppInfo(string $key)
    {
        return self::$info[$key];
    }

    public function run()
    {
        try {
            $this->routes();
        } catch (\Throwable $e) {
            echo "Error occurred : " . $e->getMessage();
        }
    }

    
    /**
     * Run all routes
     *
     * @return void
     */
    public function routes()
    {
        $route = new Route();
        require_once dirname(__DIR__) . '/routes/web.php';
        $route->run();
    }
    
}
