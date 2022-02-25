<?php

    //include_once("config/url.php")
    include 'conection.php';
    include 'process.php';

    //Limpa a mensagem
    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME (font de icones) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost:80/produtos-php/css/styles.css">
    <title>Produtos</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php">
                <img src="https://img.icons8.com/material/24/000000/shopping-cart--v1.png" alt="Produtos"/> 
            </a>

            <div>
            <div class="navbar-nav">
                <a class="nav-link active" id="home-link" href="index.php">Produtos</a>
                <a class="nav-link active" href="create.php">Adicionar produtos</a>
            </div>
        </div>
        </nav>
       
    </header>