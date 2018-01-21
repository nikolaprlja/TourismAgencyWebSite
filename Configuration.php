<?php
    abstract class Configuration {
        const DB_HOST = 'localhost';
        const DB_NAME = 'projekatWeb';
        const DB_USER = 'root';
        const DB_PASS = '';

        const BASE_PATH = '/MVC_empty/';
        const BASE_URL = 'http://localhost' . Configuration::BASE_PATH;
        
        const USER_SALT = '08t9eryguidufhv98q7y3465yer9gferig';
    }
