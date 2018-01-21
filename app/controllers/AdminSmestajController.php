<?php
class AdminSmestajController extends AdminController {

    public function index() {
        $this->set('smestaj', SmestajModel::getAll());
        if (isset($_POST['delBtn'])) {
            $this->delete();
        }     
    }
    
    public function adminStrana() {
        $this->set('smestaj', SmestajModel::getAll());
        if (isset($_POST['delBtn'])) {
            $this->delete();
        }
    }

    public function add() {
        $this->set('vrstaSmestaja', VrstaSmestajaModel::getAll());
        if (isset($_POST['addBtn'])) {

            $naziv = filter_input(INPUT_POST, 'naziv', FILTER_SANITIZE_STRING);
            $zemlja = filter_input(INPUT_POST, 'zemlja', FILTER_SANITIZE_STRING);
            $mesto = filter_input(INPUT_POST, 'mesto', FILTER_SANITIZE_STRING);
            $cena = filter_input(INPUT_POST, 'cena', FILTER_SANITIZE_STRING);
            $vrsta_smestaja = filter_input(INPUT_POST, 'vrsta', FILTER_SANITIZE_NUMBER_INT);

            $smestaj = SmestajModel::add($naziv, $zemlja, $mesto, $cena, $vrsta_smestaja);

            if ($smestaj) {
                Misc::redirect('adminpanel');
                $this->set('message', 'Doslo je do greske prilikom dodavanje smestaj u bazu podataka.');
            }
        }
    }
    
    public function edit($id) {
        $smestaj = SmestajModel::getById($id);
        $this->set('smestaj', $smestaj);
        $this->set('vrstaSmestaja', VrstaSmestajaModel::getAll());
        if (isset($_POST['editBtn'])) {

            $naziv = filter_input(INPUT_POST, 'naziv', FILTER_SANITIZE_STRING);
            $zemlja = filter_input(INPUT_POST, 'zemlja', FILTER_SANITIZE_STRING);
            $mesto = filter_input(INPUT_POST, 'mesto', FILTER_SANITIZE_STRING);
            $cena = filter_input(INPUT_POST, 'cena');
            $vrsta_smestaja = filter_input(INPUT_POST, 'vrsta', FILTER_SANITIZE_NUMBER_INT);

            $res = SmestajModel::edit($naziv, $zemlja, $mesto, $cena, $vrsta_smestaja, $id);

            if ($res) {
                Misc::redirect('adminpanelsmestaj');
            } else {
                $this->set('message', 'Doslo je do grekse');
            }
        }
    }

    public function delete() {
        if ($_POST) {
            $smestaj_id = filter_input(INPUT_POST, 'smestaj_id', FILTER_SANITIZE_NUMBER_INT);
            $confirmed = filter_input(INPUT_POST, 'confirmed', FILTER_SANITIZE_NUMBER_INT);
            if ($confirmed == 1) {
                $res = SmestajModel::delete($smestaj_id);
                if ($res) {
                    Misc::redirect('adminpanelsmestaj');
                } else {
                    $this->set('message', 'Doslo je do grekse');
                }
            }
        }
        $smestaj = SmestajModel::getById($smestaj_id);
        $this->set('smestaj', $smestaj);
    }

}
