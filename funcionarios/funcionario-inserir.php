<?php 
require "funcao-funcionarios.php";
require "../cabecalho.php";
if(isset($_POST['inserir'])){
$nome_completo=mysqli_real_escape_String($conexao,$_POST['nome_completo']);
$numero_rg=mysqli_real_escape_String($conexao,$_POST['numero_rg']);
$emissor=mysqli_real_escape_String($conexao,$_POST['emissor']);
$numero_cpf=mysqli_real_escape_String($conexao,$_POST['numero_cpf']);
$cep=mysqli_real_escape_String($conexao,$_POST['cep']);
$endereco=mysqli_real_escape_String($conexao,$_POST['endereco']);
$numero=mysqli_real_escape_String($conexao,$_POST['numero']);
$bairro=mysqli_real_escape_String($conexao,$_POST['bairro']);
$cidade=mysqli_real_escape_String($conexao,$_POST['cidade']);
$estado=mysqli_real_escape_String($conexao,$_POST['estado']);
$celular=mysqli_real_escape_String($conexao,$_POST['celular']);
$email=mysqli_real_escape_String($conexao,$_POST['email']);
$data_nascimento=mysqli_real_escape_String($conexao,$_POST['data_nascimento']);

inserirFuncionario($conexao,$nome_completo,$numero_rg,$emissor,$numero_cpf,$cep,$endereco,$numero,$bairro,$cidade,$estado,$celular,$email,$data_nascimento);
header("Location:funcionario-inserir.php");
}
?>

<h1>Cadastro de funcionários</h1>   
<form action="" method="post">
<div>
    <label for="nome">Nome Completo</label>
    <input type="text" name="nome_completo" id="nome">
</div>
<div>
    <label for="numero_rg">Número do Rg</label>
    <input type="text" name="numero_rg" id="rg">
</div>
<div>
    <label for="emissor">Emissor</label>
    <input type="text" name="emissor" id="emissor">
</div>
    <div>
    <label for="numero_cpf">Numero cpf</label>
    <input type="text" name="numero_cpf" id="numero_cpf">

    <label for="cep">CEP: <br><span id="status"></span></label>
            <div id="area-do-cep">
                <input placeholder="Somente números" type="text" id="cep" name="cep" maxlength="9" inputmode="numeric" required> <br>
                <button id="buscar">Buscar</button>
            </div>
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input readonly type="text" id="endereco" name="endereco" size="30">
        </div>
        <div>
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" size="20">
        </div>
        <div>
            <label for="bairro">Bairro:</label>
            <input readonly type="text" id="bairro" name="bairro">
        </div>
        <div>
            <label for="cidade">Cidade:</label>
            <input readonly type="text" id="cidade" name="cidade">
        </div>
        <div>
            <label for="estado">Estado:</label>
            <input readonly type="text" id="estado" name="estado">
        </div>
        </div>
        <div>
            <label for="celular">Celular:</label>
            <input  type="cel" id="celular" name="celular">
        </div>
        </div>
        <div>
            <label for="email">Email:</label>
            <input  type="email" id="email" name="email">
        </div>
        </div>
        <div>
            <label for="data-nascimento">Data Nascimento:</label>
            <input  type="date" id="data-nascimento" name="data_nascimento">
        </div>
<button type="submit" name="inserir">Cadastrar</button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="js/contato.js"></script>
<?php 
require "../rodape.php";
?>