<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['controller'])) {
    require_once('controllers/SiteController.php');
    $SiteController = new SiteController();
    $SiteController->home();
} else {
    switch (($_REQUEST['controller'])) {
        case 'site':
            require_once('controllers/SiteController.php');
            $SiteController = new SiteController();
            if (!isset($_GET['action'])) {
                $SiteController->home();
            } else {
                switch ($_REQUEST['action']) {
                    case 'home':
                        $SiteController->home();
                        break;
                    case 'products':
                        $SiteController->products();
                        break;
                    case 'contact':
                        $SiteController->contact();
                        break;
                    case 'about':
                        $SiteController->about();
                        break;
                }
            }
            break;

        case 'client':
            require_once('controllers/ClientController.php');
            $ClientController = new ClientController();
            if (!isset($_GET['action'])) {
                //
            } else {
                switch ($_REQUEST['action']) {
                    case 'register':
                        $ClientController->register();
                        break;
                    case 'view':
                        $ClientController->registerView();
                        break;
                    case 'listClients':
                        $ClientController->listClients();
                        break;
                    default:
                        break;
                }
            }
            break;

        case 'product':
            require_once('controllers/ProductController.php');
            $ProductController = new ProductController();
            if (!isset($_GET['action'])) {
            } else {
                switch ($_REQUEST['action']) {
                    case 'listProduct':
                        $ProductController->listProduct();
                        break;
                    default:
                        break;
                }
            }
            break;
    }
}
