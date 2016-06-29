<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->library('image_lib');
    }
    
    public function comodoar() {
        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'paginasStaticas/ComoDoar',
        );
        $this->load->view("exibirDados", $dados);
       
    }
    
    public function politica() {
        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'paginasStaticas/politicaPrivacidade',
        );
        $this->load->view("exibirDados", $dados);
    }
    public function quemSomos() {
        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'paginasStaticas/quemSomos',
        );
        $this->load->view("exibirDados", $dados);
    }

}
