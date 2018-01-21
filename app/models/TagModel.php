<?php

/*
 * Klasa UserModel implementira ModelInterface
 */
class TagModel implements ModelInterface {
    
    /*
     * Funkcija getAll uzima sve informacije iz tabele tag
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getAll(){
        $SQL = 'SELECT * FROM tagovi;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    
    /*
     * Funkcija getById uzima iz tabele tag odredjeno tag preko id-a
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getById($id){
        $tagovi_id = intval ($id);
        $SQL = 'SELECT * FROM tagovi WHERE tagovi_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$tagovi_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    
    public static function getSmestajForTagoviId($id){
        $smestaj_id = intval($smestaj_id);
        $SQL = 'SELECT * FROM smestaj_tag WHERE tagovi_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$smestaj_id]);
        $spisak = $prep->fetchAll(PDO::FETCH_OBJ);
        $list = [];
        foreach ($spisak as $item){
            $list[] = SmestajModel::getById($item->smestaj_id);
        }
        return $list;
    }
}
