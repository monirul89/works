<?php

class Admin_model extends CI_Model {

    //put your code here

    public function admin_login_check_info($admin_email_address, $admin_password) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address', $admin_email_address);
        $this->db->where('admin_password', $admin_password);
        $query = $this->db->get();

        //For Multiple row data
//        $admin_login_check_result = $query->result(); 
        
        //For single row data
        $admin_login_check_result = $query->row();
//        if ($admin_login_check_result) {
//            return FALSE;
//        } else {
//            return TRUE;
//        }
        return $admin_login_check_result;
    }

}
