<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->model('Usuario_model', "UsuarioDAO");
    }

    public function cadastrar() {
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('dataNascimento', 'Data de Nascimento', 'trim|required|max_length[100]');   
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]|strtolower|valid_email|is_unique[usuario.email]');
	$this->form_validation->set_rules('isModerador','IsModerador');
        $this->form_validation->set_rules('isAdministrador','IsAdministrador');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required');
        $this->form_validation->set_message('matches', 'O campo %s não corresponde com o campo %s');
        $this->form_validation->set_rules('senha2', 'Repita a Senha', 'trim|required|matches[senha]');
        
         
      
        if ($this->form_validation->run()):
            $dados = elements(array('nome', 'dataNascimento', 'email', 'senha'), $this->input->post());
                $dados['senha'] = md5($dados['senha']);
                $this->UsuarioDAO->do_insert($dados);
        endif;
        
        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'usuario/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function consultar(){
        $usuarioes = $this->DoadorDAO->get_all();
        $dados = array(
            'titulo' => 'Sistema Solidário',
            'tela' => 'usuario/consultar',
            'usuario' => $usuarioes,
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function login() {
        $this->form_validation->set_rules('email', 'EMAIL', 'trim|required|max_length[50]|strtolower|valid_email');
        $this->form_validation->set_rules('senha', 'SENHA', 'trim|required|strtolower');
        
        if ($this->form_validation->run() == TRUE) {
            
            $dados = elements(array('email', 'senha'), $this->input->post());
            $dados['senha'] = md5($dados['senha']);
            
               $usuario = $this->UsuarioDAO->get_byEmail_Admin($dados['email'], $dados['senha']);
                
        if ($usuario != false):
               foreach ($usuario->result() as $linha):
                    $nome = $linha->nome;
                    $email = $linha->email;
                                        
        endforeach;
                $novousuario = array(
                    'nome' => $nome,
                    'email' => $email,
                    'esta_logado' => TRUE,
                );
                
                $this->session->set_userdata($novousuario);
                
                redirect('inicio/home');
            else:
                
                $this->session->set_flashdata('usuarioinvalido', 'Usuário ou senha invalido. Tente novamente!');
                //redirect('/');
            endif;
            
        }else {
            
            if (isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['tipo'])) {
                $this->session->set_flashdata('usuarioinvalido', 'Os campos não foram preenchidos corretamente ou podem está vazios!');
            }
        }
        
        $this->load->view("login");
    }

}
