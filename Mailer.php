<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 17:24
 */

include_once "FacebookColleague.php";

class Mailer extends FacebookColleague
{

    public function sendMail(User $user){

        echo "<h5> Mail box : an email has been sent to ".$user->_email." </h5>";

    }

}