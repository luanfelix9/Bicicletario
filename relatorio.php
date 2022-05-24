<?php 
 include('verificar.php');
 $arquivo1 = file('arquivo/entrada.txt');
 $arquivo2 = file('arquivo/saida.txt');
 $horadata = getdate(time());
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
            <link rel="stylesheet" href="css/relatorio.css">

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <!--script-->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/1f951e41ba.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
            <style>
                .cor{
                    color: white;
                    font-family: 'Open Sans', sans-serif;
                    margin: 10px 50px 10px;
                }
                .rodape{
                    color: white;
                    text-align: center;
                }
                .link{
                    font-family: 'Open Sans', sans-serif;
                }
            </style>
        </head>
        <body>
        <div class="Container">
        <br><br><br><br><br><br>
            <div class="row">
            <br><br><br><br>
                <div class="col">
                    <div class="link">
                        <a href="logout.php">X</a>
                    </div>
                    <h2>Relatório de Usuários</h2>
                    <hr>
                    <h3>Entrada</h3>
                    <div class="cor" >
                    <ol>
                        <li>Código</li>
                        <ol>
                            <?php  
                                for($contador = 0; $contador< sizeof($arquivo1); $contador = $contador + 5){
                                    echo "| ".(trim($arquivo1[$contador])." | "."<br>");
                                }
                            ?>
                        </ol>
                        <li>Nome</li>
                        <ol>
                            <?php  
                                for($contador = 1; $contador< sizeof($arquivo1); $contador = $contador + 5){
                                echo "| ".(trim($arquivo1[$contador])." | "."<br>");
                            }
                        ?>
                        </ol>
                        <li>Telefone</li>
                        <ol>
                            <?php  
                                for($contador = 2; $contador< sizeof($arquivo1); $contador = $contador + 5){
                                    echo "| ".(trim($arquivo1[$contador])." | "."<br>");
                                }
                            ?>
                        </ol>
                        <li>Hora de Entrada</li>
                        <ol>
                            <?php  
                                for($contador = 3; $contador< sizeof($arquivo1); $contador = $contador + 5){
                                    echo "| ".(trim($arquivo1[$contador])." | "."<br>");
                                }
                            ?>
                        </ol>
                        <li>Data de Entrada</li>
                        <ol>
                            <?php  
                                for($contador = 4; $contador< sizeof($arquivo1); $contador = $contador + 5){
                                    echo "| ".(trim($arquivo1[$contador])." | "."<br>");
                                }
                            ?>
                        </ol>
                    </ol>                                        
                    </div>
                    <br>
                    <hr>
                    <h3>Saída</h3>
                    <div class="cor">
                        <ol>
                            <li>Código</li>
                            <ol>
                            <?php  
                                for($contador = 0; $contador< sizeof($arquivo2); $contador = $contador + 3){
                                    echo "| ".(trim($arquivo2[$contador])." | "."<br>");
                                }
                            ?>
                            </ol>
                            <li>Hora da Saída</li>
                            <ol>
                            <?php  
                                for($contador = 1; $contador< sizeof($arquivo2); $contador = $contador + 3){
                                    echo "| ".(trim($arquivo2[$contador])." | "."<br>");
                                }
                            ?>
                            </ol>
                            <li>Data da Saída</li>
                            <ol>
                            <?php  
                                for($contador = 2; $contador< sizeof($arquivo2); $contador = $contador + 3){
                                    echo "| ".(trim($arquivo2[$contador])." | "."<br>");
                                }
                            ?>
                            </ol>
                        </ol>
                    <br>
                    </div>
                    <hr>
                    <br>
                    <div class="link">
                        <a href="gerenciar.php">Voltar</a>
                    </div>
                    <footer>
                        <div class="rodape">
                            Aracaju-SE
                            <br>
                            <?php echo ($agora = date('d/m/Y'))?>
                        </div>
                    </footer>
                </div>
            </div>
        </div>            
        
        
        </body>
    </html>    