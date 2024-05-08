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
    $sql = "SELECT numeroentrada, preco_frango  FROM TempoAbate";

    // Execução da consulta
    $stmt = $conn->query($sql);

    // Preparar os dados para o gráfico

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Data fornecida no formato 'YYYY-MM-DD'
        $lucro_estimado = $row['numeroentrada'] *25;

    }

    // Imprimir os dados como JSON
    echo json_encode($lucro_estimado);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
