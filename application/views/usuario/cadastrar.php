
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
                        <h3 class="panel-title">Cadastro de Usuários</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo form_open('index.php/usuario/cadastrar');
                        echo form_label('Nome (*)') . "<br />";
                        echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome'), set_value('nome')) . "<br />";
                        
                        echo form_label('Endereço (*)') . "<br />";
                        echo form_input(array('id' => 'endereco', 'name' => 'endereco', 'class' => 'form-control', 'placeholder' => 'Endereço'), set_value('endereco')) . "<br />";
                       
                        echo form_label('Telefone (*)') . "<br />";
                        echo form_input(array('id' => 'telefone', 'name' => 'telefone', 'class' => 'form-control phone-mask', 'placeholder' => 'Telefone'), set_value('telefone')) . "<br />";
                        
                        echo form_label('Data de Nascimento (*)') . "<br />";
                        echo form_input(array('id' => 'dataNascimento', 'name' => 'dataNascimento', 'type' => 'date', 'class' => 'form-control', 'placeholder' => 'Data de Nascimento'), set_value('dataNascimento')) . "<br />";
                        
                        echo form_label('Email (*)') . "<br />";
                        echo form_input(array('name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email'), set_value('email')) . "<br />";
                        
                        echo form_label("Senha (*)") . "<br />";
                        echo form_password(array('name' => 'senha', 'class' => 'form-control', 'placeholder' => 'Senha'), set_value('senha')) . "<br />";
                        
                        echo form_label("Repita a senha (*)") . "<br />";
                        echo form_password(array('name' => 'senha2', 'class' => 'form-control', 'placeholder' => 'Repita a senha'), set_value('senha2')) . "<br /> <br />";
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

