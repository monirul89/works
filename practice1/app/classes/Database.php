<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 7/18/2019
 * Time: 11:53 AM
 */

namespace App\classes;


class Database
{
    public function dbConnect(){
        $con = mysqli_connect("localhost", "root", "", "practice1");
        return $con;
    }
}