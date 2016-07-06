
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2 class="text-center"> Doadores Cadastrados </h2>
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
            </tr>
            <?php
            foreach ($doadores->result() as $doador) {
                echo '<tr>';
                echo '<td>';
                echo $doador->nome;
                echo '</td>';
                echo '<td>';
                echo $doador->telefone;
                echo '</td>';
                echo '<td>';
                echo $doador->endereco;
                echo '</td>';
                echo '<td>';
                echo $doador->email;
                echo '</td>';
                echo '<td>';
                echo $doador->dataNascimento;
                echo '</td>';
                echo '<td>';
            }
            ?>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>
