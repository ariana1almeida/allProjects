<?php

class ClientController{
    public function register(){
        require_once('views/templates/header.php');
        require_once('views/client/register.php');
        require_once('views/templates/footer.php');
    }
    public function registerView(){
        if (isset($_POST['option1'])) {
            $option1 = true;
            $option1Label = 'A opção 1 foi marcada';
        } else {
            $option1 = false;
            $option1Label = 'A opção 1 não foi marcada';
        }
        if (isset($_POST['option2'])) {
            $option2 = true;
            $option2Label = 'A opção 2 foi marcada';
        } else {
            $option2 = false;
            $option2Label = 'A opção 2 não foi marcada';
        }
        if (isset($_POST['option3'])) {
            $option3 = true;
            $option3Label = 'A opção 3 foi marcada';
        } else {
            $option3 = false;
            $option3Label = 'A opção 3 não foi marcada';
        }
        if (isset($_POST['accept'])) {
            $accept = true;
        } else {
            $accept = false;
        }

        $arrayClient = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'gender' => $_POST['gender'],
            'phone' => $_POST['phone'],
            'accept' => $accept,
            'option1Label' => $option1Label,
            'option2Label' => $option2Label,
            'option3Label' => $option3Label
        );
        require_once('views/templates/header.php');
        require_once('views/client/registerView.php');
        require_once('views/templates/footer.php');
    }
    public function listClients(){
        require_once('models/ClientModel.php');
        $ClientModel = new ClientModel();
        $result = $ClientModel->listClients();

        $arrayClients = array();

        while ($line = $result->fetch_assoc()) {
            array_push($arrayClients, $line);
        }

        require_once('views/templates/header.php');
        require_once('views/client/listClient.php');
        require_once('views/templates/footer.php');
    }
}
