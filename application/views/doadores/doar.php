
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

        if ($this->session->flashdata('doacaook')):
            echo '<div class="alert alert-success" role="alert">';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            echo $this->session->flashdata('doacaook');
            echo '</div>';
        endif;
        ?>
        <div class="panel panel-sucess">
            <div class="panel-body">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Efetuar doações</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo form_open('index.php/usuario/cadastrar');
                        echo form_label('Nome (*)') . "<br />";
                        echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome'), set_value('nome')) . "<br />";
                        
                        echo form_label('Instituição (*)') . "<br />";
                        echo form_input(array('id' => 'instituicao', 'name' => 'instituicao', 'class' => 'form-control', 'placeholder' => 'Instituição'), set_value('instituicao')) . "<br />";
                       
                        echo form_label('Necessidade') . "<br />";
                        echo form_input(array('id' => 'necessidade', 'name' => 'necessidade', 'type' => 'date', 'class' => 'form-control', 'placeholder' => 'Necessidade'), set_value('necessidade')) . "<br />";
                        
                        echo form_label('Quantidade (*)') . "<br />";
                        echo form_input(array('name' => 'quantidade', 'class' => 'form-control', 'placeholder' => 'Quantidade'), set_value('quantidade')) . "<br />";
                        
                        ?>
                        <?php
                        echo '<span id="sumit" style="display: inline;float: right;">';
                        echo form_submit(array('name' => 'doar', 'class' => 'btn btn-success'), 'Doar') . "<br />";
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

