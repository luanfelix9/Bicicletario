<?php
    session_start();
    date_default_timezone_set('America/Maceio');
    $horadata = getdate(time());
    $agora = date('d/m');
    $horas = date('H:i:s');
    if(empty($_POST['codigo']) || empty($_POST['nome'])){
        $_SESSION['vazio_entrada'] = true;
        header('Location: gerenciar.php');
        exit();
    }
    if(isset($_POST["entrada"])){
        if((isset($_POST['codigo'])) && isset($_POST['nome'])){
            $cadastro = array('codigo' => $_POST['codigo'],'nome' => $_POST['nome'],'telefone' => $_POST['telefone'], "horas" => $horas, "data" => $agora, );
            $validar = array('codigo' => $_POST['codigo'], );
            $fp = fopen ("arquivo/entrada.txt", "a+");
            foreach ($cadastro as $valor){
                fwrite($fp, $valor . PHP_EOL);
              }
              fclose($fp);
            $fp = fopen ("arquivo/codigo.txt", "a+");
            foreach ($validar as $valor){
                fwrite($fp, $valor . PHP_EOL);
              }
              fclose($fp);
            header('Location: gerenciar.php');
            exit();
        }else{
            $_SESSION['nao_entrada'] = true;
            header('Location: gerenciar.php');
            exit();
        }
    }