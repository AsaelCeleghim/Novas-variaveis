<h2>Exemplo de Atualização da Tabela com PHP e AJAX</h2>

            <table id="tabela">
                <tr>
                    <th>Temperatura</th>
                    <th>Umidade</th>
                    <th>Qualidade do ar</th>
                    <th>Amonia</th>
                    <th>Co2</th>
                    <th>Agua potavel</th>
                    <th>Fumaça</th>
                </tr>
                <!-- Os dados da tabela serão inseridos aqui -->
            </table>

            <script>
                // Função para carregar os dados da tabela usando AJAX
                function sensores() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            mostrarDados(data);
                        }
                    };
                    xhttp.open("GET", "sensores.php", true);
                    xhttp.send();
                }

                // Função para exibir os dados na tabela
                function mostrarDados(data) {
                    var table = document.getElementById("tabela");
                    // Limpa a tabela antes de atualizá-la
                    table.innerHTML = "<tr><th>Temperatura</th><th>Umidade</th><th>Quantidade do ar</th><th>Amonia</th><th>Co2</th><th>Agua Potovel</th><th>Fumaça</th></tr>";
                    // Adiciona os novos dados à tabela
                    data.forEach(function(item) {
                        var row = table.insertRow();
                        row.insertCell(0).innerHTML = item.temperatura;
                        row.insertCell(1).innerHTML = item.umidade;
                        row.insertCell(2).innerHTML = item.qualidade_ar;
                        row.insertCell(3).innerHTML = item.amonia;
                        row.insertCell(4).innerHTML = item.co2;
                        row.insertCell(5).innerHTML = item.agua_potavel;
                        row.insertCell(6).innerHTML = item.fumaca;
                    });
                }

                // Atualiza os dados da tabela a cada 5 segundos
                setInterval(sensores, 5000);

                // Carrega os dados pela primeira vez ao carregar a página
                sensores();
            </script>