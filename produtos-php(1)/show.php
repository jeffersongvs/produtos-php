<?php
    include 'header.php';
    include 'process.php';
?>
    <div class="container" id="view-product-container">
        <?php include 'backbtn.html' ?>
        <h1 id="main-title"><?= $product["name"] ?></h1>
        <p class="bold">Cor: </p>
        <p><?= $product["color"] ?></p>
        <p class="bold">Preço: </p>
        <p><?= $product["id_price"] ?></p>
        <p class="bold">Observações: </p>
        <p><?= $product["observation"] ?></p>
    </div>
<?php
    include 'footer.php';
?>