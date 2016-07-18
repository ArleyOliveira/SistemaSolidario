
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
            foreach ($instituicoes->result() as $necessidades) {
                echo '<tr>';
                echo '<td>';
                echo $necessidades->nome;
                echo '</td>';
                echo '<td>';
                echo $necessidades->nomeInstituicao;
                echo '</td>';
                echo '<td>';
                echo $necessidades->descricao;
                echo '</td>';
                echo '<td>';
                echo $necessidades->quantidade;
                echo '</td>';
                echo '<td>';
                echo $necessidades->data_validade;
                echo '</td>';
                echo '</tr>';
                }
            ?>
            
        </table>
        
    </div>
    
    <div class="col-md-2"></div>
</div>
