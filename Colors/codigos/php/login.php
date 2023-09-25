<?php
$email = $_POST['emailUser'];
$senha = $_POST['senhaUser'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('bdcolors');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM user WHERE emailUser =
    '$email' AND senhaUser = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Email e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("emailUser",$email);
        header("Location:index.php");
      }
  }
?>