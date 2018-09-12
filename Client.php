<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 17:25
 */

include_once "Colleague.php";

class Client extends  Colleague
{

    public function request(){
        $this->getMediator()->makeRequest();
    }

    public function output($content){
        echo $content;
    }
}