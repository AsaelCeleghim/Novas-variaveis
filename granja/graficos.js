// Função para carregar o PRAZO
function prazo() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "prazo.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                document.getElementById("prazo").innerHTML = "Passaram: " + data + " dias";
                var resta = 50 - data;
                document.getElementById("resta").innerHTML = "Resta: " + resta + "dias";
            } else {
                console.error("Erro ao carregar dados: " + xhr.status);
            }
        }
    };
    xhr.send();
}

window.onload = function() {
    prazo();
 };    
 
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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