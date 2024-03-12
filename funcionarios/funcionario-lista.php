<?php 
require "funcao-funcionarios.php";
require "../cabecalho.php";
$listaDeFuncionarios=listaFuncionario($conexao);

?>
<h1>Lista de funcionários</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Rg</th>
        <th>Emissor</th>
        <th>cpf</th>
        <th>Cep</th>
        <th>Endereço</th>
        <th>Número</th>
        <th>bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Celular</th>
        <th>Email</th>
        <th>Data Nascimento</th>
        <th>Ação</th>
        <th>Açao</th>
    </tr>
    <?php foreach ($listaDeFuncionarios as $funcionario) {?>
        <tr>
        <td><?=$funcionario['codigo_funcionario']?></td>
        <td><?=$funcionario['nome_completo']?></td>
        <td><?=$funcionario['numero_rg']?></td>
        <td><?=$funcionario['orgao_emissor']?></td>
        <td><?=$funcionario['numero_cpf']?></td>
        <td><?=$funcionario['cep']?></td>
        <td><?=$funcionario['endereco']?></td>
        <td><?=$funcionario['numero']?></td>
        <td><?=$funcionario['bairro']?></td>
        <td><?=$funcionario['cidade']?></td>
        <td><?=$funcionario['estado']?></td>
        <td><?=$funcionario['celular']?></td>
        <td><?=$funcionario['email']?></td>
        <td><?=formataData($funcionario['data_nascimento'])?></td>
        <td><a href="funcionario-excluir.php?codigo_funcionario=<?=$funcionario['codigo_funcionario']?>">Excluir</a></td>
        </tr>
        <?php } ?>
</table>
<?php 
require "../rodape.php";
?>