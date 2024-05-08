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
    $sql = "SELECT * FROM estoqueinsumos";

    // Execução da consulta
    $stmt = $conn->query($sql);

    // Verifica se há dados retornados
    if ($stmt->rowCount() > 0) {
        $data = []; // Inicializa o array de dados
        
        // Loop através dos resultados da consulta
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Adiciona os dados de cada linha ao array
            $data[] = [
                'datatransacao' => $row['DataTransacao'],
                'tipoinsumo' => $row['TipoInsumo'], 
                'quantidade' => $row['Quantidade'],
                'forncedordestinatario' => $row['FornecedorDestinatario'],
                'numerolote' => $row['NumeroLote']
            ];
        }
        
        // Retorna os dados como JSON após o loop
        echo json_encode($data);
    } else {
        echo "Nenhum dado encontrado.";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
