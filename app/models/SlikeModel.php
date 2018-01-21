<?php

/*
 * Klasa SlikeModel implementira ModelInterface
 */
class SlikeModel implements ModelInterface {
    
    /*
     * Funkcija getAll uzima sve informacije iz tabele slike
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getAll(){
        $SQL = 'SELECT * FROM slike;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    
    /*
     * Funkcija getById uzima iz tabele slike sliku preko id-a
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getById($id){
        $slike_id = intval ($id);
        $SQL = 'SELECT * FROM slike WHERE slike_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$slike_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
}
