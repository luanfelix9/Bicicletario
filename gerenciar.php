<?php 
 include('verificar.php');
?> 
<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <!--título-->
            <title>Gerenciador de Estacionamento </title>
            <!--metas-->
            <meta charset="UTF-8">
            <meta name="description" content="O programa é um gerenciador de estacionamento, onde controlará a entrada e saida dos veiculos e emitirá um relatório">
            <meta name="author" content="Luan Felix e Milena Matos">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="keywords" content="estacionamento,carro,moto,google,entrada,saida">
            <!--links-->
            <link rel="shortcut icon" href="img/logosite.png">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/formulario.css">

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <!--script-->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/1f951e41ba.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
        </head>
        <body>
        <div class="Container">
            <div class="row">
                <div class="col">
                    <div class="link">
                        <a href="logout.php">X</a>
                    </div>  
                    <h2>Bicicletário</h2>
                    <iframe width="300" height="100" src="https://relogioonline.com.br/embed/horario/Sao_Paulo_BR/Aracaju+-+Sergipe/#theme=1&ampm=0&showdate=1" frameborder="0" allowfullscreen></iframe>
                    <h3>Cadastrar Entrada</h3>
                        <?php
                            if(isset($_SESSION['vazio_entrada'])){
                        ?>
                            <div class="erro">
                                Campo obrigatório não preenchido
                            </div>
                        <?php
                            }
                            unset($_SESSION['vazio_entrada']);
                        ?>
                    <form method="POST" action="entrada.php"> 
                        <input type="text" id="codigo" name="codigo" placeholder="* Código do Usuário: ">
                        <input type="text" id="nome" name="nome" placeholder="* Nome: ">
                        <input type="number" id="telefone" name="telefone" placeholder="  Telefone: ">
                        <div class="center">
                            <button type="submit" name="entrada">Entrada</button>
                        </div>
                    </form>
                    <form method="POST" action="saida.php">    
                        <h3>Cadastrar Saída</h3>
                        <?php
                            if(isset($_SESSION['vazio_saida'])){
                        ?>
                            <div class="erro">
                                Campo obrigatório não preenchido
                            </div>
                        <?php
                            }
                            unset($_SESSION['vazio_saida']);
                        ?>
                        <?php
                            if(isset($_SESSION['nao_valido'])){
                        ?>
                            <div class="erro">
                                Insira um código válido
                            </div>
                        <?php
                            }
                            unset($_SESSION['nao_valido']);
                        ?>
                        <input type="text" id="codigosaida" name="codsaida" placeholder="* Código do Usuário: ">
                        <div class="center">
                            <button type="submit" name="saida">Saída</button>
                        </div>
                        <div class="link">
                            <a href="relatorio.php">Relatório de Usuarios</a>
                        </div>
                        </div>
                    </div>
                </form>
        </body>
    </html>    