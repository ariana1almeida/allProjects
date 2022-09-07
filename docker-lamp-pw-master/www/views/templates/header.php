<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho PW</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <header class="jumbotron text-center mb-0">
        <h1>Website MVC</h1>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav class="cnavbar bg-light col-md-3">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="?controller=site&action=home" class="nav-link" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=site&action=about" class="nav-link" id="about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=site&action=products" class="nav-link" id="products">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=site&action=contact" class="nav-link" id="contact">Contato</a>
                    </li>
                </ul>
                <h2>Clientes</h2>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="?controller=client&action=register" class="nav-link">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=client&action=listClients" class="nav-link">Lista de clientes</a>
                    </li>
                </ul>
                <h2>Produtos</h2>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="?controller=product&action=listProduct" class="nav-link">Lista de produtos</a>
                    </li>
            </nav>
            <section class="col-md-9">