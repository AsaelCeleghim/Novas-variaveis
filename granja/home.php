<html>
    <head>
        <title>Poupave</title>
        <meta charset="utf-8">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->

        <style type="text/css">
            *{
                padding: 0;
                margin: 0;
            }
            body{
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                background: #E0FFFF;
            }
           
            .graficos{
                /* margin: 5px; */
                width: 400px;
                /* border: 1px solid black; */
                display: inline-block;
                text-align: center;
                padding: 10px;
                border-radius: 20px;
                background: white;
      
            }
            .producao_diaria{
                /* margin: 5px; */
                width: 480px;
                /* border: 1px solid black; */
                display: inline-block;
                text-align: center;
                padding: 10px;
                border-radius: 20px;
                background: white;
                padding: 10px;

            }
            .tempo_abate{
                height: 300px;
            }
            .faturamento{
                /* margin: 5px; */
                width: 800px;
             
                /* border: 1px solid black; */
                display: inline-block;
                text-align: center;
                padding: 10px;
                border-radius: 20px;
                background: white;
                float: left;
                margin: 10px;
        
            }
           

            section:hover{
                /* background: #D3D3D3; */
                box-shadow: 1px  1px 3px;
            }

            .dados{
                width: 200px;
                height: 80px;
                background: white;
                margin: 10px;
                border-radius: 20px;
                display: inline-block;
                text-align: center;
                padding-top: 50px;
    
            }

            #prazo, #resta {
                color: green;
                display: inline-block;
            }
            .alinha{
                display: inline-block;
                /* padding-top: 50px; */
                
            }

            table {
                border-collapse: collapse;
                width: 800px;
                margin-bottom: 20px;
                border-radius: 20px;
            }
            .tabela{
                width: 800px;
                display: inline-block;
                border-radius: 20px;
                padding: 10px;
                background: white;
            }
            select .tabela{
                margin-right: 10px;
            }

            /* Estilo para as células da tabela */
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            /* Estilo para as células do cabeçalho */
            th {
                background-color: #f2f2f2;
            }

            /* Estilo para as células alternadas */
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            /* Estilo para células ao passar o mouse */
            tr:hover {
                background-color: #e6f7ff;
            }

            #insumos{
                /* width: 200px; */
                float: left;
                padding: 10px 0 0 0;
                border-radius: 20px;
                background: white;
            }
            #insumos table{
                width: 500px;
                padding: 10px;
                
            }
      
            #tabela_insumos{
                width: 400px;
                padding: 10px;
                font-size: 11px;
            
            }
                
            
        </style>
 
    </head>

    <body>

        <?php
            // require 'header.php';
        ?>

    
        <nav>
           
        
            <section class="dados">
                <div class="alinha">Prazo: 40/50 dias</div>
            </section>
            
            <section class="dados">
                <div id="resta"><div>
            </section>

            <section class="dados">
                <div id= "prazo"></div>
                <br>
                <!-- <div id="resta"><div> -->
            <script type="text/javascript">
                    // Função para carregar os dados do PHP usando AJAX
                    function prazo() {
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "prazo.php", true);
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4) {
                                if (xhr.status === 200) {
                                    var data = JSON.parse(xhr.responseText);
                                    document.getElementById("prazo").innerHTML = "Passaram: " + data + " dias";
                                    var resta = 50 - data;
                                    document.getElementById("resta").innerHTML = "Restam: " + resta + "dias";
                                } else {
                                    console.error("Erro ao carregar dados: " + xhr.status);
                                }
                            }
                        };
                        xhr.send();
                    }

                    // Chamar a função para carregar os dados ao carregar a página
                    // window.onload = function() {
                    //     prazo();
                    // };
                </script>
            </section>
                
            <section class="dados">
                <div id= "prazo"></div>
                <br>
                <div id="lucro"><div>
            <script type="text/javascript">
                    // Função para carregar os dados do PHP usando AJAX
                    function lucro_estimado() {
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "capital.php", true);
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4) {
                                if (xhr.status === 200) {
                                    var lucro = JSON.parse(xhr.responseText);
                                    document.getElementById("lucro").innerHTML = "Lucro estimado: R$ " + lucro;
                                } else {
                                    console.error("Erro ao carregar dados: " + xhr.status);
                                }
                            }
                        };
                        xhr.send();
                    }

                    // Chamar a função para carregar os dados ao carregar a página
                    // window.onload = function() {
                    //     prazo();
                    // };
                </script>
            </section>

            <section class="dados">
                <div id="prejuizo"></div>
                <script type="text/javascript">
                        // Função para carregar os dados do PHP usando AJAX
                        function prejuizo_estimado() {
                            var xhr = new XMLHttpRequest();
                            xhr.open("GET", "prejuizo.php", true);
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === 4) {
                                    if (xhr.status === 200) {
                                        var prejuizo = JSON.parse(xhr.responseText);
                                        document.getElementById("prejuizo").innerHTML = "prejuízo estimado: R$ " + prejuizo;
                                    } else {
                                        console.error("Erro ao carregar dados: " + xhr.status);
                                    }
                                }
                            };
                            xhr.send();
                        }

                        // Chamar a função para carregar os dados ao carregar a página
                        // window.onload = function() {
                        //     prazo();
                        // };
                    </script>
            </section>
            <section class="dados">
            <div id="taxa_mortalidade"></div>
                <script type="text/javascript">
                        // Função para carregar os dados do PHP usando AJAX
                        function taxa_mortalidade() {
                            var xhr = new XMLHttpRequest();
                            xhr.open("GET", "mortalidade.php", true);
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === 4) {
                                    if (xhr.status === 200) {
                                        var mortalidade = JSON.parse(xhr.responseText);
                                        document.getElementById("taxa_mortalidade").innerHTML = "Mortalidade:" + mortalidade +"%";
                                    } else {
                                        console.error("Erro ao carregar dados: " + xhr.status);
                                    }
                                }
                            };
                            xhr.send();
                        }

                        // Chamar a função para carregar os dados ao carregar a página
                        // window.onload = function() {
                        //     prazo();
                        // };
                    </script>
            </section>
            <br>
