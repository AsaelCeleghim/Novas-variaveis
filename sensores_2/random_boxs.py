import random
import time
import mysql.connector

def box2():
    # Função para gerar um valor de temperatura aleatório
    def gera_metano():
        # Gerar um valor aleatório entre 300 e 10000
        return round(random.uniform(300, 10000), 1)

    # Função para gerar um valor de umidade aleatório
    def gera_amonia():
        # Gerar um valor aleatório entre 5 e 200
        return round(random.uniform(5, 200), 1)

    def gera_h2s():
        # Gerar um valor aleatório entre 1 e 200
        return round(random.uniform(1, 200), 1)

    def gera_iluminacao():
        # Gerar um valor aleatório entre 0% e 100%
        return round(random.uniform(0, 100), 1)

    def gera_umidade():
        # Gerar um valor aleatório entre 0% e 100%
        return round(random.uniform(0, 100), 1)

    def gera_umidade_cama():
        # Gerar um valor aleatório entre 40% e 70%
        return round(random.uniform(0, 100),1)

    def gera_temperatura_cama():
        # Gerar um valor aleatório entre 40% e 70%
        return round(random.uniform(0, 100),1)

    # Loop infinito para gerar valores a cada minuto
    while True:
        # Gerar valores de temperatura e umidade
        metano = gera_metano()
        amonia = gera_amonia()
        h2s = gera_h2s()
        iluminacao = gera_iluminacao()
        umidade = gera_umidade()
        umidade_cama = gera_umidade_cama()
        temperatura_cama = gera_temperatura_cama()

        # Saída dos valores gerados
        print('Metano:', metano)
        print('Amonia:', amonia)
        print('H2s:', h2s)
        print('Ilumicação:', iluminacao)
        print('umidade:', umidade)
        print('Umidade da cama:', umidade_cama)
        print('Temperatura da cama:', temperatura_cama)
        print("-" * 30)

        try:
            # Conectar ao banco de dados
            mydb = mysql.connector.connect(
                host="localhost",
                user="root",
                password="",
                database="sensores_2"
            )

            mycursor = mydb.cursor()
            sql = "delete from box2"
            mycursor.execute(sql)
            # Inserir os valores no banco de dados usando parâmetros para prevenir injeção SQL
            sql = "INSERT INTO box2 (metano, amonia, h2s, iluminacao, umidade, umidade_cama, temperatura_cama) VALUES (%s, %s, %s, %s, %s, %s, %s)"
            val = (metano, amonia, h2s, iluminacao, umidade, umidade_cama, temperatura_cama)
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
        box1()

def box1():
    # Função para gerar um valor de temperatura aleatório
    def gera_metano():
        # Gerar um valor aleatório entre 300 e 10000
        return round(random.uniform(300, 10000), 1)

    # Função para gerar um valor de umidade aleatório
    def gera_amonia():
        # Gerar um valor aleatório entre 5 e 200
        return round(random.uniform(5, 200), 1)

    def gera_h2s():
        # Gerar um valor aleatório entre 1 e 200
        return round(random.uniform(1, 200), 1)

    def gera_iluminacao():
        # Gerar um valor aleatório entre 0% e 100%
        return round(random.uniform(0, 100), 1)

    def gera_umidade():
        # Gerar um valor aleatório entre 0% e 100%
        return round(random.uniform(0, 100), 1)

    def gera_umidade_cama():
        # Gerar um valor aleatório entre 40% e 70%
        return round(random.uniform(0, 100),1)

    def gera_temperatura_cama():
        # Gerar um valor aleatório entre 40% e 70%
        return round(random.uniform(0, 100),1)

    # Loop infinito para gerar valores a cada minuto
    while True:
        # Gerar valores de temperatura e umidade
        metano = gera_metano()
        amonia = gera_amonia()
        h2s = gera_h2s()
        iluminacao = gera_iluminacao()
        umidade = gera_umidade()
        umidade_cama = gera_umidade_cama()
        temperatura_cama = gera_temperatura_cama()

        # Saída dos valores gerados
        print('Metano:', metano)
        print('Amonia:', amonia)
        print('H2s:', h2s)
        print('Ilumicação:', iluminacao)
        print('umidade:', umidade)
        print('Umidade da cama:', umidade_cama)
        print('Temperatura da cama:', temperatura_cama)
        print("-" * 30)

        try:
            # Conectar ao banco de dados
            mydb = mysql.connector.connect(
                host="localhost",
                user="root",
                password="",
                database="sensores_2"
            )

            mycursor = mydb.cursor()
            sql = "delete from box1"
            mycursor.execute(sql)
            # Inserir os valores no banco de dados usando parâmetros para prevenir injeção SQL
            sql = "INSERT INTO box1 (metano, amonia, h2s, iluminacao, umidade, umidade_cama, temperatura_cama) VALUES (%s, %s, %s, %s, %s, %s, %s)"
            val = (metano, amonia, h2s, iluminacao, umidade, umidade_cama, temperatura_cama)
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
        # time.sleep(5)
        # box2()
        balanca()

