<?php

/*
 * Klasa AdminModel implementira ModelInterface
 */
class UserModel implements ModelInterface {
    
    /*
     * Funkcija getAll uzima sve informacije iz tabele user
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getAll() {
        $SQL = 'SELECT * FROM user;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute();
        if ($res) {
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    
    /*
     * Funkcija getById uzima iz tabele user preko ID svih korisnickih naloga
     * Za ovo se koristi SQL
     * Objekat se uzima preko PDO::FETCH_OBJ
     */
    public static function getById($id) {
        $SQL = 'SELECT * FROM user WHERE user_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute([$id]);
        if ($res) {
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }

    public static function getByUsernameAndPasswordHash($username, $passwordHash) {
        $SQL = 'SELECT * FROM user WHERE `username` = ? AND `password` = ? AND active = 1;';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute([$username, $passwordHash]);
        if ($res) {
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
    
    public static function add($username, $password){
        $SQL = 'INSERT INTO user (username, password) VALUES (?, ?);';
        $prep = DataBase::getInstance()->prepare($SQL);
        $res = $prep->execute([$username, $password]); 
        if ($res) {
            return DataBase::getInstance()->lastInsertId();
        } else {
            return false;
        }
    }
    
    public static function edit($username, $password){
        $SQL = 'UPDATE user SET username = ?, password = ? WHERE user_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$username, $password]); 
    }
    
    public static function delete($id){
        $SQL = 'DELETE FROM user WHERE user_id = ?;';
        $prep = DataBase::getInstance()->prepare($SQL);
        return $prep->execute([$id]);
    }
}

