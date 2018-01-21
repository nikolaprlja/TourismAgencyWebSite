<?php

/*
 * Klasa VrstaSmestajaModel implementira ModelInterface
 */
class VrstaSmestajaModel implements ModelInterface {
    
    /*
     * Funkcija getAll uzima sve informacije iz tabele vrsta_smestaja
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getAll(){
        $SQL = 'SELECT * FROM vrsta_smestaja ORDER BY `naziv`;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    
    /*
     * Funkcija getById uzima iz vrsta_smestaja definisane vrste smestaja preko id-a
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getById($id){
        $vrsta_smestaja_id = intval ($id);
        $SQL = 'SELECT * FROM vrsta_smestaja WHERE vrsta_smestaja_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$vrsta_smestaja_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    
    /*
     * Funkcija getById uzima iz vrsta_smestaja definisane vrste smestaja preko slug-a
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getBySlug($slug){
        $SQL = 'SELECT * FROM vrsta_smestaja WHERE slug = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$slug]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
}
