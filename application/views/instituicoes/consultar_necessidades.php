
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2 class="text-center"> Instituições Cadastradas </h2>
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Instituição</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Data de Validade</th>
            </tr>
            <?php
            foreach ($necessidades->result() as $necessidade) {
                foreach ($instituicoes->result() as $instituicao) {
                    echo '<tr>';
                    echo '<td>';
                    echo $necessidade->nome;
                    echo '</td>';
                    echo '<td>';
                    echo $instituicao->nome;
                    echo '</td>';
                    echo '<td>';
                    echo $necessidade->descricao;
                    echo '</td>';
                    echo '<td>';
                    echo $necessidade->quantidade;
                    echo '</td>';
                    echo '<td>';
                    echo $necessidade->data_inicio;
                    echo '</td>';
                    echo '<td>';
                    echo $necessidade->data_validade;
                    echo '</td>';

                    echo '</tr>';
                }
            }
            ?>

        </table>

    </div>

    <div class="col-md-2"></div>
</div>
