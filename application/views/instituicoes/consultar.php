
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
            foreach ($doadores->result() as $doador) {
                echo '<tr>';
                echo '<td>';
                echo $doador->nome;
                echo '</td>';
                echo '<td>';
                echo $doador->cnpj;
                echo '</td>';
                echo '<td>';
                echo $doador->telefone;
                echo '</td>';
                echo '<td>';
                echo $doador->email;
                echo '</td>';
                echo '<td>';
                echo $doador->endereco;
                echo '</td>';
                echo '<td>';
                echo $doador->descricao;
                echo '</td>';
                echo '<td>';
                if ($doador->isDisponivel)
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
