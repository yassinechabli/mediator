<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 17:26
 */

 abstract class FacebookColleague
{
     /**
      * @var
      * the mediator object that will manage communication between class
      */
    protected  $_mediator;

     /**
      * @param FacebookMediatorInterface $mediator
      * setting mediator for children class
      */
    public function setMediator(FacebookMediatorInterface $mediator){

        $this->_mediator = $mediator;
    }
}