
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2 class="text-center"> Instituiçoes Cadastradas </h2>
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Descriçao</th>
                <th>Status</th>
            </tr>
            <?php
            foreach ($instituicoes->result() as $instituicao) {
                echo '<tr>';
                echo '<td>';
                echo $instituicao->nome;
                echo '</td>';
                echo '<td>';
                echo $instituicao->cnpj;
                echo '</td>';
                echo '<td>';
                echo $instituicao->telefone;
                echo '</td>';
                echo '<td>';
                echo $instituicao->email;
                echo '</td>';
                echo '<td>';
                echo $instituicao->endereco;
                echo '</td>';
                echo '<td>';
                echo $instituicao->descricao;
                echo '</td>';
                echo '<td>';
                if ($instituicao->isDisponivel)
                    echo '<span class="label label-success"> Ativo </span>';
                else
                    echo '<span class="label label-danger"> Desativado </span>';
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>
