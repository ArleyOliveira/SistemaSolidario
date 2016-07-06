

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
                        <h3 class="panel-title">Cadastro de Instituiçoes</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo form_open('index.php/instituicao/cadastrar');
                        echo form_label('Nome (*)') . "<br />";
                        echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome'), set_value('nome')) . "<br />";

                        echo form_label('CNPJ (*)') . "<br />";
                        echo form_input(array('id' => 'cnpj', 'name' => 'cnpj', 'class' => 'form-control', 'placeholder' => 'CNPJ'), set_value('cnpj')) . "<br />";


                        echo form_label('Telefone (*)') . "<br />";
                        echo form_input(array('id' => 'telefone', 'name' => 'telefone', 'class' => 'form-control', 'placeholder' => 'Telefone'), set_value('telefone')) . "<br />";

                        echo form_label('Email (*)') . "<br />";
                        echo form_input(array('name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email'), set_value('email')) . "<br />";

                        echo form_label('Endereço (*)') . "<br />";
                        echo form_input(array('id' => 'endereco', 'name' => 'endereco', 'class' => 'form-control', 'placeholder' => 'Endereço'), set_value('endereco')) . "<br />";

                        echo form_label('Descriçao (*)') . "<br />";
                        echo form_input(array('name' => 'descricao', 'class' => 'form-control', 'placeholder' => 'Descriçao'), set_value('descricao')) . "<br />";
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
