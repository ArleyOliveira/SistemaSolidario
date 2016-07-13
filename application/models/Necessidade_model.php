<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Necessidade_model extends CI_Model {

    public function do_insert($dados = NULL) {
        if ($dados != NULL):
            $this->db->insert('necessidades', $dados);
            $this->session->set_flashdata('cadastrook','Cadastro efetuado com sucesso!');
            redirect('index.php/necessidade/cadastrar');
        endif;
    }

    public function get_all() {
        return $this->db->get('necessidades');
    }
   
}
