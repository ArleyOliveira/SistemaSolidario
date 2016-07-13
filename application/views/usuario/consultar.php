<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2 class="text-center"> Usuários Cadastrados </h2>
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
            </tr>
            <?php
            foreach ($usuario->result() as $usuario) {
                echo '<tr>';
                echo '<td>';
                echo $usuario->nome;
                echo '</td>';
                echo '<td>';
                echo $usuario->dataNascimento;
                echo '</td>';
                echo '<td>';
                echo $usuario->email;
                echo '</td>';
                echo '<td>';
                
            }
            ?>
        </table>
    </div>
    <div class="col-md-2"></div>
</div>
