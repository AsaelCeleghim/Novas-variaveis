<html>
    <head>
        <title>Aplicativo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-GVJ1KvY4uIlm6Q+DEy+P6lQ62iNSpCN4+dy8FfNgsnkhW2GJ7cEnaNL6/12Zlrds" crossorigin="anonymous">


        <style>
            *{
                padding: 0;
                margin: 0;
            }
            body{
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
            }
            .smartphone {
            position: relative;
            width: 360px; /* Largura do smartphone */
            height: 610px; /* Altura do smartphone 640*/
            margin: 20px auto; /* Centralizar na página */
            background-color: #333;
            border-radius: 20px; /* Cantos arredondados */
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Sombra */
        }
        .screen {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            overflow: auto;
        }

        .card{
            width: 173px;
            height: 100px;
            background: #f0f0f0;
            
            margin: 2px;
            margin-top: 10px;
            border-radius: 20px;
            display: inline-block;
            text-align: center;
            padding: 20px 0 0px 0;
        }
        .card:hover{
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Sombra */
        }
        span{
            display: inline-block;
            margin: 0;
            padding: 0;
        }
        .msg{
            font-size: 11px;
            /* border: 1px solid red; */
            /* padding: 5px; */
            margin: 0;
            display: inline-block;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(2, 0.5fr);
            grid-gap: 5px;

            
        }
        .item {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
        }
        h3{
            padding: 5px;
        }
        ul{
            list-style: none;
            border-radius: 20px;
            padding: 5px;
        }
        ul li{
            display: inline;
            padding: 20px;
            background: blue;
            color: white;
            
            
        }
        #nav{
            position: fixed;
            bottom: 20px;
        }
        li:hover{
            background: blueviolet;
        }
        a{
            text-decoration: none;
            color: white;
        }
        .active{
            background: blueviolet;
        }
        .active{
            background: blueviolet;
        }

        form{
            padding: 20px;
        }

        .btn{
            margin: 10px;
        }
        h5{
            margin-top: 10px;
            margin-left: 10px;
        }

        section{
            width: 100px;
            background: #EEE8AA;
            margin: 10px;
            border-radius: 20px;
            padding: 10px;
            
        }
        section:hover{
            box-shadow: 1px  1px 3px;
        }
        
        </style>
    </head>
    <body>

    <div class="smartphone">
        <div class="screen">

        <div class="container">
            <section id="quantidade_entrada">
                
            </section>
            <section id="quantidade_morto">
            <script>
                // Função para carregar os dados da tabela usando AJAX
                function frango() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            mostrarDados1(data);
                        }
                    };
                    xhttp.open("GET", "frangos_mortos.php", true);
                    xhttp.send();
                }

                // Função para exibir os dados na tabela
                function mostrarDados1(data) {
                    // var table = document.getElementById("tabela_insumos");
                    // Limpa a tabela antes de atualizá-la
                    // table.innerHTML = "<tr><th>Data Transação</th><th>Insumo</th><th>Quantidade</th><th>Fornecedor</th><th>Número Lote</th></tr>";
                    // Adiciona os novos dados à tabela
                    data.forEach(function(item1) {
                        
                        document.getElementById("quantidade_entrada").innerHTML ="Entrada: " + item1.quantidade_entrada
                        document.getElementById("quantidade_morto").innerHTML ="Mortos: " + item1.quantidade_morto
                            
                    });
                }

                // Atualiza os dados da tabela a cada 5 segundos
                // setInterval(insumos, 5000);

                // Carrega os dados pela primeira vez ao carregar a página
                // sensores();
                window.onload = function() {
                frango();
                }
            </script>  
            </section>
         
         
            <h5>Quantos frangos?</h5>
            <br>
            <form action="atualiza_frangos.php" method="post">
                <input type="tex" name="qtd_frangos" >

                <!-- <input class="btn" type="submit" nome="Atualizar" placeholder="mortos"> -->
                <button class="btn" name="mortos">Mortos</button>
                <button class="btn" name="vivos" >Vivos</button>
           
            </form>
            <div id="nav">
                <ul>
                    <li>
                        <a href="app.php">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="25" height="25">
                                <circle cx="12" cy="12" r="3"/>
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8zm11 3a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg> -->
                            Sensores
                        </a>
                    </li>
                    <li>
                        <a href="app_adm.php">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="25" height="25">
                                <path d="M15 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8l-6-5z"></path>
                                <path d="M15 3v5h5"></path>
                            </svg> -->
                            Adm
                        </a>
                    </li>
                    <li class="active">
                        <a href="app_frangos_mortos.php">
                            Frangos mortos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

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
                    // var table = document.getElementById("tabela");
                    // Limpa a tabela antes de atualizá-la
                    // table.innerHTML = "<tr><th>Temperatura</th><th>Umidade</th><th>Quantidade do ar</th><th>Amonia</th><th>Co2</th><th>Agua Potovel</th><th>Fumaça</th></tr>";
                    // Adiciona os novos dados à tabela
                    data.forEach(function(item) {
                        // var row = table.insertRow();
                        if (item.temperatura < 15 || item.temperatura > 30) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            if(item.temperatura < 15){
                                document.getElementById("temperatura").innerHTML = "<p><span style='background-color: red;color: white;'>" + item.temperatura + "°C</span></p>";
                                document.getElementById("msg_temperatura").innerHTML = "<p>Verifique o sistema de aquecimento, aumente a densidade de aves para gerar calor corporal ou forneça cobertura adicional para reter o calor.</p>";
                            }
                             if(item.temperatura >30){
                                document.getElementById("temperatura").innerHTML = "<p><span style='background-color: red;color: white;'>" + item.temperatura + "°C</span></p>";
                                document.getElementById("msg_temperatura").innerHTML = "<p>Verifique e ajuste o sistema de ventilação, instale ventiladores adicionais ou ajuste os sistemas de resfriamento.</p>";
                             }
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            document.getElementById("temperatura").innerHTML = item.temperatura + "°C";
                            document.getElementById("msg_temperatura").innerHTML = "";
                        }


                        if (item.umidade < 40 || item.umidade > 70) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            if(item.umidade < 40){
                                document.getElementById("umidade").innerHTML = "<p><span style='background-color: red;color: white;'>" + item.umidade + "%</span>";
                                document.getElementById("msg_umidade").innerHTML = "<p><span>Aumente a umidade do ar por meio de sistemas de nebulização ou umidificadores.</span>";
                            }
                            if(item.umidade > 70){
                                document.getElementById("umidade").innerHTML = "<p><span style='background-color: red;color: white;'>" + item.umidade + "%</span></p>";
                                document.getElementById("msg_umidade").innerHTML = "<p><span >Melhore a ventilação para reduzir a umidade do ar ou use desumidificadores.</span><p>";
                            }
                            
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            document.getElementById("umidade").innerHTML = item.umidade + "%";
                            document.getElementById("msg_umidade").innerHTML = "";
                        }
                        
                        if (item.qualidade_ar == "Inaceitave") {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            document.getElementById("qualidade_ar").innerHTML = "<span style='background-color: red;color: white;'>" + item.qualidade_ar + "</span>";
                            
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            document.getElementById("qualidade_ar").innerHTML = "<span>" + item.qualidade_ar + "</span>";
                        }

                        if (item.amonia) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            if(item.amonia >1){
                                document.getElementById("amonia").innerHTML = "<span style='background-color: red;color: white;'>" + item.amonia + "</span>";
                                document.getElementById("msg_amonia").innerHTML = "<span>Melhore a ventilação para reduzir a concentração de amônia.Limpe regularmente as instalações para remover resíduos de animais.Utilize materiais de cama absorventes para reduzir a produção de amônia.</span>";
                            }
                            else {
                            // Caso contrário, adiciona o valor normalmente
                            document.getElementById("amonia").innerHTML = "<span>" + item.amonia + "</span>";
                        }
                            
                        } 

                        if (item.co2) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            if(item.co2 >1){
                                document.getElementById("co2").innerHTML = "<span style='background-color: red;color: white;'>" + item.co2 + "</span>";
                                document.getElementById("msg_co2").innerHTML = "<span>Aumente a ventilação para melhorar a circulação do ar e reduzir os níveis de CO2</span>";
                            }  else {
                            // Caso contrário, adiciona o valor normalmente
                            document.getElementById("co2").innerHTML = item.co2;
                        }         
                        } 

                        if (item.agua_potavel > 40) {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            document.getElementById("agua_potavel").innerHTML = "<span style='background-color: red;color: white;'>" + item.agua_potavel + "</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            document.getElementById("agua_potavel").innerHTML = item.agua_potavel;
                        }

                        if (item.fumaca == 'True') {
                            // Se a temperatura estiver acima de 30, define a cor de fundo como vermelho
                            document.getElementById("fumaca").innerHTML = "<span style='background-color: red;color: white;'>" + item.fumaca + "</span>";
                        } else {
                            // Caso contrário, adiciona o valor normalmente
                            document.getElementById("fumaca").innerHTML = item.fumaca;
                        }
        
                    });
                }

                // Atualiza os dados da tabela a cada 5 segundos
                setInterval(sensores, 5000);

                // Carrega os dados pela primeira vez ao carregar a página
                sensores();
            </script>

    </body>
</html>