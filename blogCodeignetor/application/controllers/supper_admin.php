<?php

class Supper_Admin extends CI_Controller {

    //put your code here
    public function index() {
        $data['admin_main_content'] = $this->load->view('admin/dashboard', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

}