def balanca():
     # Função para gerar um valor de temperatura aleatório
    def gera_balanca1():
        # Gerar um valor aleatório entre 300 e 10000
        return round(random.uniform(0, 20), 1)

    # Função para gerar um valor de umidade aleatório
    def gera_balanca2():
        # Gerar um valor aleatório entre 5 e 200
        return round(random.uniform(0, 20), 1)
    # Loop infinito para gerar valores a cada minuto
    while True:
        # Gerar valores de temperatura e umidade
        balanca1 = gera_balanca1()
        balanca2 = gera_balanca2()
       
        # Saída dos valores gerados
        print('Balança1:', balanca1)
        print('Balança2:', balanca2)
        print("-" * 30)

        try:
            # Conectar ao banco de dados
            mydb = mysql.connector.connect(
                host="localhost",
                user="root",
                password="",
                database="sensores_2"
            )

            mycursor = mydb.cursor()
            sql = "delete from balanca"
            mycursor.execute(sql)
            # Inserir os valores no banco de dados usando parâmetros para prevenir injeção SQL
            sql = "INSERT INTO balanca (balanca_1, balanca_2) VALUES (%s, %s)"
            val = (balanca1, balanca2)
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
        # time.sleep(5)
        fora()

def fora():
     # Função para gerar um valor de temperatura aleatório
    def gera_temperatura():
        # Gerar um valor aleatório entre 300 e 10000
        return round(random.uniform(0, 20), 1)

    # Função para gerar um valor de umidade aleatório
    def gera_vasao():
        # Gerar um valor aleatório entre 5 e 200
        return round(random.uniform(0, 20), 1)
    def gera_temperatura_agua():
        # Gerar um valor aleatório entre 5 e 200
        return round(random.uniform(0, 20), 1)

    def gera_energia():
        # Gerar um valor aleatório entre 5 e 200
        return random.choice([0, 1])
    # Loop infinito para gerar valores a cada minuto

    while True:
        # Gerar valores de temperatura e umidade
        temperatura = gera_temperatura()
        vasao = gera_vasao()
        temperatura_agua = gera_temperatura_agua()
        energia = gera_energia()
       
        # Saída dos valores gerados
        print('Temperatura:', temperatura)
        print('vasao:', vasao)
        print('temperatura_agua:',temperatura_agua)
        print('energia:', energia)
        print("-" * 30)

        try:
            # Conectar ao banco de dados
            mydb = mysql.connector.connect(
                host="localhost",
                user="root",
                password="",
                database="sensores_2"
            )

            mycursor = mydb.cursor()
            sql = "delete from fora"
            mycursor.execute(sql)
            # Inserir os valores no banco de dados usando parâmetros para prevenir injeção SQL
            sql = "INSERT INTO fora (temperatura, vasao, temperatura_agua, energia) VALUES (%s, %s, %s, %s)"
            val = (temperatura, vasao, temperatura_agua, energia )
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
        # time.sleep(5)
        box2()


box1() 

