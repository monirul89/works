<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 7/9/2019
 * Time: 10:20 AM
 */
require_once 'Example.php';

class Test extends Example
{
    public $name='robin khan';
    protected $number='0173333333';
    private $email='robin@gmail.com';
//    public $value;
    public function one($data){
//        $this->value = $data;

        echo '<pre>';
        print_r($data);
    }
    protected function two(){
        echo 'In two';
    }
    private function three(){
        echo 'In three';
    }

}