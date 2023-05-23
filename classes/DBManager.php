<?php


class DBManager extends PDO {
    private const SERVER = "localhost";
    private const USER = "usercountrystat";
    private const PWD = "stat@2023";
    private const DB = "country_stat_db";
    private const DSN="mysql:host=".self::SERVER.";dbname=".self::DB;

    private static $instance;

    protected function __clone(){
        return new Exception('Le clonage est interdit');
    }

    /***
     * Return unique instance PDO
     * 
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        if(!self::$instance){
            try {
                self::$instance= new PDO(self::DSN,self::USER,self::PWD);
            } catch (PDOException $e) {
                die("Erreur connexion:".$e->getMessage());
            }
        }
        return self::$instance;
    }
}