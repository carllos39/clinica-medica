<?php 
require "../conecta.php";

function validarUsuario($conexao,$email){
    $sql="SELECT * FROM funcionarios WHERE email=$email";
    $resultado=mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
}
function inserirFuncionario($conexao,$nome_completo,$numero_rg,$emissor,$numero_cpf,$cep,$endereco,$numero,$bairro,$cidade,$estado,$celular,$email,$data_nascimento){
$sql="INSERT INTO funcionarios(nome_completo,numero_rg,orgao_emissor,numero_cpf,cep,endereco,numero,bairro,cidade,estado,celular,email,data_nascimento) VALUES('$nome_completo','$numero_rg','$emissor','$numero_cpf','$cep','$endereco','$numero','$bairro','$cidade','$estado','$celular','$email','$data_nascimento')";

mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
}

function altualizarFuncionario($conexao,$id,$nome_completo,$numero_rg,$emissor,$numero_cpf,$cep,$endereco,$numero,$bairro,$cidade,$estado,$celular,$email,$data_nascimento){
    $sql="UPDATE funcionarios SET nome_completo='$nome_completo',numero_rg='$numero_rg',orgao_emissor='$emissor',numero_cpf='$numero_cpf',cep='$cep',endereco='$endereco',numero=$numero,bairro='$bairro',cidade='$cidade',estado='$estado',celular='$celular',email='$email',data_nascimento='$data_nascimento'";
    
    mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
    }

    function excluirFuncionario($conexao,$codigo_funcionario){
      $sql="DELETE FROM funcionarios WHERE codigo_funcionario=$codigo_funcionario"; 

      mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
    }
    function listaFuncionario($conexao){
        $sql="SELECT * FROM funcionarios";
        $resultado=mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
        return mysqli_fetch_all($resultado,MYSQLI_ASSOC);   
    }
    function formataData($data){
        $dataformatada=date("d/m/Y",strtotime($data));
        return $dataformatada;
    }
?>
