<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 17:26
 */

 abstract class Colleague
{
    protected $_mediator ;

     public function setMediator(MediatorInterface $mediator){
        $this->_mediator = $mediator;
    }

    public function getMediator(){
        return $this->_mediator;
    }

}