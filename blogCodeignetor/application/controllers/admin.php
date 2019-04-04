<?php

class Admin extends CI_Controller{
    //put your code here
    public function index(){
        $this->load->view('admin/login');
    }
    
    public function admin_login_check(){
        $this->load->view('admin/admin_master');
    }
}
