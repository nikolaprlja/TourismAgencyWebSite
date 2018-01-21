<?php

/*
 * Klasa AdminModel implementira ModelInterface
 */
class AdminModel implements ModelInterface {
    
    
    /*
     * Funkcija getAll uzima sve informacije iz tabele admin
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getAll() {
        $SQL = 'SELECT * FROM admin;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute();
        if ($res) {
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    
    /*
     * Funkcija getById uzima iz tabele admin preko ID svih admin naloga
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getById($id) {
        $SQL = 'SELECT * FROM admin WHERE admin_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute([$id]);
        if ($res) {
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
    
    /*
     * Funkcija getByUsernameAndPasswordHash uzima iz tabele admin korisnicko i hashovanu lozinku
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
     public static function getByUsernameAndPasswordHash($username, $passwordHash) {
        $SQL = 'SELECT * FROM admin WHERE `username` = ? AND `password` = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute([$username, $passwordHash]);
        if ($res) {
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }

}
