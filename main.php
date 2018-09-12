<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 17:34
 */

include_once "Mediator.php";
include_once "Client.php";
include_once "Server.php";
include_once "DataBase.php";

$client = new Client();

new Mediator(new Server() , $client , new DataBase());

$client->request();


