<?php
    include 'header.php'
?>
    <div class="container">
        <?php if(isset($printMsg) && $printMsg != ''): ?>
            <p id="msg"><?= $printMsg ?></p>
        <?php endif ?>
        <h1 id="main-title">Lista de Produtos</h1>

        <?php if(count($products) > 0): ?>
            <table class="table" id="products-table"> 
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cor</th>
                        <th scope="col">Preço</th>
                        <th scope="col"></th>
                    </tr>
                    <tbody>
                        <?php foreach($products as $product): ?>
                            <tr>
                                <td scope="row" class="col-id"><?= $product["id_prod"] ?></td>
                                <td scope="row"><?= $product["name"] ?></td>
                                <td scope="row"><?= $product["color"] ?></td>
                                <td scope="row">R$ <?= $product["id_price"] ?></td>
                                <td class="action">
                                    <a href="show.php?id_prod=<?= $product["id_prod"] ?>" > <i class="fas fa-eye check-icon"></i></a>
                                    <a href="edit.php?id_prod=<?= $product["id_prod"] ?>"> <i class="fas fa-edit edit-icon"></i></a>
                                    <form class="delete-form" action="process.php" method="POST">
                                        <input type="hidden" name="type" value="delete">
                                        <input type="hidden" name="id_prod" value="<?= $product['id_prod'] ?>">
                                        <button type="submit" class="delete-bnt"><i class="fas fa-times delete-icon"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </thead>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há Produtos, na sua lista, <a href="create.php">Clique aqui para add</a></p>
        <?php endif?>
    </div>
<?php
    include 'footer.php'
?>
