<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Insituicoes extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->library('session');
        $this->load->model('Doador_model', "DoadorDAO");
    }

    public function cadastrar() {
        echo "teste";
        
        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'instituicoes/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }
    
}
