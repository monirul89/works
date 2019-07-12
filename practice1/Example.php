<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 7/9/2019
 * Time: 10:20 AM
 */

class Example
{
    public $area = 'Saver';
    protected $city = 'Dhaka';
    private $cuntry = 'Bangladesh';


    public function four(){
        echo 'In four';
    }
    protected function five(){
        echo 'In five';

    }
    private function six(){
        echo 'In six';

    }

}