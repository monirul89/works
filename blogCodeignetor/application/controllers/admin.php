<?php

class Admin extends CI_Controller {

    //put your code here
    public function index() {
        $this->load->view('admin/login');
    }

    public function admin_login_check() {

//        $admin_email_address = $_POST['admin_email_address'];

        $admin_email_address = $this->input->post('admin_email_address', TRUE);
        $admin_password = md5($this->input->post('admin_password', TRUE));

        $this->load->model('admin_model', 'a_model');

        $admin_login_check_result = $this->a_model->admin_login_check_info($admin_email_address, $admin_password);

        if ($admin_login_check_result) {
            $data = array();
            $data['admin_main_content'] = $this->load->view('admin/dashboard', '', TRUE);
            $this->load->view('admin/admin_master', $data);
        } else {
            $setData ['exception']= 'Your UserID Or Password Invalid !!'; 
            $this->session->set_userdata($setData);
            redirect('admin');
        }
    }

}
