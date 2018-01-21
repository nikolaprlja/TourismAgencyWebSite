<?php

class AdminController extends Controller {
    public final function __pre() {
        if (!Session::exists('admin_id')) {
            Misc::redirect('admin/login');
        }
    }
}
