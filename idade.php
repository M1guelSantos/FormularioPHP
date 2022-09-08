<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controles</title>
</head>
<body>
<div>
<?php
 $nome = isset($_GET["nome"]) ? $_GET["nome"] : "não informado";
 $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
 $sexo = isset( $_GET["sexo"]) ?  $_GET["sexo"] : "sem sexo";
 $idade = date("Y")- $ano;
 echo "$nome é $sexo e tem $idade anos.";
?>
    <a href="02.html"><button>Voltar</button></a>
</div>
</body>
</html>
