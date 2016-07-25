<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
        if (validation_errors() != NULL):
            echo '<div class="alert alert-danger" role="alert">';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            echo validation_errors();
            echo '</div>';
        endif;

        if ($this->session->flashdata('cadastrook')):
            echo '<div class="alert alert-success" role="alert">';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            echo $this->session->flashdata('cadastrook');
            echo '</div>';
        endif;
        ?>
        <div class="panel panel-sucess">
            <div class="panel-body">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Solicitações de doação</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo form_open('index.php/necessidade/cadastrar');
                        echo form_label('Nome (*)') . "<br />";
                        echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome'), set_value('nome')) . "<br />";
                   
                        echo form_label('Descrição (*)') . "<br />";
                        echo form_textarea(array('name' => 'descricao', 'class' => 'form-control', 'placeholder' => 'Descrição'), set_value('descricao')) . "<br />";
                        
                        echo form_label('Quantidade (*)') . "<br />";
                        echo form_input(array('id' => 'quantidade', 'name' => 'quantidade', 'class' => 'form-control', 'placeholder' => 'Quantidade'), set_value('quantidade')) . "<br />";

                        echo form_label('Data de Validade (*)') . "<br />";
                        echo form_input(array('id' => 'data_validade', 'name' => 'data_validade', 'type' => 'date', 'class' => 'form-control', 'placeholder' => 'Data de Validade'), set_value('data_validade')) . "<br />";
                        
                        ?>
                        <?php
                        echo '<span id="sumit" style="display: inline;float: right;">';
                        echo form_submit(array('name' => 'cadastrar', 'class' => 'btn btn-success'), 'Cadastrar') . "<br />";
                        echo '</span>';
                        echo form_close();
                        ?>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
