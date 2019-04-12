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

    public function register_check_information($register_name, $register_email_address, $register_password, $register_address, $register_country_name, $register_gender) {

        echo $register_name;
        echo $register_email_address;
        echo $register_password;
        echo $register_address;
        echo $register_country_name;
        echo $register_gender;

//        $data = array(
//            'admin_id' => '',
//            'admin_email_address' => 'abc@gmail.com',
//            'admin_password' => 'abcd',
//            'register_address' => 'dhaka',
//            'register_country_name' => 'bangladesh',
//            'register_gender' => 'Male',
//            'access_lavel' => '0'
//        );

//        $query = $this->db->insert('tbl_admin', $data);
        

        $query = "INSERT INTO tbl_admin VALUES('','$register_name','$register_email_address','$register_password','$register_address','$register_country_name','$register_gender')";
        $register_check_result = $this->db->query($this->db->insert('tbl_admin' ,$data));
//        
        if ($register_check_result) {
            return 'Data insert Success full';;
        } else {
            return "Error";
        }
//        return $register_check_result;
    }

}
