<?php

namespace App\classes;

use App\classes\Database;

class Users extends Database
{
    public function registerUser($data)
    {

        $full_name = $data['full_name'];
        $user_email = $data['user_email'];
        $user_password = $data['user_password'];
        $select_gender = $data['select_gender'];
        $user_message = $data['user_message'];

        $con = Database::dbConnect();
        $query = "SELECT * FROM users WHERE user_email='$user_email'";
        $result = mysqli_query($con, $query);
        $userData = mysqli_fetch_array($result);

        date_default_timezone_set('Asia/Dhaka');
        $currentTime = date('Y-m-d H:i:s a O');


        if ($userData['user_email'] != $user_email && filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $sql = "INSERT INTO users(user_id, user_name, user_email, user_password, user_gender, user_message, user_date) VALUES ('','$full_name','$user_email','$user_password','$select_gender','$user_message', '$currentTime')";
            $result = mysqli_query($con, $sql);
            if ($result != true) {
                $message = 'Could not connect: ' . mysqli_error($result);
                return $message;
            } else {
                $message = 'Register Successfull';
                return $message;
            }
        } else {
            $message = 'Your Email Address is invalid';
            return $message;
        }

    }

    public function loginUser($data)
    {
        $user_email = $data['user_email'];
        $user_password = $data['user_password'];

        $con = Database::dbConnect();
        $query = "SELECT * FROM users WHERE user_email='$user_email' AND user_password = '$user_password' ";
        $result = mysqli_query($con, $query);
        $check = mysqli_fetch_array($result);
        if (isset($check)) {
            header("Location:../admin/");
        } else {
            header("Location:../login");
        }
    }


    public function showRegisterUsers()
    {
        $con = Database::dbConnect();
        $query = "SELECT * FROM users";
        $result = mysqli_query($con, $query);

        if ($con) {
            return $result;
        }

    }

    public function getUserInfoById($id)
    {
        $con = Database::dbConnect();
        $query = "SELECT * FROM users WHERE user_id='$id'";
        if (mysqli_query($con, $query)){
            $result = mysqli_query($con, $query);
            return $result;
        }else{
            die('mysqli error'.mysqli_error($con));
        }

    }

    public function updateUserInfo($data, $id)
    {
        $user_name = $data['user_name'];
        $user_email = $data['user_email'];
        $user_password = $data['user_password'];
        $user_gender = $data['select_gender'];
        $user_message = $data['user_message'];

        $con = Database::dbConnect();
        $query = "UPDATE users SET user_name='$user_name',user_email='$user_email',user_password='$user_password',user_gender='$user_gender',user_message='$user_message' WHERE user_id='$id'";

        if (mysqli_query($con, $query)){
            $message = 'Update Success';
            return $message;
        }else{
            $message = 'mysqli error'.mysqli_error($con);
            return $message;
        }
    }

    public function showDeleteUsers($id){
        $con = Database::dbConnect();
        $query = "DELETE FROM users WHERE user_id='$id'";
        if (mysqli_query($con, $query)){
            $message = 'One row Deleted';
            return $message;
        }else{
            $message = 'mysqli error'.mysqli_error($con);
            return $message;
        }
    }

}