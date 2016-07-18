<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Necessidade extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->library('session');
        $this->load->model('Necessidade_model', "NecessidadeDAO");
    }

    public function cadastrar()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required');
        $this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|numeric');
        $this->form_validation->set_rules('dataExpiracao', 'Data de Expiração', 'trim|required');
     

        if ($this->form_validation->run()):
            $dados = elements(array('nome', 'descricao', 'quantidade', 'dataExpiracao'), $this->input->post());
            $dados['dataInicio'] =  date('Y-m-d');
            $this->NecessidadeDAO->do_insert($dados);
        endif;

        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'necessidades/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }

    public function consultar()
    {
       
    }

}
