<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Instituicao extends CI_Controller
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
        $this->load->model('Instituicao_model', "InstituicaoDAO");
    }

    public function cadastrar()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('telefone', 'Telefone', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('endereco', 'Endereco', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('descricao', 'Descrição', 'trim|required|max_length[800]');
        $this->form_validation->set_rules('responsavelEmail', 'Email do Responsável', 'trim|required|max_length[50]');

        if ($this->form_validation->run()):
            $dados = elements(array('nome', 'cnpj', 'telefone', 'email', 'endereco', 'descricao'), $this->input->post());
            $emailResponsavel = $this->input->post()['responsavelEmail'];
            $this->InstituicaoDAO->do_insert($dados, $emailResponsavel);
        endif;

        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'instituicoes/cadastrar',
        );
        $this->load->view("exibirDados", $dados);
    }

    public function consultar()
    {
        if (isset($this->session->isAdministrador)):
            $instituicoes = $this->InstituicaoDAO->get_all();
            $dados = array(
                'titulo' => 'Sistema Solidário',
                'tela' => 'instituicoes/consultar',
                'instituicoes' => $instituicoes,
            );
        $this->load->view("exibirDados", $dados);
        else:
            redirect('inicio/');
        endif;
    }

    public function ativarInstituicao($id)
    {
        if (isset($this->session->isAdministrador)):
            $dados = array('isDisponivel' => true);
            $condicao = array('id' => $id);
            $this->InstituicaoDAO->do_update($dados, $condicao);
        else:
            redirect('inicio/');
        endif;
    }
    
    public function desativarInstituicao($id)
    {
        if (isset($this->session->isAdministrador)):
            $dados = array('isDisponivel' => false);
            $condicao = array('id' => $id);
            $this->InstituicaoDAO->do_update($dados, $condicao);
        else:
            redirect('inicio/');
        endif;
    }

    public function cadastrarNecessidade()
    {
    //cadastrar necessidades responsável pela instituição
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('descricao', 'Descricao', 'trim|required|max_length[800]');
        $this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|max_length[100]');       
        $this->form_validation->set_rules('dataExpiracao', 'Data de Expiracao', 'trim|required|max_length[20]');
   

        if ($this->form_validation->run()):
            $dados = elements(array('nome', 'cnpj', 'telefone', 'email', 'endereco', 'descricao'), $this->input->post());
            $this->InstituicaoDAO->do_insert_necessidades($dados);
        endif;

        $dados = array(
            'titulo' => 'Sistem Solidário',
            'tela' => 'instituicoes/necessidades',
        );
        $this->load->view("exibirDados", $dados);
    }
    
}
