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
    $sql = "SELECT prazo, dataentrada FROM TempoAbate";

    // Execução da consulta
    $stmt = $conn->query($sql);

    // Preparar os dados para o gráfico

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Data fornecida no formato 'YYYY-MM-DD'
        $data_fornecida = $row['dataentrada'];

        // Converta a data fornecida em um objeto DateTime
        $data_entrada = new DateTime($data_fornecida);

        // Data atual
        $data_atual = new DateTime();

        // Calcule a diferença entre as datas
        $diferenca = $data_atual->diff($data_entrada);

        // A diferença é retornada como um objeto DateInterval
        // Você pode acessar o número de dias da diferença assim:
        $dias = $diferenca->days;

        // Adicione os dados ao conjunto de dados do gráfico
        // $data = [
        //     'dias' => $dias
        // ];
        
    }

    // Imprimir os dados como JSON
    echo json_encode($dias);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
