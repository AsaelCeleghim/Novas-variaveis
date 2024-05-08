import random
import time
import mysql.connector

# Função para gerar um valor de temperatura aleatório
def gera_temperatura():
    # Gerar um valor aleatório entre 15°C e 30°C
    return random.uniform(1, 40)

# Função para gerar um valor de umidade aleatório
def gera_umidade():
    # Gerar um valor aleatório entre 40% e 70%
    return random.uniform(1, 100)

def gera_qualidade_ar():
    # Gerar um valor aleatório entre 40% e 70%
    return random.choice(['Aceitavel', 'Inaceitavel'])

def gera_amonia():
    # Gerar um valor aleatório entre 40% e 70%
    return random.uniform(0, 2)

def gera_co2():
    # Gerar um valor aleatório entre 40% e 70%
    return random.uniform(0, 2)

def gera_agua():
    # Gerar um valor aleatório entre 40% e 70%
    return random.uniform(40, 70)

def gera_fumaca():
    # Gerar um valor aleatório entre 40% e 70%
    return random.choice(['True', 'False'])

# Loop infinito para gerar valores a cada minuto
while True:
    # Gerar valores de temperatura e umidade
    temperatura = gera_temperatura()
    umidade = gera_umidade()
    ar = gera_qualidade_ar()
    amonia = gera_amonia()
    co2 = gera_co2()
    agua = gera_agua()
    fumaca = gera_fumaca()

    # Saída dos valores gerados
    print('Temperatura:', temperatura)
    print('Umidade:', umidade)
    print('Qualidade do ar:', ar)
    print('Amônia:', amonia)
    print('CO2:', co2)
    print('Água potável:', agua)
    print('Sensor de fumaça:', fumaca)
    print("-" * 30)

    try:
        # Conectar ao banco de dados
        mydb = mysql.connector.connect(
            host="localhost",
            user="root",
            password="",
            database="poupave"
        )

        mycursor = mydb.cursor()
        sql = "delete from dadossensores"
        mycursor.execute(sql)
        # Inserir os valores no banco de dados usando parâmetros para prevenir injeção SQL
        sql = "INSERT INTO dadossensores (temperatura, umidade, qualidade_ar, amonia, co2, agua_potavel, fumaca) VALUES (%s, %s, %s, %s, %s, %s, %s)"
        val = (temperatura, umidade, ar, amonia, co2, agua, fumaca)
        mycursor.execute(sql, val)

        mydb.commit()

        print(mycursor.rowcount, "record inserted.")

    except mysql.connector.Error as e:
        print("Erro ao conectar ao banco de dados:", e)

    finally:
        # Certificar-se de fechar a conexão com o banco de dados
        if 'mydb' in locals():
            mydb.close()

    # Aguardar 1 minuto antes da próxima iteração
    time.sleep(5)
