<?php

class Country {
    
    public static function findAll(){
        $sql = "select * from countries";
        $query = DBManager::getInstance()->query($sql);
        $resultat = [];
        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $resultat[] = $data;
        }
        return $resultat;
    }
}