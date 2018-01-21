<?php

class SmestajModel implements ModelInterface {
    
    public static function getAll(){
        $SQL = 'SELECT * FROM smestaj;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    
    public static function getById($id){
        $smestaj_id = intval ($id);
        $SQL = 'SELECT * FROM smestaj WHERE smestaj_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$smestaj_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    
    public static function add($naziv, $zemlja, $mesto, $cena, $vrsta_smestaja){
        $SQL = 'INSERT INTO smestaj (naziv, zemlja, mesto, cena, vrsta_smestaja_id) VALUES (?, ?, ?, ?, ?);';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute([$naziv, $zemlja, $mesto, $cena, $vrsta_smestaja]); 
        if ($res) {
            return DataBase::getInstance()->lastInsertId();
        } else {
            return false;
        }
    }
    
    public static function edit($naziv, $zemlja, $mesto, $cena, $vrsta_smestaja, $id){
        $SQL = 'UPDATE smestaj SET naziv = ?, zemlja = ?, mesto = ?, cena = ?, vrsta_smestaja_id = ? WHERE smestaj_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$naziv, $zemlja, $mesto, $cena, $vrsta_smestaja, $id]); 
    }
    
    public static function delete($id){
        $SQL = 'DELETE FROM smestaj WHERE smestaj_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$id]);
    }
}