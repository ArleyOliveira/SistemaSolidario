<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Doador_model extends CI_Model {

    public function do_insert($dados = NULL) {

        if ($dados != NULL):
            $this->db->insert('doacoes', $dados);
            $this->session->set_flashdata('cadastrook','Cadastro de Doação realizado '
                    . 'com sucesso!');
            redirect('index.php/doacao/cadastrar');
        endif;
    }

    public function get_all() {
        return $this->db->get('doacoes');
    }
    
    

    /*
      public function do_delete($condicao = NULL) {

      if ($condicao != NULL):
      $this->db->delete('usuario', $condicao);
      $this->session->set_flashdata('excluirok', IconsUtil::getIcone(IconsUtil::ICON_OK). ' Registro deletado com sucesso!');
      endif;
      }

      public function get_all() {
      return $this->db->get('usuario');
      }


      public function get_byEmailAt($email = NULL, $tabela = NULL) {
      if ($email != NULL && $tabela != NULL):
      $this->db->where('email', $email);
      $this->db->limit(1);
      return $this->db->get($tabela);
      else:
      return false;

      endif;
      }

      public function do_update($dados = NULL, $condicao = NULL) {
      if ($dados != NULL && $condicao != NULL):
      $this->db->update('usuario', $dados, $condicao);
      $this->session->nome = $dados['nome'];
      $this->session->set_flashdata('edicaook', IconsUtil::getIcone(IconsUtil::ICON_OK).' Dados alterado com sucesso!');
      redirect('usuario/update/');
      endif;
      } */
}
