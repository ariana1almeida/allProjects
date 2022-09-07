<?php

class ProductModel{
    public function listProduct(){
        require_once('db/ConnectClass.php');
        $ConnectClass = new ConnectClass();
        $ConnectClass->openConnect();
        $Connection = $ConnectClass->getConn();

        $sql = 'SELECT * FROM products';

        return $Connection->query($sql);
    }
}
