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
        $sql = "SELECT * FROM ProducaoDiaria";

        // Execução da consulta
        $stmt = $conn->query($sql);

        // Preparar os dados para o gráfico
        $data = [
            'labels' => [],
            'datasets' => []
        ];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Adicionar data às labels
            $data['labels'][] = $row['Data'];

            // Adicionar valores de NumFrangosAlimentados e QtdRacaoConsumida aos datasets
            $data['datasets'][0]['label'] = 'NumFrangosAlimentados';
            $data['datasets'][0]['data'][] = $row['NumFrangosAlimentados'];

            $data['datasets'][1]['label'] = 'QtdRacaoConsumida';
            $data['datasets'][1]['data'][] = $row['QtdRacaoConsumida'];
        }

        // Enviar os dados como JSON
        echo json_encode($data);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
}
?>
