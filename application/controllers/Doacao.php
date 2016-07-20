<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doador extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->model('Doacao_model', "DoacaoDAO");
    }

    public function cadastrar() {
        $this->form_validation->set_rules('nomeDoador', 'NomeDoador', 'trim|required|max_length[200]');
        $this->form_validation->set_rules('instituicao', 'Instituicao', 'trim|required|max_length[200]');
        $this->form_validation->set_rules('necessidade', 'Necessidade', 'trim|required');
        $this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|max_length[100]');

        if ($this->form_validation->run()):
            
            $dados = elements(array('id_doador', 'id_instituicao', 'id_necessidades', 'quantidade', 'data'), $this->input->post());
                $this->DoacaoDAO->do_insert($dados);
        endif;
        
        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'doacao/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }
    
    public function consultar(){
        if (isset($this->session->isAdministrador)):        
            $doadores = $this->DoadorDAO->get_all();
            $dados = array(
                'titulo' => 'Sistema Solidário',
                'tela' => 'doadores/consultar',
                'doadores' => $doadores,
        );
        $this->load->view("exibirDados", $dados);
        else:
            redirect('/inicio');
        endif;
    }

}
