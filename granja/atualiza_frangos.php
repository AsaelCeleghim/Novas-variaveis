<?php
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

            // Conexão com o banco de dados
    $dsn = "mysql:host=localhost;dbname=poupave";
    $username = "root";
    $password = "";
    $conn = new PDO($dsn, $username, $password);
    // Configura o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL
    $sql = "SELECT quantidade_morto FROM frango";
            
    // Execução da consulta
    $stmt = $conn->query($sql);
     // Verifica se há dados retornados
     if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 
            $mortos = $row['quantidade_morto'] + $_POST["qtd_frangos"];

            echo $mortos;
        }         
    } else {
        echo "Nenhum dado encontrado.";
    }

    if(isset($_POST["mortos"]) || isset($_POST["vivos"])){
        try {
            $conn = new PDO($dsn, $username, $password);
            // Configura o PDO para lançar exceções em caso de erro
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // Consulta SQL para atualizar os frangos mortos
            if(isset($_POST["mortos"])) {
                $sql = "UPDATE frango SET quantidade_morto = quantidade_morto + :quantidade WHERE quantidade_entrada = 5000";
            } elseif(isset($_POST["vivos"])) {
                $sql = "UPDATE frango SET quantidade_morto = quantidade_morto - :quantidade WHERE quantidade_entrada = 5000";
            }
    
            // Preparar a consulta
            $stmt = $conn->prepare($sql);
    
            // Substituir o parâmetro :quantidade pelo valor enviado pelo formulário
            $quantidade = $_POST["qtd_frangos"];
            
    
            // Executar a consulta
            $stmt->execute(array(':quantidade' => $quantidade));
    
            echo "Atualização feita com sucesso!";
            header("Location:app_frangos_mortos.php");
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    


?>