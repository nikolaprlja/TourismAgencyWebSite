<?php
    /*
     * Klasa AdminMainController nasledjuje Controller
     */
    class AdminMainController extends Controller {
        
    /*
     * metod index ovde sluzi da bi mogao da se pozove u rutama za index.php stranicu u odredjenom view-u
     */     
    public function index() {
        
    }
        
        
        /*
         * Metod login (u ovom slucaju za administratora) omogucuje administratoru da se uloguje preko svog username-a i password-a
         * Password se inace hashuje preko definisanog USER_SALT-a
         * Preko AdminModel pomocu funkcije getByUsernameAndPasswordHash dobijamo hashovanu lozinku i administratorsko korisnicko ime
         */
        public function login() {
            if (!empty($_POST)) {
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

                $hash = hash('sha512', $password . Configuration::USER_SALT);
                unset($password);

                $admin = AdminModel::getByUsernameAndPasswordHash($username, $hash);
                unset($hash);

                if ($admin) {
                    Session::set('admin_id', $admin->admin_id);
                    Session::set('username', $username);
                    Session::set('ip', filter_input(INPUT_SERVER, 'REMOTE_ADDR'));
                    Session::set('ua', filter_input(INPUT_SERVER, 'HTTP_USER_AGENT', FILTER_SANITIZE_STRING));

                    Misc::redirect('');
                } else {
                    $this->set('message', 'Nisu dobri login parametri.');
                    sleep(1);
                }
            }
        }
        
        /*
         * Metod logout prekida sesiju i vraca nas na stranicu za logovanje (administratorsku, posto postoje admin nalozi i nalozi za posetioce sajta)
         */
        public function logout() {
            Session::end();
            Misc::redirect('login');
        }
    }