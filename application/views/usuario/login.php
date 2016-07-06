
<?php
if($this->session->userdata('email') != '' || $this->session->userdata('email') != NULL):
    redirect("inicio/home");
endif;
$erroAlert = '';
?>
<!DOCTYPE html>

    <body>
        <body>

            <div class="container-fluid">
                
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">                    
                    <?php
                        if ($this->session->flashdata('usuarioinvalido')):
                            echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_DANGER);
                            echo IconsUtil::getIcone(IconsUtil::ICON_REMOVE)  . ' ' . $this->session->flashdata('usuarioinvalido');
                            echo ModMensagemUtil::getCloseAlertMensagem();
                        endif;
                     ?>
                    <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <div class="panel-title">Sistema Solidário | Login</div>
                                
                            </div>     

                            <div style="padding-top:30px" class="panel-body" >

                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                <form id="loginform" class="form-horizontal" role="form" method="POST" action="<?php echo base_url('usuario/login') ?>">
                                        <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <?php echo form_input(array('id' => 'inputEmail', 'type' => 'email', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'Usuário', 'required'=>'', 'autofocus'=>''), set_value('email'));?>                                        
                                    </div>

                                    <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>
                                     </div>
                         
                                    <select name="tipo"  class="form-control">
                                      
                                        <option value="2">Adminstrador</option>
                                    </select>


                                    <div class="input-group">
                                              <div class="checkbox">
                                                <label>
                                                  <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
                                                </label>
                                              </div>
                                            </div>


                                        <div style="margin-top:10px" class="form-group">
                                            <!-- Button -->

                                            <div class="col-sm-12 controls text-right">
                                                <button type="submit" id="btn-login" href="#" class="btn btn-success">Login  </button>
                                              <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login com Facebook</a>-->

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-12 control">
                                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" class="text-center" >
                                                    
                                                </div>
                                            </div>
                                        </div>    
                                    </form>     
                                </div>                     
                            </div>  
                </div>  
    </body>
</html>