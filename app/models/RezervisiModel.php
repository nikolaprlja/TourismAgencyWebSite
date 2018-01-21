<?php

/*
 * Klasa RezervisiModel implementira ModelInterface
 */
class RezervisiModel implements ModelInterface {
    
    /*
     * Funkcija getAll uzima sve informacije iz tabele rezervacija
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getAll(){
        $SQL = 'SELECT * FROM rezervacija;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_OBJ);
    }
    
    /*
     * Funkcija getById uzima iz rezervacija rezervaciju preko id-a
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getById($id){
        $rezervacija_id = intval ($id);
        $SQL = 'SELECT * FROM rezervacija WHERE rezervacija_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$rezervacija_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    
    /*
     * Pomocu funkcije add, varijble u zagradi ce se ubaciti u tabelu rezervacija
     * SQL se sve varijble ubacuju u tabelu
     * Posle toga se vraca informacija za novim zapisom u bazi
     */
    public static function add($datum_polaska, $datum_odlaska, $broj_osoba, $ime, $prezime, $email, $id){
        $SQL = 'INSERT INTO rezervacija (datum_polaska, datum_odlaska, broj_osoba, ime, prezime, email) VALUES (?, ?, ?, ?, ?, ?);';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute([$datum_polaska, $datum_odlaska, $broj_osoba, $ime, $prezime, $email, $id]); 
        if ($res) {
            return DataBase::getInstance()->lastInsertId();
        } else {
            return false;
        }
    }   
}