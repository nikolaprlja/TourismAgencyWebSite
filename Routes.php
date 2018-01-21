<?php
    return [
        [
            'Pattern'    => '|^login/?$|',
            'Controller' => 'Main',
            'Method'     => 'login'
        ],
        [
            'Pattern'    => '|^logout/?$|',
            'Controller' => 'Main',
            'Method'     => 'logout'
        ],
        [
            'Pattern'    => '|^admin/login/?$|',
            'Controller' => 'AdminMain',
            'Method'     => 'login'
        ],
        [
            'Pattern'    => '|^admin/logout/?$|',
            'Controller' => 'AdminMain',
            'Method'     => 'logout'
        ],
        [
            'Pattern' => '|^adminpanelsmestaj/?$|',
            'Controller' => 'AdminSmestaj',
            'Method' => 'adminStrana'
        ],
        [
            'Pattern' => '|^dodavanjesmestaja/?$|',
            'Controller' => 'AdminSmestaj',
            'Method' => 'add'
        ],
        [
            'Pattern' => '|^izmenasmestaja/([0-9]+)?$|',
            'Controller' => 'AdminSmestaj',
            'Method' => 'edit'
        ],
        [
            'Pattern' => '|^adminstrana/?$|',
            'Controller' => 'AdminSmestaj',
            'Method' => 'index'
        ],
        [
            'Pattern' => '|^adminstranarezervacija/?$|',
            'Controller' => 'AdminRezervacija',
            'Method' => 'index'
        ],
        [
            'Pattern' => '|^adminstranakorisnici/?$|',
            'Controller' => 'AdminKorisnici',
            'Method' => 'index'
        ],
        [
            'Pattern' => '|^adminpanelrezervacija/?$|',
            'Controller' => 'AdminRezervacija',
            'Method' => 'adminStranarez'
        ],
        [
            'Pattern' => '|^izmenarezervacija/([0-9]+)?$|',
            'Controller' => 'AdminRezervacija',
            'Method' => 'edit'
        ],
        [
            'Pattern' => '|^admin/korisnici/?$|',
            'Controller' => 'AdminKorisnici',
            'Method' => 'adminStranakor'
        ],
                [
            'Pattern' => '|^dodavanjekorisnika/?$|',
            'Controller' => 'AdminKorisnici',
            'Method' => 'add'
        ],
        [
            'Pattern' => '|^izmenakorisnika/([0-9]+)?$|',
            'Controller' => 'AdminKorisnici',
            'Method' => 'edit'
        ],
        [
            'Pattern' => '|^tipodmora/letovanje/?$|',
            'Controller' => 'Main',
            'Method' => 'letovanje'
        ],
        [
            'Pattern' => '|^grcka/?$|',
            'Controller' => 'Main',
            'Method' => 'grcka'
        ],
        [
            'Pattern' => '|^userstrana/?$|',
            'Controller' => 'UserRezervisi',
            'Method' => 'index'
        ],
        [
            'Pattern' => '|^rezervisanje/?$|',
            'Controller' => 'UserRezervisi',
            'Method' => 'add'
        ],
        [
            'Pattern'    => '|^.*$|',
            'Controller' => 'Main',
            'Method'     => 'index'
        ]
    ];
