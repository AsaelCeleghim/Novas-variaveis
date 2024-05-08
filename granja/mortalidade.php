<?php
// Conexão com o banco de dados
$dsn = "mysql:host=localhost;dbname=poupave";
$username = "root";
$password = "";

try {
    $conn = new PDO($dsn, $username, $password);
    // Configura o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL
    $sql = "SELECT *FROM frango";

    // Execução da consulta
    $stmt = $conn->query($sql);

    // Preparar os dados para o gráfico

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Data fornecida no formato 'YYYY-MM-DD'
        $taxa_mortalidade = ($row['quantidade_morto']/$row['quantidade_entrada']) * 100;

    }

    // Imprimir os dados como JSON
    echo json_encode($taxa_mortalidade);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
