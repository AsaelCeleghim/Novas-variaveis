<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planta da Granja</title>
    <style>
        /* Estilos para a planta da granja */
        #granja {
            width: 500px;
            height: 300px;
            background-color: #f0f0f0;
            position: relative;
        }
        .sensor {
            width: 20px;
            height: 20px;
            background-color: red;
            border-radius: 50%;
            position: absolute;
        }
    </style>
</head>
<body>
    <h1>Planta da Granja</h1>
    <div id="granja">
        <!-- Sensores representados como divs -->
        <div class="sensor" id="sensor1" style="top: 50px; left: 100px;"></div>
        <div class="sensor" id="sensor2" style="top: 150px; left: 200px;"></div>
    </div>

    <script>
        // Função para atualizar os dados dos sensores
        function atualizarDadosSensores() {
            // Simulação de dados dos sensores
            var sensor1Data = Math.random() * 100; // Exemplo: temperatura
            var sensor2Data = Math.random() * 100; // Exemplo: umidade

            // Atualizar a cor e o título dos sensores com base nos dados
            atualizarSensor("sensor1", sensor1Data);
            atualizarSensor("sensor2", sensor2Data);
        }

        // Função para atualizar um sensor específico
        function atualizarSensor(sensorId, data) {
            var sensor = document.getElementById(sensorId);
            sensor.style.backgroundColor = getColorForData(data); // Cor baseada nos dados
            sensor.title = "Dados do Sensor: " + data.toFixed(2); // Exemplo: exibir dados em uma dica de ferramenta
        }

        // Função para definir a cor com base nos dados do sensor
        function getColorForData(data) {
            // Lógica para determinar a cor com base nos dados
            // Aqui você pode implementar sua própria lógica de cores
            if (data < 50) {
                return "green"; // Baixo
            } else if (data < 80) {
                return "yellow"; // Médio
            } else {
                return "red"; // Alto
            }
        }

        // Atualizar os dados dos sensores a cada 5 segundos
        setInterval(atualizarDadosSensores, 5000);

        // Atualizar os dados dos sensores ao carregar a página
        atualizarDadosSensores();
    </script>
</body>
</html>
