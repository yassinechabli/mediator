<?php
/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 12/09/2018
 * Time: 16:55
 */

include_once "MediatorInterface.php";

class Mediator implements MediatorInterface
{

    protected $_server;

    protected $_client;

    protected $_database;

    public function __construct(Server $server , Client $client , DataBase $dataBase)
    {
        $this->_server   = $server;
        $this->_client   = $client;
        $this->_database = $dataBase;

        $this->_database->setMediator($this);
        $this->_server->setMediator($this);
        $this->_client->setMediator($this);

    }

    public function makeRequest()
    {
        $this->_server->process();
     }


    public function sendReponse($content)
    {
        $this->_client->output($content);
    }

    public function queryDb()
    {
       return $this->_database->getData();

    }
}