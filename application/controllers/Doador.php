<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doador extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->model('Doador_model', "DoadorDAO");
    }

    public function cadastrar() {
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('endereco', 'Senha', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('telefone', 'Área do conhecimento', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('dataNascimento', 'Data de Nascimento', 'trim|required|max_length[100]');   
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]|strtolower|valid_email|is_unique[doadores.email]');
	$this->form_validation->set_rules('senha', 'Senha', 'trim|required');
        $this->form_validation->set_message('matches', 'O campo %s não corresponde com o campo %s');
        $this->form_validation->set_rules('repitaSenha', 'Repita a Senha', 'trim|required|matches[senha]');
         
      
        if ($this->form_validation->run()):
            $dados = elements(array('nome', 'endereco', 'telefone', 'dataNascimento', 'email', 'senha'), $this->input->post());
                $dados['senha'] = md5($dados['senha']);
                $this->DoadorDAO->do_insert($dados);
        endif;
        
        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'paginasStaticas/inicio',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function consultar(){
        $doadores = $this->DoadorDAO->get_all();
        $dados = array(
            'titulo' => 'Sistema Solidário',
            'tela' => 'doador/consultar',
            'disciplinas' => $doadores,
        );
        $this->load->view("exibirDados", $dados);
    }

}
