<?php

    //session_start();

    include 'conection.php';
    
    $data = $_POST;


    // MODIFICAÇÃO NO BANCO
    if(!empty($data)){
        // CRIAR PRODUTO
        if($data["type"] === "create") {

            $name = $data["name"];
            $color = $data["color"];
            $observation = $data["observation"];
            $id_price = $data["id_price"];
      
            $query = "INSERT INTO products (name, color, observation, id_price) VALUES (:name, :color, :observation, :id_price)";
      
            $stmt = $conn->prepare($query);
      
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":color", $color);
            $stmt->bindParam(":observation", $observation);
            $stmt->bindParam(":id_price", $id_price);
      
            try {
      
              $stmt->execute();
              $_SESSION["msg"] = "Produto adicionado com sucesso!";
          
            } catch(PDOException $e) {
              // erro na conexão
              $error = $e->getMessage();
              echo "Erro: $error";
            }
        
        }else if($data["type"] === "edit") {

            $name = $data["name"];
            $color = $data["color"];
            $observation = $data["observation"];
            $price = $data["id_price"];
            $id_price = $data["id_price"];

            $query = "UPDATE products SET name = :name, color = :color, observation = :observation, id_price = :id_price WHERE id_prod = :id_prod";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":color", $color);
            $stmt->bindParam(":observation", $observation);
            $stmt->bindParam(":id_price", $id_price);
            $stmt->bindParam(":id_prod", $id_prod);

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Produto atualizado com sucesso!";
            
            } catch(PDOException $e) {
                // erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }

        }else if($data["type"] === "delete") {

            $id_prod = $data["id_prod"];
      
            $query = "DELETE FROM products WHERE id_prod = :id_prod";
      
            $stmt = $conn->prepare($query);
      
            $stmt->bindParam(":id_prod", $id_prod);
            
            try {
      
              $stmt->execute();
              $_SESSION["msg"] = "Produto removido com sucesso!";
          
            } catch(PDOException $e) {
              // erro na conexão
              $error = $e->getMessage();
              echo "Erro: $error";
            }
      
          }

         // Redirect HOME
        header("Location:" . "index.php");
    
        } else {
        $id_prod;

            if(!empty($_GET)){
                $id_prod = $_GET["id_prod"];
            }
        
            // RETORNA O DADO DE UM PRODUTO
        
            
        
            if(!empty($id_prod)){
        
                $query = "SELECT * FROM products WHERE id_prod = :id_prod";
        
                $stmt = $conn->prepare($query);
        
                $stmt->bindParam(":id_prod", $id_prod);
        
                $stmt->execute();
        
                $product = $stmt->fetch();
        
            } else {
                // RETORNA O DADO DE UM PRODUTO
                $products = [];
        
                $query = "SELECT * FROM products";
        
                $stmt = $conn->prepare($query);
        
                $stmt -> execute();
        
                $products = $stmt->fetchAll();
            }
         
    }
    
    // FECHAR CONEXÃO
    $conn = null;