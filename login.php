<?php
 session_start();
 $login = 'luan';
 $senha = 'milena';
 
 if(empty($_POST['login']) || empty($_POST['senha'])){
   $_SESSION['vazio_login'] = true;
   header('Location: index.php');
    exit();
 }
 if(isset($_POST["entrar"])){
  if($_POST['login'] == $login and  $_POST['senha'] == $senha){
    $_SESSION['login'] = $login;
    header('Location: gerenciar.php');
    exit();
 }else{
    $_SESSION['nao_login'] = true;
    header('Location: index.php');
 }
 }
?>
