<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 17:25
 */

include_once "FacebookColleague.php";

class Notifier extends FacebookColleague
{

  public function sendNotification($user){

      echo " <h3> Notification : hello ".$user->_pseudo."you have been tagged to see a video from your friend </h3>";
  }

}