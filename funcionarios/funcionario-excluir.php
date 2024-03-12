<?php
require "funcao-funcionarios.php";
require "../cabecalho.php";

$codigo_funcionario=$_GET['codigo_funcionario'];

excluirFuncionario($conexao,$codigo_funcionario);
header("Location:funcionario-lista.php");
?>