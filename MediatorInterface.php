<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 16:53
 */

interface  MediatorInterface
{


    public function sendReponse($content);
    public function makeRequest();
    public function queryDb();

}