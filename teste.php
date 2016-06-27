<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a name="cadastro"></a>
<div class="panel panel-success">
    <div class="panel-heading">    
        <h3 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Cadastro de Doadores</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <?php
                    echo form_open('doadores/create');
                    echo form_label('Nome Completo (*)') . "<br />";
                    echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome'), set_value('nome')) . "<br />";
                    echo form_label('Endereço (*)') . "<br />";
                    echo form_input(array('id' => 'endereco', 'name' => 'endereco', 'class' => 'form-control', 'placeholder' => 'Endereço'), set_value('endereco')) . "<br />";
                    echo form_label('Telefone (*)') . "<br />";
                    echo form_input(array('id' => 'telefone', 'name' => 'telefone', 'class' => 'form-control', 'placeholder' => 'Telefone'), set_value('telefone')) . "<br />";
                    echo form_label('Data de Nascimento (*)') . "<br />";
                    echo form_input(array('id' => 'dataNascimento', 'name' => 'dataNascimento', 'class' => 'form-control', 'placeholder' => 'Data de Nascimento'), set_value('dataNascimento')) . "<br />";
                    echo form_label('Email (*)') . "<br />";
                    echo form_input(array('name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email'), set_value('email')) . "<br />";
                    echo form_label("Senha (*)") . "<br />";
                    echo form_password(array('name' => 'senha', 'class' => 'form-control', 'placeholder' => 'Senha'), set_value('senha')) . "<br />";
                    echo form_label("Repita a senha (*)") . "<br />";
                    echo form_password(array('name' => 'senha2', 'class' => 'form-control', 'placeholder' => 'Senha'), set_value('senha2')) . "<br /> <br />";
                ?>

                <?php
                    echo DivUtil::openDivRow();
                    echo DivUtil::openDivColMod("col-md-12");
                    echo '<span id="sumit" style="display: inline;float: right;">';
                    echo form_submit(array('name' => 'cadastrar', 'class' => 'btn btn-success'), 'Cadastrar') . "<br />";
                    echo '</span>';
                    echo DivUtil::closeDiv();
                    echo DivUtil::closeDivRow();
                    echo form_close();
                ?>       
            </div>
        </div>
    </div>
</div>
    </body>
</html>


