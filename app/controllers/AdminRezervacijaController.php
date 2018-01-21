<?php

/*
 * Klasa AdminRezervacijaController nasledjuje AdminController
 */
class AdminRezervacijaController extends AdminController {

    /*
     * Funkckija index poziva sve informacije iz RezervacijaModel php fajla
     * Za to se koristi getAll funkcija
     * Preko isset, metodom post i preko dugmeta sa klasom delBtn odrejena rezervacija ce da se izbrise
     */ 
    public function index() {
        $this->set('rezervacija', RezervacijaModel::getAll());
        if (isset($_POST['delBtn'])) {
            $this->delete();
        }
    }

    /*
     * Funkckija adminStranarez poziva sve informacije iz RezervacijaModel php fajla
     * Za to se koristi getAll funkcije
     * Preko isset, metodom post i preko dugmeta sa klasom delBtn odrejena rezervacija ce da se izbrise
     */ 
    public function adminStranarez() {
        $this->set('rezervacija', RezervacijaModel::getAll());
        if (isset($_POST['delBtn'])) {
            $this->delete();
        }
    }
    
    /*
     * Funkckija edit preko isset i post metoda preko dugmeta sa klasom editBtn ce izmeniti vec postojuce zapise u bazi (tabela rezervacija)
     * Varijable koje se oznacavju sa $ prolaze kroz filtriranje unosa preko filter_input
     * FILTER_SANITIZE_STRING sluzi za lakseg razumenjava odredjenih simbola da ne bi doslo do greske
     * FILTER_SANITIZE_INT sluzi za lakseg razumenjava numerickih karaktera
     * U slucaju da dodje do neke greske, pojavice se poruka koja kaze da je doslo do greske, u suprotnom bice te vraceni na definisanu stranicu (adminpanelrezervacija)
     */   
    public function edit($id) {
        $rezervacija = RezervacijaModel::getById($id);
        $this->set('rezervacija', $rezervacija);
        if (isset($_POST['editBtn'])) {

            $broj = filter_input(INPUT_POST, 'broj', FILTER_SANITIZE_NUMBER_INT);
            $datum_polaska = filter_input(INPUT_POST, 'datum_polaska', FILTER_SANITIZE_STRING);
            $datum_odlaska = filter_input(INPUT_POST, 'datum_odlaska', FILTER_SANITIZE_STRING);
            $broj_osoba = filter_input(INPUT_POST, 'broj_osoba', FILTER_SANITIZE_NUMBER_INT);
            $ime = filter_input(INPUT_POST, 'ime', FILTER_SANITIZE_STRING);
            $prezime = filter_input(INPUT_POST, 'prezime', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

            $res = RezervacijaModel::edit($broj, $datum_polaska, $datum_odlaska, $broj_osoba, $ime, $prezime, $email, $id);

            if ($res) {
                Misc::redirect('adminpanelrezervacija');
            } else {
                $this->set('message', 'Doslo je do grekse');
            }
        }
    }

     /*
     * Funkckija delete preko $_POST ce proveravati zapise u bazi koji treba da budu obrisani
     * Koristeci id rezervacija (varijabla rezervacija_id) i varijble confirmed koja treba da bude 1, mozemo da obrisemo odredjenu rezervaciju iz baze
     * Ako dodje do greske, izaci ce poruka koja ce nam to ruci, a ko ne, vraticemo se samo na definisanu stranicu (adminpanel)
     * RezervacijaModel::getById izvlaci rezervaciju iz baze preko njegovog id-a koja je Auto Increment
     */ 
    public function delete() {
        if ($_POST) {
            $rezervacija_id = filter_input(INPUT_POST, 'rezervacija_id', FILTER_SANITIZE_NUMBER_INT);
            $confirmed = filter_input(INPUT_POST, 'confirmed', FILTER_SANITIZE_NUMBER_INT);
            if ($confirmed == 1) {
                $res = RezervacijaModel::delete($rezervacija_id);
                if ($res) {
                    Misc::redirect('adminpanelrezervacija');
                } else {
                    $this->set('message', 'Doslo je do grekse');
                }
            }
        }
        $rezervacija = RezervacijaModel::getById($rezervacija_id);
        $this->set('rezervacija', $rezervacija);
    }

}
