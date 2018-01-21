<?php

class UserRezervisiController extends UserController {
    
    /*
     * metod index sluzi za pokretanje index stranice preko rute u Rezervisi view-u
     */
    public function index() {
        
    }
    
    /*
     * metod userStrana sluzi za pokretanje userStrana preko rute za Rezervisi view
     */
    public function userStrana() {
        
    }
    
    /*
     * Funkckija add preko isset i post metoda preko dugmeta sa klasom addBtn ce dodavati novi zapise u bazu, konkretno u tabelu rezervacija
     * Varijable koje se oznacavju sa $ prolaze kroz filtriranje unosa preko filter_input
     * FILTER_SANITIZE_STRING sluzi za lakse razumenjava odredjenih simbola da ne bi doslo do greske
     * FILTER_SANITIZE_INT sluzi za lakse razumevanje numereckih karaktera
     * U slucaju da dodje do neke greske, izaci ce pop up sa porukom kako je doslo do greske, u suprotnom samo ste poslati na defnisanu stranicu (adminpanel)
     */ 
    public function add() {
        if (isset($_POST['addBtn'])) {

            $datum_polaska = filter_input(INPUT_POST, 'datum_polaska', FILTER_SANITIZE_STRING);
            $datum_odlaska = filter_input(INPUT_POST, 'datum_odlaska', FILTER_SANITIZE_STRING);
            $broj_osoba = filter_input(INPUT_POST, 'broj_osoba', FILTER_SANITIZE_STRING);
            $ime = filter_input(INPUT_POST, 'ime', FILTER_SANITIZE_STRING);
            $prezime = filter_input(INPUT_POST, 'prezime', FILTER_SANITIZE_NUMBER_INT);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_NUMBER_INT);

            $rezervacija = SmestajModel::add($datum_polaska, $datum_odlaska, $broj_osoba, $ime, $prezime, $email);

            if ($rezervacija) {
                Misc::redirect('adminpanel');
                $this->set('message', 'Doslo je do greske prilikom dodavanje smestaj u bazu podataka.');
            }
        }
    }
}