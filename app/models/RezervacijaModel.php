<?php

/*
 * Klasa RezervacijaModel implementira ModelInterface
 */
class RezervacijaModel implements ModelInterface {
    
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
    
    public static function getById($id){
        $rezervacija_id = intval ($id);
        $SQL = 'SELECT * FROM rezervacija WHERE rezervacija_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $prep->execute([$rezervacija_id]);
        return $prep->fetch(PDO::FETCH_OBJ);
    }
    
    /*
     * Funkcija edit uzima varijable u zagradi
     * Preko SQL se menjaju odredjeni zapisi neke rezervacije
     * Posle izmene vraca se rezervacija sa izmenjenim vrednostima za odredjene varijble
     */
    public static function edit($broj, $datum_polaska, $datum_odlaska, $broj_osoba, $ime, $prezime, $email, $id){
        $SQL = 'UPDATE rezervacija SET broj = ?, datum_polaska = ?, datum_odlaska = ?, broj_osoba = ?, ime = ?, prezime = ?, email = ? WHERE rezervacija_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$broj, $datum_polaska, $datum_odlaska, $broj_osoba, $ime, $prezime, $email, $id]); 
    }
    
    /*
     * Funkcija delete uzima id
     * Preko SQL se brisu rezervacije
     */
    public static function delete($id){
        $SQL = 'DELETE FROM rezervacija WHERE rezervacija_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$id]);
    }
}