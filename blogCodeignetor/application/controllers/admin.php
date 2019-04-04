<?php

class Admin extends CI_Controller{
    //put your code here
    public function index(){
        $this->load->view('admin/login');
    }
    
    public function admin_login_check(){
        $data= array();
        $data['admincontent']= $this->load->view('admin/admin_content', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }
}
