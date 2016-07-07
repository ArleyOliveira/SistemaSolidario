<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function do_insert($dados = NULL) {

        if ($dados != NULL):
            $this->db->insert('usuario', $dados);
            $this->session->set_flashdata('cadastrook', 'Cadastro efetuado com sucesso!');
            redirect('index.php/usuario/cadastrar');
        endif;
    }

    public function get_all() {
        return $this->db->get('usuario');
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
      }*/


    public function get_Login($email = NULL, $senha = NULL) {
        echo $email . ' '. $senha;
        if ($email != NULL && $senha != NULL):
            $sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
            $query = $this->db->query($sql, array($email, $senha));
            var_dump($query->result());
            if ($query->num_rows() > 0 && $query->num_rows() == 1):
                return $query;
            else:
                return false;
            endif;
        else:
            return false;

        endif;
    }

      /*
      public function do_update($dados = NULL, $condicao = NULL) {
      if ($dados != NULL && $condicao != NULL):
      $this->db->update('usuario', $dados, $condicao);
      $this->session->nome = $dados['nome'];
      $this->session->set_flashdata('edicaook', IconsUtil::getIcone(IconsUtil::ICON_OK).' Dados alterado com sucesso!');
      redirect('usuario/update/');
      endif;
      } */
}
