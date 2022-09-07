<?php

class ClientModel{
    public function listClients(){
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $Connection = $ConnectClass->getConn();

        $sql = "SELECT * FROM clients";

        return $Connection->query($sql);
    }
}
