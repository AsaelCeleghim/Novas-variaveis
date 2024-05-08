
                // Função para carregar os dados da tabela usando AJAX
                function busca_box1() {
                    var xhttp1 = new XMLHttpRequest();
                    xhttp1.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            mostrarDados1(data);
                        }
                    };
                    xhttp1.open("GET", "./php/box1.php", true);
                    xhttp1.send();
                }

                // Função para exibir os dados na tabela
                function mostrarDados1(data1) {
                    var table1 = document.getElementById("tabela_box1");
                    // Limpa a tabela antes de atualizá-la
                   
                    // Adiciona os novos dados à tabela
                    data1.forEach(function(lista1) {
                        // var row1 = table.insertRow();
                        
                        document.getElementById("metano1").innerHTML =lista1.metano + " ppm"; 
                        document.getElementById("amonia1").innerHTML = lista1.amonia + " ppm";
                        document.getElementById("h2s1").innerHTML = lista1.h2s + " ppm";
                        document.getElementById("iluminacao1").innerHTML = lista1.iluminacao + " %";
                        document.getElementById("umidade1").innerHTML = lista1.umidade + " %";
                        document.getElementById("umidade_cama1").innerHTML = lista1.umidade_cama + " %";
                        document.getElementById("temperatura_cama1").innerHTML = lista1.temperatura_cama + "ºC";     
                    });
                }
              
                // busca();
                // setInterval(busca, 5000);     
                
                //////////////////////////////////////////////////////////////////////////
                
                // Função para carregar os dados da tabela usando AJAX
                function busca_box2() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            mostrarDados2(data);
                        }
                    };
                    xhttp.open("GET", "./php/box2.php", true);
                    xhttp.send();
                }

                // Função para exibir os dados na tabela
                function mostrarDados2(data) {
                    var table = document.getElementById("tabela_box2");
                    // Limpa a tabela antes de atualizá-la
                   
                    // Adiciona os novos dados à tabela
                    data.forEach(function(lista2) {
                        // var row1 = table.insertRow();
                       
                        document.getElementById("metano2").innerHTML = lista2.metano + " ppm";
                        document.getElementById("amonia2").innerHTML = lista2.amonia + " ppm";
                        document.getElementById("h2s2").innerHTML = lista2.h2s + " ppm";
                        document.getElementById("iluminacao2").innerHTML = lista2.iluminacao + "%";
                        document.getElementById("umidade2").innerHTML = lista2.umidade + "%";
                        document.getElementById("umidade_cama2").innerHTML = lista2.umidade_cama + "%";
                        document.getElementById("temperatura_cama2").innerHTML = lista2.temperatura_cama + "ºC ";     
                    });
                }
                ///////////////////////////////////////////
                function busca_fora() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            mostrarDados3(data);
                        }
                    };
                    xhttp.open("GET", "./php/fora.php", true);
                    xhttp.send();
                }

                // Função para exibir os dados na tabela
                function mostrarDados3(data) {
                    var table = document.getElementById("tabela_fora");
                    // Limpa a tabela antes de atualizá-la
                   
                    // Adiciona os novos dados à tabela
                    data.forEach(function(lista3) {
                        // var row1 = table.insertRow();
                        document.getElementById("temperatura3").innerHTML = lista3.temperatura + "ºC";
                        document.getElementById("vasao").innerHTML = lista3.vasao + " pulso/litro";
                        document.getElementById("temperatura_agua").innerHTML = lista3.temperatura_agua + "ºC";
                        document.getElementById("energia").innerHTML = lista3.energia;   
                    });
                }
                //////////////////////////////////////////////////////////////////////////////////
                function busca_balanca() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var data = JSON.parse(this.responseText);
                            mostrarDados4(data);
                        }
                    };
                    xhttp.open("GET", "./php/balanca.php", true);
                    xhttp.send();
                }

                // Função para exibir os dados na tabela
                function mostrarDados4(data) {
                    var table = document.getElementById("tabela_balanca");
                    // Limpa a tabela antes de atualizá-la
                   
                    // Adiciona os novos dados à tabela
                    data.forEach(function(lista4) {
                        // var row1 = table.insertRow();
                        document.getElementById("balanca1").innerHTML = lista4.balanca_1 + " Kg";
                        document.getElementById("balanca2").innerHTML = lista4.balanca_2 + " Kg";
                    });
                }
                
                
                busca_box1();
                setInterval(busca_box1, 5000);   
                
                busca_box2();
                setInterval(busca_box2, 5000);  

                busca_fora();
                setInterval(busca_fora, 5000); 

                busca_balanca();
                setInterval(busca_balanca, 5000);  
           
               
       