<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 17:24
 */


include_once "Colleague.php";

class Server extends Colleague
{

public function process(){
    $data = $this->getMediator()->queryDb();
    $this->getMediator()->sendReponse(sprintf("Hello %s", $data));
}

}