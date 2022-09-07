<h2>Dados do cadastro</h2>
<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <td>
            <?= $arrayClient['name'] ?>
        </td>
    </tr>
    <tr>
        <th>Email</th>
        <td>
            <?= $arrayClient['email'] ?>
        </td>
    </tr>
    <tr>
        <th>Gênero</th>
        <td>
            <?= $arrayClient['gender'] ?>
        </td>
    </tr>
    <tr>
        <th>Música</th>
        <td>
            <?= $arrayClient['option1Label'] ?>
        </td>
    </tr>
    <tr>
        <th>Teatro</th>
        <td>
            <?= $arrayClient['option2Label'] ?>
        </td>
    </tr>
    <tr>
        <th>Pinturas</th>
        <td>
            <?= $arrayClient['option3Label'] ?>
        </td>
    </tr>
    <tr>
        <th>Telefone:</th>
        <td>
            <?= $arrayClient['phone'] ?>
        </td>
    </tr>
    <tr>
        <th>Receive emails:</th>
        <td>
            <?php
            if ($arrayClient['accept']) {
                echo ('Você receberá emails com ofertas e atualizações da página.');
            } else {
                echo ('Você não receberá emails referentes à esta página.');
            }
            ?>
        </td>
    </tr>
</table>