<!-- ////////////////////////////////////////////////////////////////////////////// -->

        <div id="parte2">
            <section class="faturamento">
                <h3>Faturamento</h3>
                <canvas id="myChart1" class="card"></canvas>
                <script type="text/javascript">
                    // Função para carregar dados do banco de dados
                    function loadData1() {
                        // Fazer uma solicitação AJAX ao PHP para obter os dados
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "faturamento.php", true);
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                var data = JSON.parse(xhr.responseText);
                                createChart1(data);
                            }
                        };
                        xhr.send();
                    }

                    // Função para criar o gráfico com os dados fornecidos
                    function createChart1(data) {
                        var ctx = document.getElementById('myChart1').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: data,
                            options: {
                                scales: {
                                    xAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    }

                    window.onload = function() {
                        loadData1();
                        // loadData3();
                        loadData();
                        prazo();
                        lucro_estimado();
                        insumos();
                        sensores();
                        prejuizo_estimado();
                        taxa_mortalidade();

                        // Use uma função anônima para chamar a função loadData a cada intervalo
                        setInterval(loadData1, 5000);
                        // setInterval(loadData3, 5000);
                        setInterval(loadData, 5000);
                        setInterval(prazo, 5000);
                    
                };
                    
                </script>
            </section>
            <br>
            
            <section class="producao_diaria">
            <h3>Produção diaria</h3>
            <canvas id="myChart2" class="card"></canvas>
            <script type="text/javascript">
                // Função para carregar dados do banco de dados
                function loadData() {
                    // Fazer uma solicitação AJAX ao PHP para obter os dados
                    var xhr = new XMLHttpRequest();
                    xhr.open("GET", "producaodiaria.php", true);
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            var data = JSON.parse(xhr.responseText);
                            createChart2(data);
                        }
                    };
                    xhr.send();
                }

                // Função para criar o gráfico com os dados fornecidos
                function createChart2(data) {
                    var ctx = document.getElementById('myChart2').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                }
                
                                   
            </script>
            </section>
        </div>
       
    
            <!-- <section class="">
                    <h3>Tempo para o abate</h3>
                    <canvas id="myChart3" class="card"></canvas>
                    <script type="text/javascript">
                        // Função para carregar dados do banco de dados
                        function loadData3() {
                            // Fazer uma solicitação AJAX ao PHP para obter os dados
                            var xhr = new XMLHttpRequest();
                            xhr.open("GET", "tempoabate.php", true);
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === 4 && xhr.status === 200) {
                                    var data = JSON.parse(xhr.responseText);
                                    createChart3(data);
                                }
                            };
                            xhr.send();
                        }

                        // Função para criar o gráfico com os dados fornecidos
                        function createChart3(data) {
                            var ctx = document.getElementById('myChart3').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: data,
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        }

                        // Carregar os dados ao carregar a página
                        // window.onload = function() {
                        //     loadData();
                        // };
                    </script>
                
            </section> -->
            <section id="insumos">
                tabela de insumos
                <table id="tabela_insumos">
                <tr>
                    <th>Data Transação</th>
                    <th>Insumo</th>
                    <th>Quantidade</th>
                    <th>Fornecedor</th>
                    <th>Número Lote</th>
                </tr>
                <!-- Os dados da tabela serão inseridos aqui -->
            </table>
            <script>
                // Função para carregar os dados da tabela usando AJAX
                function insumos() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            mostrarDados1(data);
                        }
                    };
                    xhttp.open("GET", "insumos.php", true);
                    xhttp.send();
                }

                // Função para exibir os dados na tabela
                function mostrarDados1(data) {
                    var table = document.getElementById("tabela_insumos");
                    // Limpa a tabela antes de atualizá-la
                    table.innerHTML = "<tr><th>Data Transação</th><th>Insumo</th><th>Quantidade</th><th>Fornecedor</th><th>Número Lote</th></tr>";
                    // Adiciona os novos dados à tabela
                    data.forEach(function(item1) {
                        var row1 = table.insertRow();
                        row1.insertCell(0).innerHTML = item1.datatransacao;
                        row1.insertCell(1).innerHTML = item1.tipoinsumo;
                        row1.insertCell(2).innerHTML = item1.quantidade;
                        row1.insertCell(3).innerHTML = item1.forncedordestinatario;
                        row1.insertCell(4).innerHTML = item1.numerolote;
                            
                    });
                }

                // Atualiza os dados da tabela a cada 5 segundos
                // setInterval(insumos, 5000);

                // Carrega os dados pela primeira vez ao carregar a página
                // sensores();
            </script>  
            </section>
        
        <section class="tabela"> 
            <h2>Sensores da granja</h2>

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
                    table.innerHTML = "<tr><th>Temperatura</th><th>Umidade</th><th>Quanlidade do ar</th><th>Amonia</th><th>Co2</th><th>Agua Potovel</th><th>Fumaça</th></tr>";
                    // Adiciona os novos dados à tabela
                    data.forEach(function(item) {
                        var row = table.insertRow();
                        if (item.temperatura < 15 || item.temperatura > 30) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            row.insertCell(0).innerHTML = "<span style='background-color: red;color: white;'>" + item.temperatura + "</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            row.insertCell(0).innerHTML = item.temperatura;
                        }

                        if (item.umidade < 40 || item.umidade > 70) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            row.insertCell(1).innerHTML = "<span style='background-color: red;color: white;'>" + item.umidade + "</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            row.insertCell(1).innerHTML = item.umidade;
                        }
                        
                        if (item.qualidade_ar == "Inaceitave") {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            row.insertCell(2).innerHTML = "<span style='background-color: red;color: white;'>" + item.qualidade_ar + "</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            row.insertCell(2).innerHTML = item.qualidade_ar;
                        }

                        if (item.amonia > 1) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            row.insertCell(3).innerHTML = "<span style='background-color: red;color: white;'>" + item.amonia + "%</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            row.insertCell(3).innerHTML = item.amonia +"%";
                        }

                        if (item.co2 > 1) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            row.insertCell(4).innerHTML = "<span style='background-color: red;color: white;'>" + item.co2 + "</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            row.insertCell(4).innerHTML = item.co2;
                        }

                        if (item.agua_potavel > 40) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            row.insertCell(5).innerHTML = "<span style='background-color: red;color: white;'>" + item.agua_potavel + "</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            row.insertCell(5).innerHTML = item.agua_potavel;
                        }

                        if (item.fumaca == 'True') {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            row.insertCell(6).innerHTML = "<span style='background-color: red;color: white;'>" + item.fumaca + "</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            row.insertCell(6).innerHTML = item.fumaca;
                        }
        
                    });
                }

                // Atualiza os dados da tabela a cada 5 segundos
                setInterval(sensores, 5000);

                // Carrega os dados pela primeira vez ao carregar a página
                sensores();
            </script>
            
        </section> 

        <section class="dados" >
                
                Entrada de frangos
         
        </section>

        <section class="dados" >
                
                Frangos mortos
         
        </section>
         
          
    
        </nav>

        <hr>
        <br>

        <footer>
            rodape
        </footer>
        

    </body>
</html>