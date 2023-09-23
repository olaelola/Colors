<?php

include_once("conexao.php");

$nome = $_POST["nomeUser"];
$sobrenome = $_POST["sobrenomeUser"];
$tel = $_POST["telUser"];
$nasc = $_POST["nascimentoUserr"];
$gen = $_POST["generoUser"];
$senha = $_POST["senhaUser"];

$sql = "INSERT INTO user(Nome, Sobrenome, Telefone, Genero, Nasc, Email, Senha, id)
VALUES('$nome', '$sobrenome', '$tel', '$nasc', '$gen', '$senha')";

if ($conn->query($sql) === TRUE) {
    ?>
    <script>
        alert("Cadastro concluido");
        window.location = "cadastro.php";
    </script>

    <?php
}
else{
?>
<script>
    alert("erro");
    window.history.back();
    </script>
    <?php
}

?>
