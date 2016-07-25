<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Necessidade extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
        $this->load->library('session');
        $this->load->model('Necessidade_model', "NecessidadeDAO");
        $this->load->model('Instituicao_model', "InstituicaoDAO");
    }

    public function cadastrar() {
        $instituicoes = $this->InstituicaoDAO->get_all();
        foreach ($instituicoes->result() as $instituicao){      
           if ($instituicao->responsavelEmail==$this->session->email){
               $id_instituicao=$instituicao->id;
           }
        }
        if (isset($id_instituicao)):
            $this->form_validation->set_rules('nome', 'Nome', 'trim|required');
            $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required');
            $this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|numeric');
            $this->form_validation->set_rules('data_validade', 'Data de Validade', 'trim|required');


            if ($this->form_validation->run()):
                $dados = elements(array('nome', 'descricao', 'quantidade', 'data_validade','id_instituicao'=>$id_instituicao), $this->input->post());
                $this->NecessidadeDAO->do_insert($dados);
            endif;

            $dados = array(
                'titulo' => 'Sistem Solidário',
                'tela' => 'necessidades/cadastrar',
            );
            $this->load->view("exibirDados", $dados);
        else:
            redirect('/inicio');
        endif;
    }

    public function consultar() {
        $necessidades = $this->NecessidadeDAO->get_all();
        $instituicao = $this->InstituicaoDAO->get_instituicoes_by_id($necessidades->id_instituicao);
        $dados = array(
            'titulo' => 'Sistema Solidário',
            'tela' => 'instituicoes/consultar_necessidades',
            'necessidades' => $necessidades,
            'instituicoes'=>$instituicao,
                );
        $this->load->view("exibirDados", $dados);
    }

}
