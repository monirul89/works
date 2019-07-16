<?php

namespace App\classes;


class Users
{
    public function registerUser($data) {

        $full_name = $data['full_name'];
        $user_email = $data['user_email'];
        $user_password = $data['user_password'];
        $select_gender = $data['select_gender'];
        $user_message = $data['user_message'];

        $con = mysqli_connect("localhost", "root", "", "practice1");
        $query = "SELECT * FROM users WHERE user_email='$user_email'";
        $result = mysqli_query($con, $query);
        $userData = mysqli_fetch_array($result);


        if ($userData['user_email']!=$user_email) {
            $sql = "INSERT INTO users(user_id, user_name, user_email, user_password, user_gender, user_message) VALUES ('','$full_name','$user_email','$user_password','$select_gender','$user_message')";
            $result = mysqli_query($con, $sql);
            if ($result!=true) {
                $message = 'Could not connect: ' . mysqli_error($result);
                return $message;
            }else{
                $message = 'Data Insert Successfull Please Login';
                return $message;
            }
        } else {
            $message = 'Your Email Address is invalid';
            return $message;
        }

    }

    public function loginUser($data)
    {
        echo '<pre>';
        print_r($data);
    }
}