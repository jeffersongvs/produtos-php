<?php
    include 'header.php'
?>
    <div class="container">
        <h1 id="main-title">Adicionando Produto:</h1>
        <form id="creat-form" action="process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form group">
                <label for="name" class="bold">Nome do produto:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form group">
                <label for="color" class="bold">Cor:</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Digite a cor" required>
            </div>
            <div class="form group">
                <label for="price" class="bold">Preço:</label>
                <input type="text" class="form-control" id="price" name="id_price" placeholder="Digite o preço" required>
            </div>
            <div class="form group">
                <label for="observation" class="bold">Observações:</label>
                <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Observações" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
<?php
    include 'footer.php'
?>
