<?php
    include 'header.php'
?>
    <div class="container">
    <?php include 'backbtn.html' ?>
        <h1 id="main-title">Editar Produto</h1>
        <form id="creat-form" action="process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id_prod" value="<?= $product['id_prod'] ?>">
            <div class="form group">
                <label for="name">Nome do produto</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $product["name"] ?>" required>
            </div>
            <div class="form group">
                <label for="color">Cor</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Digite a cor" value="<?= $product["color"] ?>" required>
            </div>
            <div class="form group">
                <label for="price">Preço</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Digite o preço" value="<?= $product["id_price"] ?>" required>
            </div>
            <div class="form group">
                <label for="observation">Observações</label>
                <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Observações" rows="3" required><?= $product["observation"] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
<?php
    include 'footer.php'
?>
