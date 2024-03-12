<?php 
require "conecta.php";
function inserirFuncionario($conexao,$nome_completo,$numero_rg,$orgao_emissor,$numero_cpf,$cep,$endereco,$numero,$bairro,$cidade,$estado,$celular,$email,$data_nascimento){
$sql="INSERT INTO funcionario(nome_completo,numero_rg,orgao_emissor,numero_cpf,cep,endereco,numero,bairro,cidade,estado,celular,email,data_nascimento) VALUES('$nome_completo','$numero_rg','$orgao_emissor','$numero_cpf','$cep','$endereco','$numero','$bairro','$cidade','$estado','$celular','$email',$data_nascimento)";

mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
}
?>