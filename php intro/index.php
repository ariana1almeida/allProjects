<?php 
    include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competição de natação</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
        <p>Seu nome: <input type="text" name="nome"></p>
        <p>Sua idade: <input type="text" name="idade"></p>
        <?php
            $mensagemSucesso = obterMensagemSucesso();
            if(!empty($mensagemSucesso)){
                echo $mensagemSucesso;
            }
            $mensagemErro = obterMensagemErro();
            if(!empty($mensagemErro)){
                echo $mensagemErro;
            }
        ?>
        <p><input type="submit" value="Enviar"></p>
    </form>
    
</body>
</html>