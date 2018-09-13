<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 17:34
 */

include_once "FacebookMediator.php";
include_once "Notifier.php";
include_once "Commenter.php";
include_once "Mailer.php";
include_once "EntityManager.php";

// let's suppose the pseudo of the user used here is konnetrofast13 . the "@" is the tag
$message = " Hello @konnetofast13 , have fun with this video :)";

$commenter = new Commenter();

new FacebookMediator(new Notifier() , new Mailer() , $commenter , new EntityManager());


$commenter->comment($message);



