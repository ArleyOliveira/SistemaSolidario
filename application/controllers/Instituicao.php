<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Instituicao extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->library('session');
        $this->load->model('Instituicao_model', "InstituicaoDAO");
    }

    public function cadastrar() {
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'trim|required|max_length[14]');
        $this->form_validation->set_rules('telefone', 'Área do conhecimento', 'trim|required|max_length[100]');  
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('endereco', 'Endereco', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('descricao', 'Descricao', 'trim|required|max_length[800]');
        $this->form_validation->set_rules('isDisponivel','IsDisponivel');

         
      
        if ($this->form_validation->run()):
            $dados = elements(array('nome', 'cnpj', 'telefone', 'email', 'endereco', 'descricao', 'isDisponivel'), $this->input->post());            
                $this->InstituicaoDAO->do_insert($dados);
        endif;
        
        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'instituicoes/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function consultar(){
        $instituicoes = $this->InstituicaoDAO->get_all();
        $dados = array(
            'titulo' => 'Sistema Solidário',
            'tela' => 'instituicoes/consultar',
            'instituicoes' => $instituicoes,
        );
        $this->load->view("exibirDados", $dados);
    }

}
