<?php
/*
 * Klasa AdminKorisniciController nasledjuje AdminController
 */
class AdminKorisniciController extends AdminController {
    
    /*
     * Funkckija index poziva sve informacije iz UserModel php fajla
     * Za to se koristi getAll funkcije
     * Preko isset, metodom post i preko dugmeta sa klasom delBtn odrejeni korisnik ce da se izbrise
     */ 
    public function index(){
       $this->set('user', UserModel::getAll());
        if (isset($_POST['delBtn'])) {
            $this->delete();
        }   
    }
    
    /*
     * Funkckija adminStranakor poziva sve informacije iz UserModel php fajla
     * Za to se koristi getAll funkcije
     * Preko isset, metodom post i preko dugmeta sa klasom delBtn odrejeni korisnik ce da se izbrise
     */ 
    public function adminStranakor() {
        $this->set('user', UserModel::getAll());
        if (isset($_POST['delBtn'])) {
            $this->delete();
        }  
    }
    
    /*
     * Funkckija add preko isset i post metoda preko dugmeta sa klasom addBtn ce dodavati novi zapise u bazu
     * Varijable koje se oznacavju sa $ (u ovom slucaju username i password) prolaze kroz filtriranje unosa preko filter_input
     * FILTER_SANITIZE_STRING sluzi za lakseg razumenjava odredjenih simbola da ne bi doslo do greske
     * preg_match funkcija vrsti proveru unete informacije, tj dali ispunjava kriterijume koji su prikazanai u regularnim izrazima
     * Varijabla $password = hash preko Sha512 i preko USER_SALT-a ce posulizit da se od unete sifre napravi hash u bazi pomoguc USER_SALT-a
     * U slucaju da dodje do neke greske, bice te vraceni na definisanu stranicu (adminpanel) sa porukom kako je doslo do greske
     */ 
    public function add(){  
        if (isset($_POST['addBtn'])) {
            
            
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        if(!preg_match('/^[A-z0-9]+$/', $username) or !preg_match('/^.{6,}$/', $password)){
            $this->set('message', 'Podaci nisu u dobrom formatu');
            return;
            }
        $passwordHash = hash ('sha512', $password . Configuration::USER_SALT);
        
        
        
        $user = UserModel::add($username, $passwordHash);
        
        if($user){
            Misc::redirect('adminpanel');
            $this->set('message', 'Doslo je do greske prilikom dodavanje smestaj u bazu podataka.');
        }          
        }  
    }    
    
    /*
     * Funkckija edit preko isset i post metoda preko dugmeta sa klasom editBtn ce izmeniti vec postojuce zapise u bazi
     * Varijable koje se oznacavju sa $ (u ovom slucaju username i password) prolaze kroz filtriranje unosa preko filter_input
     * FILTER_SANITIZE_STRING sluzi za lakseg razumenjava odredjenih simbola da ne bi doslo do greske
     * U slucaju da dodje do neke greske, bice te vraceni na definisanu stranicu (adminpanel) sa porukom kako je doslo do greske
     */     
    public function edit($id) {
        $user = UserModel::getById($id);
        $this->set('user', $user);
        if (isset($_POST['editBtn'])) {
            
        
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        
        $res = UserModel::edit($username, $password, $id);
        
        if ($res){
            Misc::redirect('adminpanel');
        } else {
            $this->set('message', 'Doslo je do grekse');
        }
    }
    
    }
    
    /*
     * Funkckija delete preko $_POST ce proveravati zapise u bazi koji treba da budu obrisani
     * Koristeci korisnikov id (varijabla user_id) i varijble confirmed koja treba da bude 1, mozemo da obrisemo odredjenog korisnika iz baze
     * Ako dodje do greske, izaci ce poruka koja ce nam to ruci, a ko ne, vraticemo se samo na definisanu stranicu (adminpanel)
     * UserModel::getById izvlaci korisnika iz baze preko njegovog id-a koja je Auto Increment
     */ 
    public function delete() {
        if ($_POST) {  
            $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_NUMBER_INT);
            $confirmed = filter_input(INPUT_POST, 'confirmed', FILTER_SANITIZE_NUMBER_INT);
            if ($confirmed == 1) {
                $res = UserModel::delete($user_id);
                if ($res) {
                    Misc::redirect('adminpanel');
                } else {
                    $this->set('message', 'Doslo je do grekse');
                }
            }
        }
        $user = UserModel::getById($user_id);
        $this->set('user', $user);
    }
}