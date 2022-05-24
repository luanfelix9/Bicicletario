<?php
    session_start();
    date_default_timezone_set('America/Maceio');
    $validar = file('arquivo/codigo.txt');
    $horadata = getdate(time());
    $agora = date('d/m');
    $horas = date('H:i:s');
    if(empty($_POST['codsaida'])){
        $_SESSION['vazio_saida'] = true;
        header('Location: gerenciar.php');
        exit();
    }
    if(isset($_POST["saida"])){
        if((isset($_POST['codsaida']))){
            for($contador = 0; $contador< sizeof($validar); $contador++){
                if($validar[$contador] == $_POST['codsaida']){
                    $saida = array('codsaida' => $_POST['codsaida'], "horas" => $horas, "data" => $agora,  );
                    $fp = fopen ("arquivo/saida.txt", "a+");
                    foreach ($saida as $valor){
                    fwrite($fp, $valor . PHP_EOL);
                    }
                    fclose($fp);
                    header('Location: gerenciar.php');
                    exit();
                }
            }
            $_SESSION['nao_valido'] = true;
            header('Location: gerenciar.php');
            exit();
        }else{
            $_SESSION['nao_saida'] = true;
            header('Location: gerenciar.php');
            exit();
        }  
    }
?>