<?php
include_once "../conexao/conexao.php";
$sql = "SELECT * FROM quimica";
$query = mysqli_query($conn, $sql);

include_once'../template/template_header.php';
?>
<div class="page-header">
    <h1>Lista de votos de agropecuaria<h1>
</div>

<div id="acoes" class="text-right row" style="margin-bottom: 10px;">   
      
</div>
<div id="table" class="row">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>Código</th>
                <th>Modelo</th>
                <th>Quantidade de votos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($dados = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $dados['id'] ?></td>
                    <td><?= $dados['nome'] ?></td>
                    <td><?= $dados['qnt_voto'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>