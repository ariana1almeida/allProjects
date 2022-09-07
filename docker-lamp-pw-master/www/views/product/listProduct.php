<h2>Listagem de Produtos</h2>

<table>
    <tr>
        <th class="p-1 text-center">ID do Produto</th>
        <th class="p-1 text-center">ID da Categoria</th>
        <th class="p-1 text-center">Nome</th>
        <th class="p-1 text-center">Descrição</th>
        <th class="p-1 text-center">Valor Unitário</th>
    </tr>
    <?php
    foreach ($arrayProducts as $product) {
    ?>
        <tr>
            <td class="p-1 text-center"><?= $product['idProduct'] ?></td>
            <td class="p-1 text-center"><?= $product['idCategory'] ?></td>
            <td class="p-1 text-center"><?= $product['name'] ?></td>
            <td class="p-1 text-center"><?= $product['description'] ?></td>
            <td class="p-1 text-center"><?= $product['price'] ?></td>
        </tr>
    <?php
    }
    ?>
</table>